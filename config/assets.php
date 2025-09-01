<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Assets Configuration
    |--------------------------------------------------------------------------
    |
    | Settings for the Ludelix asset management system.
    | These settings control how assets are served, versioned,
    | and compiled.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Assets Base Directory
    |--------------------------------------------------------------------------
    |
    | Directory where assets are physically stored on the server.
    | This path is relative to the application root directory.
    |
    */
    'base_path' => env('ASSETS_BASE_PATH', 'public/assets'),

    /*
    |--------------------------------------------------------------------------
    | Assets Base URL
    |--------------------------------------------------------------------------
    |
    | Base URL to access assets via HTTP. This URL will be prefixed
    | to all asset paths when generating URLs.
    |
    */
    'base_url' => env('ASSETS_BASE_URL', '/assets'),

    /*
    |--------------------------------------------------------------------------
    | Asset Versioning
    |--------------------------------------------------------------------------
    |
    | Enable or disable automatic asset versioning. When enabled,
    | a version parameter will be added to asset URLs to prevent
    | browser caching issues when assets are updated.
    |
    */
    'versioning' => [
        'enabled' => env('ASSETS_VERSIONING', true),
        'strategy' => env('ASSETS_VERSIONING_STRATEGY', 'mtime'), // 'mtime', 'hash', or 'fixed'
        'param_name' => env('ASSETS_VERSIONING_PARAM', 'v'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Asset Compilation
    |--------------------------------------------------------------------------
    |
    | Settings for asset compilation. These settings control how
    | assets are processed and optimized for production.
    |
    */
    'compilation' => [
        'enabled' => env('ASSETS_COMPILATION', false),
        'source_path' => env('ASSETS_COMPILATION_SOURCE', 'frontend'),
        'output_path' => env('ASSETS_COMPILATION_OUTPUT', 'public/assets/build'),
        'manifest_file' => env('ASSETS_MANIFEST_FILE', 'public/assets/build/manifest.json'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Asset Caching
    |--------------------------------------------------------------------------
    |
    | Settings for asset caching. These settings control how
    | assets are cached for improved performance.
    |
    */
    'cache' => [
        'enabled' => env('ASSETS_CACHE', true),
        'ttl' => env('ASSETS_CACHE_TTL', 3600), // Time in seconds
        'driver' => env('ASSETS_CACHE_DRIVER', 'file'), // 'file', 'memory', etc.
    ],

    /*
    |--------------------------------------------------------------------------
    | Asset Compression
    |--------------------------------------------------------------------------
    |
    | Settings for asset compression. These settings control how
    | assets are compressed to reduce file size.
    |
    */
    'compression' => [
        'enabled' => env('ASSETS_COMPRESSION', true),
        'level' => env('ASSETS_COMPRESSION_LEVEL', 6), // 0-9, where 9 is maximum compression
    ],

    /*
    |--------------------------------------------------------------------------
    | Asset Types
    |--------------------------------------------------------------------------
    |
    | Configuration for different asset types. Each asset type can have
    | specific settings for processing and optimization.
    |
    */
    'types' => [
        'css' => [
            'enabled' => true,
            'extensions' => ['css'],
            'minify' => env('ASSETS_CSS_MINIFY', true),
        ],
        'js' => [
            'enabled' => true,
            'extensions' => ['js'],
            'minify' => env('ASSETS_JS_MINIFY', true),
        ],
        'images' => [
            'enabled' => true,
            'extensions' => ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'],
            'optimize' => env('ASSETS_IMAGES_OPTIMIZE', true),
        ],
        'fonts' => [
            'enabled' => true,
            'extensions' => ['woff', 'woff2', 'ttf', 'eot'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Asset Security
    |--------------------------------------------------------------------------
    |
    | Security settings for assets. These settings control access
    | and protection of assets.
    |
    */
    'security' => [
        'content_security_policy' => env('ASSETS_CSP', "default-src 'self'"),
        'x_content_type_options' => env('ASSETS_X_CONTENT_TYPE_OPTIONS', 'nosniff'),
    ],
];