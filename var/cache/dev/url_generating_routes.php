<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'admin_users' => [[], ['_controller' => 'App\\Controller\\AdminUsersController::index'], [], [['text', '/admin/users']], [], []],
    'user_create' => [[], ['_controller' => 'App\\Controller\\AdminUsersController::createUser'], [], [['text', '/admin/users/create']], [], []],
    'user_update' => [['id'], ['_controller' => 'App\\Controller\\AdminUsersController::updateUser'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/admin/users/update']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminUsersController::deleteUser'], [], [['variable', '-', '[^/]++', 'id', true], ['text', '/admin/users/delete']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'service1' => [[], ['_controller' => 'App\\Controller\\HomeController::service1'], [], [['text', '/service1']], [], []],
    'service2' => [[], ['_controller' => 'App\\Controller\\HomeController::service2'], [], [['text', '/service2']], [], []],
    'service3' => [[], ['_controller' => 'App\\Controller\\HomeController::service3'], [], [['text', '/service3']], [], []],
    'search_show' => [['id'], ['_controller' => 'App\\Controller\\HomeController::prestaShow'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/search']], [], []],
    'prestations_new' => [[], ['_controller' => 'App\\Controller\\PrestationsController::new'], [], [['text', '/prestations/new']], [], []],
    'prestations_show' => [['id'], ['_controller' => 'App\\Controller\\PrestationsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/prestations']], [], []],
    'prestations_edit' => [['id'], ['_controller' => 'App\\Controller\\PrestationsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/prestations']], [], []],
    'prestations_delete' => [['id'], ['_controller' => 'App\\Controller\\PrestationsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/prestations']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profile']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];