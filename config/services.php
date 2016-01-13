<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id'     =>'219567865044662',
        'client_secret' =>'f2f87949638040b50058e3e6cb83b3a5',
        'redirect'      =>'http://localhost:8000/callback',
    ],


    // 'google' => [
    //     'client_id'     => env('GOOGLE_ID'),
    //     'client_secret' => env('GOOGLE_SECRET'),
    //     'redirect'      => env('GOOGLE_REDIRECT')
    // ]

       'google' => [
       'client_id'     =>'488519174042-4epmmlaq0qvl5f9rt7ef97air3vpaguv.apps.googleusercontent.com',
       'client_secret' =>'AmUKbMyZobujf8KLHfIrtR9_',
       'redirect'      =>'http://localhost:8000/callback2',
    ],
];
