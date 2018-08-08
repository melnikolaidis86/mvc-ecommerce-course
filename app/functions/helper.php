<?php
/**
 * Created by PhpStorm.
 * User: meletisnikolaidis
 * Date: 04-Jul-18
 * Time: 11:21 PM
 */

use Philo\Blade\Blade;

function view($path, array $data = [])
{
    $view = __DIR__ . '/../../resources/views';
    $cache = __DIR__ . '/../../bootstrap/cache';
    $blade = new Blade($view, $cache);

    echo $blade->view()->make($path, $data)->render();
}