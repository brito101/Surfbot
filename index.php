<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */
use CoffeeCode\Router\Router;
use Source\Core\Session;

$session = new Session();
$route = new Router(url(), ":");
$route->namespace("Source\App");

/**
 * WEB ROUTES
 */
$route->group(null);
$route->get("/", "Web:home");

//optin
$route->group(null);
$route->get("/contato", "Web:optin");
$route->get("/obrigado", "Web:confirm");
$route->post("/contato", "Web:contact");

//matriculas
$route->group(null);
$route->get("/matricula", "Web:register");
$route->post("/matricula", "Web:register");
$route->post("/matricula/{plan}", "Web:register");
$route->get("/matricula/{plan}", "Web:register");

$route->get("/obrigado", "Web:success");

/**
 * ERROR ROUTES
 */
$route->group("/ops");
$route->get("/{errcode}", "Web:error");

/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
