<?php

/**
 * |--------------------------------------------------------------------------
 * | Set up your blog configuration
 * |--------------------------------------------------------------------------
 * |
 * | The route configuration is for setting up the route prefix and middleware.
 * | The user configuration is for setting up the user model and columns.
 * | The seo configuration is for setting up the default meta tags for the blog.
 * | The recaptcha configuration is for setting up the recaptcha for the blog.
 */

use Firefly\FilamentBlog\Models\User;

return [
    'tables' => [
        'prefix' => 'fblog_', // prefix for all blog tables
    ],
    'route' => [
        'prefix' => 'home',
        'middleware' => ['web'],
        //        'home' => [
        //            'name' => 'filamentblog.home',
        //            'url' => env('APP_URL'),
        //        ],
        'login' => [
            'name' => 'filamentblog.post.login',
        ],
    ],
    'user' => [
        'model' => User::class,
        'foreign_key' => 'user_id',
        'columns' => [
            'name' => 'name',
            'avatar' => 'avatar_url', // column name for avatar
        ],
    ],
    'seo' => [
        'meta' => [
            'title' => 'TaniMaju',
            'description' => 'Website Management Hasil Pangan',
            'keywords' => ["Website Management Hasil Pangan", "Pertanian","Agrikultur","Desa Sukamaju","Desa Jawa Barat"],
        ],
    ],

    'recaptcha' => [
        'enabled' => false, // true or false
        'site_key' => env('RECAPTCHA_SITE_KEY'),
        'secret_key' => env('RECAPTCHA_SECRET_KEY'),
    ],
];
