<?php

/** Start session if not already started **/
if(!isset($_SESSION)) session_start();

//Load environment variables
require_once __DIR__ . '/../app/config/_env.php';

//Instatiate database class
new App\Classes\Database();

//Set custom error handler
set_error_handler([new \App\Classes\ErrorHandler(), 'handleErrors']);

//Load routes
require_once __DIR__ . '/../app/routing/routes.php';

//Instance of RoutDispatcher
new \App\RouteDispatcher($router);