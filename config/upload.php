<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Upload Optimization Settings
    |--------------------------------------------------------------------------
    */
    
    'optimize_images' => env('UPLOAD_OPTIMIZE_IMAGES', false),
    'optimize_videos' => env('UPLOAD_OPTIMIZE_VIDEOS', false),
    
    /*
    |--------------------------------------------------------------------------
    | Image Optimization
    |--------------------------------------------------------------------------
    */
    
    'image' => [
        'quality' => env('UPLOAD_IMAGE_QUALITY', 85),
        'max_width' => env('UPLOAD_MAX_WIDTH', 1920),
        'max_height' => env('UPLOAD_MAX_HEIGHT', 1080),
        'formats' => ['webp', 'jpeg', 'png'],
        'auto_webp' => true,
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Video Optimization
    |--------------------------------------------------------------------------
    */
    
    'video' => [
        'quality' => env('UPLOAD_VIDEO_QUALITY', 'medium'), // low, medium, high
        'max_resolution' => '1080p',
        'formats' => ['mp4', 'webm'],
        'generate_thumbnails' => true,
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Storage Configuration
    |--------------------------------------------------------------------------
    */
    
    'disk' => env('UPLOAD_DISK', 'local'),
    'path' => env('UPLOAD_PATH', 'cubby/up'),
    'url' => env('UPLOAD_URL', '/up'),
    
];