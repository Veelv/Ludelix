<?php

return [
    // Application Configuration
    'name' => env('APP_NAME', 'Ludelix App'),
    'env' => env('APP_ENV', 'development'),
    'debug' => (bool) env('APP_DEBUG', true),
    'url' => env('APP_URL', 'http://localhost:8000'),
    'timezone' => env('APP_TIMEZONE', 'UTC'),
    'locale' => env('APP_LOCALE', 'en'),
    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),
    'key' => env('APP_KEY', ''),
    'cipher' => 'AES-256-CBC',
    
    // Security Configuration
    'security' => [
        'csrf' => [
            'enabled' => true,
            'token_name' => '_token',
            'expire_time' => 3600,
        ],
        'encryption' => [
            'key' => env('APP_KEY'),
            'cipher' => 'AES-256-CBC',
        ],
    ],
    
    // Asset Configuration
    'assets' => [
        // Remove Vite driver and configurations
    ],
    
    // WebSocket Configuration
    'websocket' => [
        'enabled' => true,
        'host' => env('WEBSOCKET_HOST', '0.0.0.0'),
        'port' => env('WEBSOCKET_PORT', 6001),
        'ssl' => [
            'enabled' => false,
            'cert' => null,
            'key' => null,
        ],
    ],
    
    // Multi-tenancy Configuration
    'tenant' => [
        'enabled' => true,
        'identification' => [
            'domain' => true,
            'subdomain' => true,
            'header' => 'X-Tenant',
        ],
        'database' => [
            'separate_databases' => false,
            'prefix_tables' => true,
        ],
    ],

    'log' => [
        'enabled' => true,
        'path' => 'cubby/logs',
        'level' =>  'debug'
    ]
];