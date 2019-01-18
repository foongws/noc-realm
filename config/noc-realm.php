<?php

return [
 
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
                'route'      => 'voyager.profile',
                'classes'    => 'class-full-of-rum',
                'icon_class' => 'voyager-person',
            ],
            'Home' => [
                'route'        => '/',
                'icon_class'   => 'voyager-home',
                'target_blank' => true,
            ],
            'Logout' => [
                'route'      => 'voyager.logout',
                'icon_class' => 'voyager-power',
            ],
        ],

        'widgets' => [
            'App\\NocRealm\\Widgets\\ProfileDimmer',
            //'TCG\\Voyager\\Widgets\\PostDimmer',
            //'TCG\\Voyager\\Widgets\\PageDimmer',
        ],

    ],
 
];
