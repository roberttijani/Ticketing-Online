<?php

// return [
//     'serverKey' => env('MIDTRANS_SERVER_KEY'),
//     'isProduction' => env('MIDTRANS_IS_PRODUCTION'),
//     'isSanitized' => env('MIDTRANS_IS_SANITIZED'),
//     'is3ds' => env('MIDTRANS_IS_3DS')
// ];


return [
    'mercant_id' => env('MIDTRANS_MERCHAT_ID'),
    'client_key' => env('MIDTRANS_CLIENT_KEY'),
    'server_key' => env('MIDTRANS_SERVER_KEY'),

    'is_production' => false,
    'is_sanitized' => false,
    'is_3ds' => false,
];
