<?php
/**
 * User: meletisnikolaidis
 * Date: 08-Aug-18
 * Time: 2:30 AM
 */

$router = new AltoRouter();

$router->setBasePath('/ecommerce/public');

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');



