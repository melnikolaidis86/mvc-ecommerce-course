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

