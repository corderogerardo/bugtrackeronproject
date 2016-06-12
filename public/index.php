<?php
/**
 * Created by PhpStorm.
 * User: gerardo
 * Date: 11/06/16
 * Time: 08:13 PM
 */
session_start();
require '../vendor/autoload.php';
$config = require '../app/config/config.php';

$app = new \Slim\App($config);

require '../app/routes/routes.php';

$app->run();