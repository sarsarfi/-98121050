<?php
session_start();
define('ROOT_PATH',__DIR__);
require __DIR__.'/vendor/autoload.php';
require_once(__DIR__.'/helper/functions.php');
// require_once(__DIR__.'/app/Route.php');

use Illuminate\Database\Capsule\Manager as Capsule;
$config = require __DIR__.'/config/database.php';
$capsule = new Capsule;
$capsule->addConnection($config);
// Make this Capsule instance available globally via static methods
$capsule->setAsGlobal();
// Setup the Eloquent ORM
$capsule->bootEloquent();

// $users = Capsule::table('users')->where('id', '>', 4)->get();
// var_dump($users);
// exit();

use App\Route;
use App\Controller\FrontController;
use App\Controller\AuthController;
use App\Controller\DashboardController;
use App\Controller\PostController;

$route = new Route();
$route->addRoute("GET","/webprogramming3/",[FrontController::class, 'home']);
$route->addRoute("GET",'/webprogramming3/about',[FrontController::class, 'about']);
$route->addRoute("GET",'/webprogramming3/infs',[FrontController::class, 'infs']);
$route->addRoute("GET",'/webprogramming3/login',[AuthController::class, 'login']);
$route->addRoute("POST",'/webprogramming3/login',[AuthController::class, 'loginuser']);
$route->addRoute("GET",'/webprogramming3/register',[AuthController::class, 'register']);
$route->addRoute("GET",'/webprogramming3/dashboard',[DashboardController::class, 'index']);
$route->addRoute("POST",'/webprogramming3/register',[AuthController::class, 'storeuser']);

// Routes of CRUD for Post Model
$route->addRoute("GET",'/webprogramming3/post',[PostController::class, 'index']);
$route->addRoute("GET",'/webprogramming3/post/show',[PostController::class, 'show']);
$route->addRoute("GET",'/webprogramming3/post/edit',[PostController::class, 'edit']);
$route->addRoute("POST",'/webprogramming3/post/update',[PostController::class, 'update']);
$route->addRoute("GET",'/webprogramming3/post/create',[PostController::class, 'create']);
$route->addRoute("POST",'/webprogramming3/post/create',[PostController::class, 'store']);
//test the relation of database
$route->addRoute("GET",'/webprogramming3/test',function(){
    // $id = $_GET['id'];
    // $user = \App\Model\User::find($id);
    // $posts = $user->posts;
    // var_dump($posts);
    // exit();

    $id = $_GET['id'];
    $post = \App\Model\Post::find($id);
    $user = $post->user;
    var_dump($user);
});

//
$route->dispatch();
