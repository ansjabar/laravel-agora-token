<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Token Configurations
    |--------------------------------------------------------------------------
    |
    | Here you will specify Agora App ID, App Certificate and Expiration time (in seconds)
    |
    */
    'app_id' => env('AGORA_APP_ID'),
    'app_certificate' => env('AGORA_CERTIFICATE'),
    'token_expire_time' => env('AGORA_TOKEN_EXPIRE_TIME', 3600),
];
