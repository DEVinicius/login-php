<?php 

include __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);
$router->namespace("Source\App");

$router->group(null);

$router->get("/", "WebController:index");
$router->get("/signUp", "WebController:signUp");

$router->group("ooops");
$router->get("/{errcode}", "WebController:error");


$router->dispatch();

if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}