<?php

/**
 * email.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // common items
    'greeting'                                   => 'Olá,',
    'closing'                                    => 'Bip Bop,',
    'signature'                                  => 'O Robô de Emails do Firefly III',
    'footer_ps'                                  => 'PS: Esta mensagem foi enviada porque um acesso do IP :ipAddress a ativou.',

    // admin test
    'admin_test_subject'                         => 'Uma mensagem de teste de sua instância do Firefly III',
    'admin_test_body'                            => 'Essa é uma mensagem de teste de sua instância do Firefly III. Foi enviada para :email.',
    'admin_test_message'                         => 'Essa é uma mensagem de teste de sua instância do Firefly III para o canal ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Um convite foi criado',
    'invitation_created_body'                    => 'O administrador ":email" criou um convite de usuário que pode ser usado por quem administrar o e-mail ":invitee". O convite é válido por 48h.',
    'invite_user_subject'                        => 'Você foi convidado a criar uma conta no Firefly III.',
    'invitation_introduction'                    => 'Você foi convidado para criar uma conta no Firefly III em **:host**. Firefly III é um gerenciador privado de finanças pessoal e auto-hospedado. Todas as crianças legais estão usando-o.',
    'invitation_invited_by'                      => 'Você foi convidado por ":admin" e este convite foi enviado para ":invitee". É você, né?',
    'invitation_url'                             => 'O convite é válido por 48 horas e pode ser resgatado acessando o [Firefly III](:url). Aproveite!',

    // new IP
    'login_from_new_ip'                          => 'Novo login no Firefly III',
    'slack_login_from_new_ip'                    => 'Novo login no Firefly III do IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III detectou um novo login em sua conta a partir de um endereço IP desconhecido. Caso você nunca tenha logado do endereço IP abaixo, ou o fez há mais de seis meses, o Firefly III irá notificá-lo.',
    'new_ip_warning'                             => 'Caso você reconheça este endereço IP ou o login, você pode ignorar esta mensagem. Ou se você não fez login, se não tem ideia do que se trata, verifique a segurança da sua senha, altere-a e desconecte-se de todas as outras sessões. Para fazer isso, vá para sua página de perfil. Claro que você já habilitou 2FA, né? Mantenha-se seguro!',
    'ip_address'                                 => 'Endereço IP',
    'host_name'                                  => 'Servidor',
    'date_time'                                  => 'Data + hora',
    'user_agent'                                 => 'Navegador',

    // access token created
    'access_token_created_subject'               => 'Um novo token de acesso foi criado',
    'access_token_created_body'                  => 'Alguém (esperamos que você) acabou de criar um novo token de acesso à API do Firefly III para sua conta.',
    'access_token_created_explanation'           => 'Este token permite acessar **TODOS** os seus registros financeiros através da API do Firefly III.',
    'access_token_created_revoke'                => 'Se não foi você, por favor revogue este token o mais rápido possível em :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Um usuário desconhecido tentou fazer login',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'O Firefly III detectou uma falha de login',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'Se você reconhece esse endereço IP ou a tentativa de login, você pode ignorar essa mensagem. Se você não tentou fazer login ou não tem ideia do que isso se trata, verifique se a sua senha é segura, e saia de todas as outras sessões. Para fazer isso, vá para a página de perfil. Claro que você também já tem a autenticação de dois fatores ativadas, certo? Mantenha-se seguro!',

    // registered
    'registered_subject'                         => 'Bem-vindo(a) ao Firefly III!',
    'registered_subject_admin'                   => 'Um novo usuário se cadastrou',
    'admin_new_user_registered'                  => 'Um novo usuário registrou. Usuário **:email** recebeu ID de usuário #:id.',
    'registered_welcome'                         => 'Boas-vindas ao [Firefly III](:address). Seu registro foi concluído e este e-mail está aqui para confirmar. Uhull!',
    'registered_pw'                              => 'Se você esqueceu sua senha, por favor redefina-a, usando a [ferramenta de redefinição de senha](:address/password/reset).',
    'registered_help'                            => 'Há um ícone de ajuda no canto superior direito de cada página. Se você precisar de ajuda, clique nele!',
    'registered_closing'                         => 'Aproveite!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Redefinição de senha:',
    'registered_doc_link'                        => 'Documentação:',

    // new version
    'new_version_email_subject'                  => 'Uma nova versão do Firefly III está disponível',

    // email change
    'email_change_subject'                       => 'O seu endereço de email no Firefly III mudou',
    'email_change_body_to_new'                   => 'Você ou alguém com acesso à sua conta Firefly III alterou seu endereço de e-mail. Se não esperava esta mensagem, por favor, ignore e apague-a.',
    'email_change_body_to_old'                   => 'Você ou alguém com acesso à sua conta Firefly III alterou seu endereço de e-mail. Se você não esperava que isso acontecesse, você **DEVE** entrar no link "desfazer" abaixo, para proteger sua conta!',
    'email_change_ignore'                        => 'Se você iniciou esta alteração, você pode ignorar esta mensagem.',
    'email_change_old'                           => 'O endereço de e-mail antigo era: :email',
    'email_change_old_strong'                    => 'O endereço de e-mail anterior era: **:email**',
    'email_change_new'                           => 'O novo endereço de e-mail é: :email',
    'email_change_new_strong'                    => 'O novo endereço de e-mail é: **:email**',
    'email_change_instructions'                  => 'Você não pode usar o Firefly III até confirmar esta alteração. Siga o link abaixo para fazer isso.',
    'email_change_undo_link'                     => 'Para desfazer a alteração, abra este link:',

    // OAuth token created
    'oauth_created_subject'                      => 'Um novo cliente OAuth foi criado',
    'oauth_created_body'                         => 'Alguém (esperamos que você) acabou de criar um Cliente OAuth na API do Firefly III para sua conta de usuário. Está nomeado como ":name" e a URL de retorno é `:url`.',
    'oauth_created_explanation'                  => 'Com esta chave, o cliente pode acessar **TODOS** os seus registros financeiros através da API do Firefly III.',
    'oauth_created_undo'                         => 'Se não foi você, revogue o acesso desta chave o mais rápido possível em `:url`',

    // reset password
    'reset_pw_subject'                           => 'Seu pedido de redefinição de senha',
    'reset_pw_message'                           => 'Você recebeu instruções para redefinir sua senha no seu e-mail. Se foi você, por favor siga as instruções.',
    'reset_pw_instructions'                      => 'Alguém tentou redefinir sua senha. Se foi você, por favor, siga o link abaixo para continuar.',
    'reset_pw_warning'                           => '**POR FAVOR**, confirme que o link realmente direciona você para o Firefly III que você espera!',

    // error
    'error_subject'                              => 'Ocorreu um erro no Firefly III',
    'error_intro'                                => 'Firefly III v:version encontrou um erro: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'O erro foi do tipo ":class".',
    'error_timestamp'                            => 'O erro aconteceu em/às: :time.',
    'error_location'                             => 'Esse erro ocorreu no arquivo "<span style="font-family: monospace;">:file</span>", na linha :line com o código :code.',
    'error_user'                                 => 'O erro foi encontrado pelo usuário #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Não havia nenhum usuário conectado para esse erro ou nenhum usuário foi detectado.',
    'error_ip'                                   => 'O endereço de IP relacionado a este erro é: :ip',
    'error_url'                                  => 'URL é: :url',
    'error_user_agent'                           => 'Agente de usuário: :userAgent',
    'error_stacktrace'                           => 'O rastreamento completo do erro está abaixo. Se você acha que isso é um bug no Firefly III, você pode encaminhar essa mensagem para<a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. Isso pode ajudar a corrigir o erro que você acabou de encontrar.',
    'error_github_html'                          => 'Se você preferir, também pode abrir uma nova issue no <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Se preferir, você também pode abrir uma nova issue em https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'O rastreamento completo está abaixo:',
    'error_headers'                              => 'Os seguintes cabeçalhos também podem ser relevantes:',
    'error_post'                                 => 'Isto foi enviado pelo usuário:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III criou uma nova transação.|Firefly III criou :count novas transações',
    'new_journals_header'                        => 'Firefly III criou uma transação para você. Você pode encontrá-la em sua instância do Firefly III:|Firefly III criou :count transações para você. Você pode encontrá-los em sua instância do Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Você tem :count assinaturas com pagamento em atraso',
    'subscriptions_overdue_subject_single'       => 'Você tem uma assinatura com pagamento em atraso',
    'subscriptions_overdue_warning_intro_single' => 'Você tem uma assinatura com pagamento em atraso. Nas datas a seguir um pagamento era esperado, mas ainda não foi registrado.',
    'subscriptions_overdue_warning_intro_multi'  => 'Você tem :count assinatura(s) com pagamento em atraso. Nas datas a seguir um pagamento era esperado, mas ainda não foi registrado.',
    'subscriptions_overdue_please_action_single' => 'Talvez você apenas não tenha vinculado uma transação a esta assinatura. Nesse caso, por favor, faça o vínculo. Você NÃO receberá outro aviso sobre este atraso. Um novo alerta será enviado apenas para o PRÓXIMO vencimento.',
    'subscriptions_overdue_please_action_multi'  => 'Talvez você apenas não tenha vinculado uma transação a estas assinaturas. Nesse caso, por favor, faça o vínculo. Você NÃO receberá outro aviso sobre estes atrasos. Um novo alerta será enviado apenas para os PRÓXIMOS vencimentos.',
    'subscriptions_overdue_outro'                => 'Se você acredita que esta mensagem é um erro, entre em contato com o desenvolvedor do Firefly III. Obrigado por usar o Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Sua assinatura ":name" vencerá em :diff dias',
    'bill_warning_subject_now_end_date'          => 'Sua assinatura ":name" vence HOJE',
    'bill_warning_subject_extension_date'        => 'Sua assinatura ":name" vai ser extendida ou cancelada em :diff dias',
    'bill_warning_subject_now_extension_date'    => 'Sua assinatura ":name" vai ser extendida ou cancelada HOJE',
    'bill_warning_end_date'                      => 'Sua assinatura **":name"** vai vencer em :date. Este momento acontecerá em cerca de **:diff dias**.',
    'bill_warning_extension_date'                => 'Sua assinatura **":name"** vai vencer em :date. Este momento acontecerá em cerca de **:diff dias**.',
    'bill_warning_end_date_zero'                 => 'Sua assinatura **":name"** vai vencer em :date. Este momento acontecerá **HOJE!**',
    'bill_warning_extension_date_zero'           => 'Sua assinatura **":name"** deverá ser renovada ou cancelada em :date. Este momento acontecerá **HOJE!**',
    'bill_warning_please_action'                 => 'Por favor, tome a medida apropriada.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Você ativou o segundo fator de autenticação',
    'enabled_mfa_slack'                          => 'Você (:email) ativou o segundo fator de autenticação. Isso não está certo? Verifique suas configurações!',
    'have_enabled_mfa'                           => 'Você ativou a autenticação de vários fatores em sua conta Firefly III ":email". Isso significa que você precisará usar um aplicativo autenticador para acessar de agora em diante.',
    'enabled_mfa_warning'                        => 'Se você não ativou isso, por favor contate o seu administrador imediatamente ou verifique a documentação do Firefly III.',

    'disabled_mfa_subject'                       => 'Você desativou o segundo fator de autenticação!',
    'disabled_mfa_slack'                         => 'Você (:email) desativou a autenticação de vários fatores. Isso não está correto? Verifique suas configurações!',
    'have_disabled_mfa'                          => 'Você desativou a autenticação de vários fatores em sua conta Firefly III ":email".',
    'disabled_mfa_warning'                       => 'Se você não desativou isso, por favor, entre imediatamente em contato com seu administrador ou verifique a documentação do Firefly III.',

    'new_backup_codes_subject'                   => 'Você gerou novos códigos de backup',
    'new_backup_codes_slack'                     => 'Você (:email) gerou novos códigos de backup. Eles podem ser usados para fazer login no Firefly III. Isso não está certo? Verifique suas configurações!',
    'new_backup_codes_intro'                     => 'Você (:email) gerou novos códigos de backup. Eles podem ser usados para fazer login no Firefly III se focê perder acesso ao seu app de autenticação.',
    'new_backup_codes_warning'                   => 'Por favor, guarde esses códigos em um local seguro. Se você os perder, não será capaz de fazer login no Firefly III. Se você não fez isso, por favor contate o seu administrador imediatamente ou verifique a documentação do Firefly III.',

    'used_backup_code_subject'                   => 'Você usou um código de backup para fazer login',
    'used_backup_code_slack'                     => 'Você (:email) usou um código de backup para fazer login',

    'used_backup_code_intro'                     => 'You (:email) have used a back-up co    de to login to Firefly III. You now have one less back-up code to login with. Please remove it from your list.',
    'used_backup_code_warning'                   => 'Se você não fez isso, por favor entre imediatamente em cotnato com seu administrador ou verifique a documentação do Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Você tem apenas :count código(s) de backup restante(s)!',
    'mfa_few_backups_left_slack'                 => 'Você (:email) tem apenas :count código(s) de backup restante(s)!',
    'few_backup_codes_intro'                     => 'Você (:email) usou a maioria dos seus códigos de backup e agora tem apenas :count código(s) de backup restante(s). Por favor, gere códigos novos assim que possível.',
    'few_backup_codes_warning'                   => 'Sem códigos de backup, você não pode recuperar sua conta com segundo fator de autenticação, caso você perca acesso ao seu app gerador de códigos.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'Você NÃO tem códigos de backup restantes!',
    'mfa_no_backups_left_slack'                  => 'Você (:email) NÃO tem códigos de backup restantes!',
    'no_backup_codes_intro'                      => 'Você (:email) usou TODOS os seus códigos de backup. Por favor, gere novos códigos assim que possível.',
    'no_backup_codes_warning'                    => 'Sem códigos de backup, você não pode recuperar sua conta com segundo fator de autenticação, caso você perca acesso ao seu app gerador de códigos.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Você tentou e não conseguiu usar o segundo fator de autenticação :count vezes!',
    'mfa_many_failed_slack'                      => 'Você (:email) tentou e não conseguiu usar o segundo fator de autenticação :count vezes. Isso não está certo? Verifique suas configurações!',
    'mfa_many_failed_attempts_intro'             => 'Você (:email) tentou usar o segundo fator de autenticação :count vezes, mas essas tentativas falharam. Tem certeza que você está usando o segundo fator de autenticação correto? Tem certeza que o horário no servidor está correto?',
    'mfa_many_failed_attempts_warning'           => 'Se você não fez isso, por favor entre em contato imediatamente com seu administrador ou verifique a documentação do Firefly III.',
];
