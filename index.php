<?php

require_once 'vendor/autoload.php';
require_once 'src/Config/configuration.php';


if(isset($_GET['controller'])) {
    $controllerName = $_GET['controller'];
} else {
    $controllerName = 'students';
}
$controllerName = ucfirst($controllerName) . 'Controller';
$controllerName = 'Controllers\\' . $controllerName;

$connector = new Repositories\Connector(
    $configuration['database'],
    $configuration['user'],
    $configuration['password']
);

$controller = new $controllerName($connector);

if(isset($_GET['action'])) {
    $actionName = $_GET['action'];
} else {
    $actionName = 'index';
}
$actionName = $actionName . 'Action';

$response = $controller->$actionName();

echo $response;
