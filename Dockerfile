# syntax=docker/dockerfile:1

# --- Stage 1: dependências PHP (composer) ---
FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
# --no-scripts + --ignore-platform-reqs: o código completo ainda não está aqui,
# e as extensões PHP só existem no runtime final. Autoloader otimizado.
RUN composer install --no-dev --prefer-dist --no-progress --no-interaction \
    --optimize-autoloader --no-scripts --ignore-platform-reqs

# --- Stage 2: build dos assets frontend (v1 = Laravel Mix, v2 = Vite) ---
FROM node:24 AS assets
WORKDIR /app
COPY . .
# Instala deps dos workspaces e compila os dois frontends do Firefly.
# Segue o mesmo processo do workflow oficial de release (npm run prod/build).
# O v2 (Vite) pode falhar sem impedir o boot; por isso o "|| true".
RUN npm install
RUN npm run prod  --workspace=v1 --verbose \
 && (npm run build --workspace=v2 --verbose || true)

# --- Stage 3: runtime (FrankenPHP com PHP 8.5) ---
FROM serversideup/php:8.5-frankenphp
WORKDIR /var/www/html

# Instala as extensões PHP exigidas pelo Firefly além das já presentes na base.
USER root
RUN set -eux; \
    install-php-extensions bcmath intl gd pdo_mysql

# Gera o locale pt_BR.UTF-8. Sem ele o Firefly não formata valores monetários
# nem datas no padrão brasileiro (R$ 1.234,56). Debian slim não traz locale-gen,
# então instalamos o pacote 'locales' e geramos o locale manualmente.
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends locales; \
    sed -i 's/^# *\(pt_BR.UTF-8\)/\1/' /etc/locale.gen; \
    echo 'pt_BR.UTF-8 UTF-8' >> /etc/locale.gen; \
    locale-gen; \
    rm -rf /var/lib/apt/lists/*
USER www-data

# Copia o código-fonte da aplicação (respeitando o dono www-data).
COPY --chown=www-data:www-data . .
RUN rm -f bootstrap/cache/*.php

# Habilita as automações do Laravel no boot: roda migrations, storage:link e
# otimizações (config/route/view cache). É isto que conecta no banco existente
# e aplica as migrations pendentes sem perder dados.
ENV AUTORUN_ENABLED=true

# Traz o vendor e os assets compilados dos estágios anteriores.
# public/v1 (Laravel Mix) e public/build (Vite) são regravados pelo build.
COPY --chown=www-data:www-data --from=vendor /app/vendor ./vendor
COPY --chown=www-data:www-data --from=assets /app/public/v1 ./public/v1
COPY --chown=www-data:www-data --from=assets /app/public/build ./public/build
COPY --chown=www-data:www-data --from=assets /app/public/mix-manifest.json ./public/mix-manifest.json
