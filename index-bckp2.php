<?php
define('ROOT_PATH',__DIR__);
require __DIR__.'/vendor/autoload.php';
require_once(__DIR__.'/helper/functions.php');
// require_once(__DIR__.'/app/Route.php');
 
use App\Route;
use App\Controller\FrontController;

$route = new Route();
$route->addRoute("GET","/webprogramming3/",[FrontController::class, 'home']);
$route->addRoute("GET",'/webprogramming3/about',[FrontController::class, 'about']);
$route->addRoute("GET",'/webprogramming3/infs',[FrontController::class, 'infs']);
$route->dispatch();
// var_dump($route);
// exit();
// $method = $_SERVER['REQUEST_METHOD'];
// $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
// // echo($method);
// // echo('<br>');
// // print_r($uri);
// if($uri == "/webprogramming3/")
// {
//     view('home.php');

// }else if($uri=='/webprogramming3/infs')
// {
//     view('infs.php');

// }else if($uri=='/webprogramming3/about')
// {
//     view('about.php');

// }
// else{
//     view('404.php');
    
// }