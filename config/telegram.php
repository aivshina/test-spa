<?php

return [
    'bots' => [
        'mybot' => [
            'username' => 'testspabot',
            'token' => env('TELEGRAM_BOT_TOKEN', ''),
            'certificate_path' => env('TELEGRAM_CERTIFICATE_PATH', ''),
            'webhook_url' => env('TELEGRAM_WEBHOOK_URL', ''),
            'commands' => [
            ],
        ],
    ],
];
