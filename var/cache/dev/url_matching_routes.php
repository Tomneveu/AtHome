<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminUsersController::index'], null, null, null, false, false, null]],
        '/admin/users/create' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\AdminUsersController::createUser'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/service1' => [[['_route' => 'service1', '_controller' => 'App\\Controller\\HomeController::service1'], null, null, null, false, false, null]],
        '/service2' => [[['_route' => 'service2', '_controller' => 'App\\Controller\\HomeController::service2'], null, null, null, false, false, null]],
        '/service3' => [[['_route' => 'service3', '_controller' => 'App\\Controller\\HomeController::service3'], null, null, null, false, false, null]],
        '/prestations/new' => [[['_route' => 'prestations_new', '_controller' => 'App\\Controller\\PrestationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/users/(?'
                    .'|update\\-([^/]++)(*:201)'
                    .'|delete\\-([^/]++)(*:225)'
                .')'
                .'|/search/([^/]++)(*:250)'
                .'|/prestations/([^/]++)(?'
                    .'|(*:282)'
                    .'|/edit(*:295)'
                    .'|(*:303)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\AdminUsersController::updateUser'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\AdminUsersController::deleteUser'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'search_show', '_controller' => 'App\\Controller\\HomeController::prestaShow'], ['id'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'prestations_show', '_controller' => 'App\\Controller\\PrestationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        295 => [[['_route' => 'prestations_edit', '_controller' => 'App\\Controller\\PrestationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        303 => [
            [['_route' => 'prestations_delete', '_controller' => 'App\\Controller\\PrestationsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
