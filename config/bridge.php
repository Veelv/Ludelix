<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Bridge Configuration
    |--------------------------------------------------------------------------
    |
    | Settings for the Ludelix Framework Bridge system.
    | Bridge provides contextual and optimized access to services.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Debug Mode
    |--------------------------------------------------------------------------
    |
    | Enables debug mode for Bridge with detailed logs.
    |
    */
    'debug' => env('BRIDGE_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Performance Monitoring
    |--------------------------------------------------------------------------
    |
    | Enables performance monitoring for service resolution.
    |
    */
    'performance_monitoring' => env('BRIDGE_PERFORMANCE', true),

    /*
    |--------------------------------------------------------------------------
    | Max Resolution Depth
    |--------------------------------------------------------------------------
    |
    | Maximum depth for resolving circular dependencies.
    |
    */
    'max_resolution_depth' => env('BRIDGE_MAX_DEPTH', 50),

    /*
    |--------------------------------------------------------------------------
    | Tenant Configuration
    |--------------------------------------------------------------------------
    |
    | Settings for multi-tenant isolation.
    |
    */
    'tenant' => [
        'enabled' => env('BRIDGE_TENANT_ENABLED', true),
        'isolation' => env('BRIDGE_TENANT_ISOLATION', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Resolver Configuration
    |--------------------------------------------------------------------------
    |
    | Settings for the service resolver.
    |
    */
    'resolver' => [
        'cache_enabled' => env('BRIDGE_RESOLVER_CACHE', true),
        'cache_ttl' => env('BRIDGE_RESOLVER_CACHE_TTL', 3600),
    ],

    /*
    |--------------------------------------------------------------------------
    | Contextual Configuration
    |--------------------------------------------------------------------------
    |
    | Settings for contextual resolution.
    |
    */
    'contextual' => [
        'enabled' => env('BRIDGE_CONTEXTUAL', true),
        'auto_context' => env('BRIDGE_AUTO_CONTEXT', true),
    ],
];