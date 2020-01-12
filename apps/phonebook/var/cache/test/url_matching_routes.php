<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/phone' => [[['_route' => 'phone_index', '_controller' => 'App\\Controller\\PhoneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/phone/new' => [[['_route' => 'phone_new', '_controller' => 'App\\Controller\\PhoneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/share' => [[['_route' => 'share', '_controller' => 'App\\Controller\\ShareController::share'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'homepage', 'template' => 'phonebook.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/phone/([^/]++)(?'
                    .'|(*:25)'
                    .'|/edit(*:37)'
                    .'|(*:44)'
                .')'
                .'|/share_delete/([^/]++)(*:74)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'phone_show', '_controller' => 'App\\Controller\\PhoneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        37 => [[['_route' => 'phone_edit', '_controller' => 'App\\Controller\\PhoneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        44 => [[['_route' => 'phone_delete', '_controller' => 'App\\Controller\\PhoneController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        74 => [
            [['_route' => 'share_delete', '_controller' => 'App\\Controller\\ShareController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
