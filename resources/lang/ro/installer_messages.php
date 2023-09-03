<?php 

return [
    'title' => 'Instalator Laravel',
    'next' => 'Urmatorul pas',
    'back' => 'Anterior',
    'finish' => 'Instalare',
    'forms' => [
        'errorTitle' => 'Au avut loc următoarele erori:',
    ],
    'welcome' => [
        'templateTitle' => 'Bine ati venit',
        'title' => 'Instalator Laravel',
        'message' => 'Expertul de instalare și configurare ușoară.',
        'next' => 'Verificați cerințele',
    ],
    'requirements' => [
        'templateTitle' => 'Pasul 1 | Cerințe de server',
        'title' => 'Cerințe de server',
        'next' => 'Verificați permisiunile',
    ],
    'permissions' => [
        'templateTitle' => 'Pasul 2 | Permisiuni',
        'title' => 'Permisiuni',
        'next' => 'Configurați mediul',
    ],
    'environment' => [
        'menu' => [
            'templateTitle' => 'Pasul 3 | Setări de mediu',
            'title' => 'Setări de mediu',
            'desc' => 'Vă rugăm să selectați modul în care doriți să configurați fișierul <code> .env </code> pentru aplicații.',
            'wizard-button' => 'Configurare asistent formular',
            'classic-button' => 'Editor de text clasic',
        ],
        'wizard' => [
            'templateTitle' => 'Pasul 3 | Setări de mediu | Vrăjitor ghidat',
            'title' => 'Expert ghidat <code> .env </code>',
            'tabs' => [
                'environment' => 'Mediu inconjurator',
                'database' => 'Bază de date',
                'application' => 'Cerere',
            ],
            'form' => [
                'name_required' => 'Este necesar un nume de mediu.',
                'app_name_label' => 'Numele aplicatiei',
                'app_name_placeholder' => 'Numele aplicatiei',
                'app_environment_label' => 'Mediul aplicației',
                'app_environment_label_local' => 'Local',
                'app_environment_label_developement' => 'Dezvoltare',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Producție',
                'app_environment_label_other' => 'Alte',
                'app_environment_placeholder_other' => 'Intră în mediul tău ...',
                'app_debug_label' => 'Depanare aplicație',
                'app_debug_label_true' => 'Adevărat',
                'app_debug_label_false' => 'Fals',
                'app_log_level_label' => 'Nivel jurnal aplicație',
                'app_log_level_label_debug' => 'depanare',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'înștiințare',
                'app_log_level_label_warning' => 'avertizare',
                'app_log_level_label_error' => 'eroare',
                'app_log_level_label_critical' => 'critic',
                'app_log_level_label_alert' => 'alerta',
                'app_log_level_label_emergency' => 'de urgență',
                'app_url_label' => 'Adresa URL a aplicației',
                'app_url_placeholder' => 'Adresa URL a aplicației',
                'db_connection_failed' => 'Nu s-a putut conecta la baza de date.',
                'db_connection_label' => 'Conexiune la baza de date',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Gazdă a bazei de date',
                'db_host_placeholder' => 'Gazdă a bazei de date',
                'db_port_label' => 'Portul bazei de date',
                'db_port_placeholder' => 'Portul bazei de date',
                'db_name_label' => 'Numele bazei de date',
                'db_name_placeholder' => 'Numele bazei de date',
                'db_username_label' => 'Nume utilizator bază de date',
                'db_username_placeholder' => 'Nume utilizator bază de date',
                'db_password_label' => 'Parola bazei de date',
                'db_password_placeholder' => 'Parola bazei de date',
                'app_tabs' => [
                    'more_info' => 'Mai multe informatii',
                    'broadcasting_title' => '',
                    'broadcasting_label' => 'Driver de difuzare',
                    'broadcasting_placeholder' => 'Driver de difuzare',
                    'cache_label' => 'Driver cache',
                    'cache_placeholder' => 'Driver cache',
                    'session_label' => 'Șofer de sesiune',
                    'session_placeholder' => 'Șofer de sesiune',
                    'queue_label' => 'Driver de coadă',
                    'queue_placeholder' => 'Driver de coadă',
                    'redis_label' => 'Redis Driver',
                    'redis_host' => 'Redis Host',
                    'redis_password' => 'Redis parolă',
                    'redis_port' => 'Portul Redis',
                    'mail_label' => 'Poștă',
                    'mail_driver_label' => 'Driver de poștă electronică',
                    'mail_driver_placeholder' => 'Driver de poștă electronică',
                    'mail_host_label' => 'Gazdă de e-mail',
                    'mail_host_placeholder' => 'Gazdă de e-mail',
                    'mail_port_label' => 'Port poștal',
                    'mail_port_placeholder' => 'Port poștal',
                    'mail_username_label' => 'Trimiteți numele de utilizator',
                    'mail_username_placeholder' => 'Trimiteți numele de utilizator',
                    'mail_password_label' => 'Parola de e-mail',
                    'mail_password_placeholder' => 'Parola de e-mail',
                    'mail_encryption_label' => 'Criptare e-mail',
                    'mail_encryption_placeholder' => 'Criptare e-mail',
                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'Codul aplicației Pusher',
                    'pusher_app_id_palceholder' => 'Codul aplicației Pusher',
                    'pusher_app_key_label' => 'Tasta aplicației Pusher',
                    'pusher_app_key_palceholder' => 'Tasta aplicației Pusher',
                    'pusher_app_secret_label' => 'Secretul aplicației Pusher',
                    'pusher_app_secret_palceholder' => 'Secretul aplicației Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Configurați baza de date',
                    'setup_application' => 'Configurare aplicație',
                    'install' => 'Instalare',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Pasul 3 | Setări de mediu | Editor clasic',
            'title' => 'Editor de mediu clasic',
            'save' => 'Salvați .env',
            'back' => 'Utilizați Expertul formular',
            'install' => 'Salvați și instalați',
        ],
        'success' => 'Setările fișierului dvs. .env au fost salvate.',
        'errors' => 'Imposibil de salvat fișierul .env, vă rugăm să îl creați manual.',
    ],
    'install' => 'Instalare',
    'installed' => [
        'success_log_message' => 'Instalatorul Laravel a fost INSTALAT cu succes pe',
    ],
    'final' => [
        'title' => 'Instalare finalizată',
        'templateTitle' => 'Instalare finalizată',
        'finished' => 'Aplicația a fost instalată cu succes.',
        'migration' => '',
        'exit' => 'Faceți clic aici pentru a ieși',
        'console' => 'Ieșire din consola aplicației:',
        'log' => 'Intrare jurnal de instalare:',
        'env' => 'Fișierul .env final:',
    ],
    'updater' => [
        'title' => 'Laravel Updater',
        'welcome' => [
            'title' => 'Bine ați venit la Updater',
            'message' => 'Bine ați venit la expertul de actualizare.',
        ],
        'overview' => [
            'title' => 'Prezentare generală',
            'install_updates' => 'Instalați actualizări',
            'message' => 'Există o actualizare.|Există :number actualizări.',
        ],
        'final' => [
            'title' => 'Terminat',
            'finished' => 'Baza de date a aplicației a fost actualizată cu succes.',
            'exit' => 'Faceți clic aici pentru a ieși',
        ],
        'log' => [
            'success_message' => 'Instalatorul Laravel a fost ACTUALIZAT cu succes pe',
        ],
    ],
];