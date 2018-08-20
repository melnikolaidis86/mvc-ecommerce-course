<?php
/**
 * User: meletisnikolaidis
 * Date: 08-Aug-18
 * Time: 2:30 AM
 */

$router = new AltoRouter();

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');

//For admin routes
$router->map('GET', '/admin', 'App\Controllers\Admin\DashboardController@show', 'admin_dashboard');
$router->map('POST', '/admin', 'App\Controllers\Admin\DashboardController@get', 'admin_form');

//Product management
$router->map('GET', '/admin/product/categories',
    'App\Controllers\Admin\ProductCategoryController@show', 'product_category');
$router->map('POST', '/admin/product/categories',
    'App\Controllers\Admin\ProductCategoryController@store', 'create_product_category');

