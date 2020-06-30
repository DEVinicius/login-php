<?php 

include __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);
$router->namespace("Source\App");

/* Rotas de cadastro e login (GET E POST) */
$router->group(null);

$router->get("/", "WebController:index");
$router->get("/signUp", "WebController:signUp");
$router->get("/", "WebController:login");
$router->post("/sign_up", "WebContoller:create");

// Rotas de erro
$router->group("ooops");
$router->get("/{errcode}", "WebController:error");


$router->dispatch();

if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}