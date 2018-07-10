<?php

require 'vendor/autoload.php';

$query = require 'core/bootstrap.php';

$router = new Router;

        
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

require 'views/routes.php';

require $router->direct($uri);