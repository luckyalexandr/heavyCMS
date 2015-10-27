<?php
/* TODO: frontendLanguages is duplication of frontend/config/params.php => supportedLanguages
   It must be deduplicated at some point
*/
return [
    'adminEmail' => 'admin@example.com',
    'supportedLanguages' => ['en-US' => 'English',
                             'es-ES' => 'Español'],
    'appDefaultLanguage' => 'en-US',
    'frontendLanguages' => ['en-US' => 'English',
                            'es-ES' => 'Español'],
];
