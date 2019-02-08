<?php

if (env('APP_ENV') === 'production'){
    return [
        'supportsCredentials' => false,
        'allowedOrigins' => ['https://hiroki-practice.com'],
        'allowedHeaders' => ['*'],
        'allowedMethods' => ['*'],
        'exposedHeaders' => [],
        'maxAge' => 0,
    ];}

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
   
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['*'],
    'allowedMethods' => ['*'],
    'exposedHeaders' => [],
    'maxAge' => 0,

];
