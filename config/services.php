<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1260412474029087',
        'client_secret' => '56edd46a37427cd2596847e44e2ac712',
        'redirect' => env('SOCIALITE_FACEBOOK_REDIRECT'),
    ],

    'google' => [
        'client_id' => '1062991789206-oe5moitreec8aoeoa5pse5gffthogc5l.apps.googleusercontent.com',
        'client_secret' => 'X7cdPvOeIrogZP6TqTwkd-4u',
        'redirect' => env('SOCIALITE_GOOGLE_REDIRECT'),
    ],

];
