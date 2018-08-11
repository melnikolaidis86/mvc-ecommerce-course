<?php
/**
 * User: meletisnikolaidis
 * Date: 05-Jul-18
 * Time: 12:04 AM
 */

require_once __DIR__ . '/../bootstrap/init.php';

$app_name = getenv('APP_NAME');

use Illuminate\Database\Capsule\Manager as Capsule;

$user = Capsule::table('categories')->get();

var_dump($user->toArray());