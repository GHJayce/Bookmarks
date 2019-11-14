<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resource('bookmarks', BookmarksController::class);
    $router->resource('classes', ClassesController::class);
    $router->resource('class-assocs', ClassAssocsController::class);

});
