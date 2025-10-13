<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/add/book' => [[['_route' => 'app_add_book_index', '_controller' => 'App\\Controller\\AddBookController::index'], null, ['GET' => 0], null, false, false, null]],
        '/add/book/new' => [[['_route' => 'app_add_book_new', '_controller' => 'App\\Controller\\AddBookController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/books' => [[['_route' => 'app_books', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/non/paid/user' => [[['_route' => 'app_non_paid_user_index', '_controller' => 'App\\Controller\\NonPaidUserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/non/paid/user/new' => [[['_route' => 'app_non_paid_user_new', '_controller' => 'App\\Controller\\NonPaidUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/search' => [[['_route' => 'app_user_search', '_controller' => 'App\\Controller\\UserController::search'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserShower::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserShower::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/add/book/([^/]++)(?'
                    .'|(*:63)'
                    .'|/edit(*:75)'
                    .'|(*:82)'
                .')'
                .'|/borrow/([^/]++)(*:106)'
                .'|/non/paid/user/([^/]++)(?'
                    .'|(*:140)'
                    .'|/edit(*:153)'
                    .'|(*:161)'
                .')'
                .'|/return/([^/]++)(*:186)'
                .'|/user/([^/]++)(?'
                    .'|/(?'
                        .'|borrowed(*:223)'
                        .'|edit(*:235)'
                    .')'
                    .'|(*:244)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        63 => [[['_route' => 'app_add_book_show', '_controller' => 'App\\Controller\\AddBookController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        75 => [[['_route' => 'app_add_book_edit', '_controller' => 'App\\Controller\\AddBookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        82 => [[['_route' => 'app_add_book_delete', '_controller' => 'App\\Controller\\AddBookController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        106 => [[['_route' => 'app_borrow', '_controller' => 'App\\Controller\\BorrowController::borrow'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        140 => [[['_route' => 'app_non_paid_user_show', '_controller' => 'App\\Controller\\NonPaidUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        153 => [[['_route' => 'app_non_paid_user_edit', '_controller' => 'App\\Controller\\NonPaidUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        161 => [[['_route' => 'app_non_paid_user_delete', '_controller' => 'App\\Controller\\NonPaidUserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        186 => [[['_route' => 'app_return', '_controller' => 'App\\Controller\\ReturnController::return'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        223 => [[['_route' => 'app_user_borrowed', '_controller' => 'App\\Controller\\UserController::borrowed'], ['id'], ['GET' => 0], null, false, false, null]],
        235 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserShower::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [
            [['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserShower::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserShower::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
