<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Ludou Template Engine Configuration
    |--------------------------------------------------------------------------
    |
    | Settings for the Ludou template engine.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Template Paths
    |--------------------------------------------------------------------------
    |
    | Paths where templates are searched.
    | The system will search in all these directories in the specified order.
    |
    */
    'paths' => [
        'frontend/templates',
        'templates',
        'views',
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Configuration
    |--------------------------------------------------------------------------
    |
    | Settings for template caching.
    |
    */
    'cache' => [
        'enabled' => env('LUDEOU_CACHE_ENABLED', true),
        'path' => env('LUDEOU_CACHE_PATH', 'cubby/cache/ludou'),
        'ttl' => env('LUDEOU_CACHE_TTL', 3600),
    ],

    /*
    |--------------------------------------------------------------------------
    | Template Extensions
    |--------------------------------------------------------------------------
    |
    | File extensions that are considered templates.
    |
    */
    'extensions' => [
        'blade.php',
        'php',
        'tpl',
        'html',
    ],

    /*
    |--------------------------------------------------------------------------
    | Template Compilation
    |--------------------------------------------------------------------------
    |
    | Settings for template compilation.
    |
    */
    'compilation' => [
        'enabled' => env('LUDEOU_COMPILATION_ENABLED', true),
        'path' => env('LUDEOU_COMPILATION_PATH', 'cubby/cache/ludou/compiled'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Debug Mode
    |--------------------------------------------------------------------------
    |
    | Enable debug mode for detailed error messages.
    |
    */
    'debug' => env('LUDEOU_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Auto Escape
    |--------------------------------------------------------------------------
    |
    | Enable automatic output escaping for security.
    |
    */
    'auto_escape' => env('LUDEOU_AUTO_ESCAPE', true),

    /*
    |--------------------------------------------------------------------------
    | Template Functions
    |--------------------------------------------------------------------------
    |
    | Custom functions available in templates.
    |
    */
    'functions' => [
        // Add custom functions here
    ],

    /*
    |--------------------------------------------------------------------------
    | Template Filters
    |--------------------------------------------------------------------------
    |
    | Custom filters available in templates.
    |
    */
    'filters' => [
        // Add custom filters here
    ],
];