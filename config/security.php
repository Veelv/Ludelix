<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CSRF Settings
    |--------------------------------------------------------------------------
    |
    | Enables CSRF protection and defines URIs that should be
    | exempt from verification.
    |
    */

    'csrf' => [
        'enabled' => true,

        // Add here the URIs that should not pass CSRF verification.
        // E.g: 'api/webhook', 'stripe/*'
        'except' => [
            //
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Security Headers
    |--------------------------------------------------------------------------
    |
    | Defines the security headers that will be added to all
    | application responses.
    |
    */
    'headers' => [
        'x_content_type_options' => 'nosniff',
        'x_frame_options' => 'SAMEORIGIN',
        'x_xss_protection' => '1; mode=block',
        // 'content_security_policy' => "default-src 'self'",
    ],

];