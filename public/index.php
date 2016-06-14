<?php
/**
 * Created by PhpStorm.
 * User: gerardo
 * Date: 11/06/16
 * Time: 08:13 PM
 */

if(PHP_SAPI == 'cli-server'){
    $file = __DIR__ . $_SERVER['REQUEST_URI'];
    IF(is_file($file)){
        return false;
    }
}
require __DIR__ . '/../vendor/autoload.php';
session_start();
$config = require __DIR__ . '/../app/config/config.php';

$app = new \Slim\App($config);

require __DIR__ . '/../app/routes/routes.php';

$app->run();