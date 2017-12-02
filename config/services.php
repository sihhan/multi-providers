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

    // OAuth-facebook
    'facebook' => [
        'client_id' => '146627585975608',
        'client_secret' => 'd57f44fb589febd76e3e3551c004346a',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    // OAuth-twitter
    'twitter' => [
        'client_id' => '3FvoqgvltQlMid7o0F7w7HngD',
        'client_secret' => 'xHxOScpXLZzSeLYdaelfWcoNzIwDnfxgW95fjflJaLj7xZoCAf',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

    // OAuth-google
    'google' => [
        'client_id' => '655358617148-lqhntnb4fjercabcps13msifr2g8dc9s.apps.googleusercontent.com',
        'client_secret' => 'rxeVFc6qXQ0aDqd2QLOgD5WM',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
];
