<?php
/**
 * Created by PhpStorm.
 * User: meletisnikolaidis
 * Date: 04-Jul-18
 * Time: 11:30 PM
 */

define('BASE_PATH',realpath(__DIR__ . '/../../'));
require_once __DIR__ . '/../../vendor/autoload.php';


$dotEnv = new \Dotenv\Dotenv(BASE_PATH);
$dotEnv->load();