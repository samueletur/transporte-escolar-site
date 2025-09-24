<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Google Analytics Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Google Analytics settings. You can set
    | your Google Analytics Measurement ID and enable/disable tracking.
    |
    */

    'google' => [
        'measurement_id' => env('GOOGLE_ANALYTICS_ID', ''),
        'enabled' => env('GOOGLE_ANALYTICS_ENABLED', false),
    ],
];
