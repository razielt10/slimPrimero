<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../app/templates/',
            'template_cache' => __DIR__ . '/../cache/',
        ],

        // twig settings
        'render' => [
            'template_path' => __DIR__ . '/../app/templates/',
            'template_cache' => __DIR__ . '/../cache/',
            'base_url' => __DIR__.'/../app/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
