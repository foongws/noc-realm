<?php

return [
 

        /*
    |--------------------------------------------------------------------------
    | Path to the Voyager Assets
    |--------------------------------------------------------------------------
    |
    | Here you can specify the location of the voyager assets path
    |
    */

    'assets_path' => '/vendor/nocrealm/assets',

    /*
    |--------------------------------------------------------------------------
    | Dashboard config
    |--------------------------------------------------------------------------
    |
    | Here you can modify some aspects of your dashboard
    |
    */

    'dashboard' => [
        // Add custom list items to navbar's dropdown
        'navbar_items' => [
            'Profile' => [
                'route'      => '/profile',
                'classes'    => 'class-full-of-rum',
                'icon_class' => 'voyager-person',
            ],
            'Home' => [
                'route'        => '/',
                'icon_class'   => 'voyager-home',
                'target_blank' => false,
            ],
            'Logout' => [
                'route'      => 'voyager.logout',
                'icon_class' => 'voyager-power',
            ],
        ],

        'widgets' => [
            'App\\NocRealm\\Widgets\\ProfileDimmer',
            'App\\NocRealm\\Widgets\\ProfileDimmer',
            'App\\NocRealm\\Widgets\\ProfileDimmer',
        ],

    ],
 
];
