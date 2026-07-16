<?php


session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => true,   
    'httponly' => true,  
    'samesite' => 'Strict'
]);
session_start();
$timeout_duration = 3600; 
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    session_unset();
    session_destroy();
    header("Location: TexLog/Login");
    exit;
}
$_SESSION['last_activity'] = time(); 

require_once __DIR__ . '/vendor/autoload.php';

use App\Config\Router;
use App\Controller\HomeController;
use App\Controller\Post\PostController;
use App\Config\Database;
use App\Controller\Auth\LoginController;
use App\Controller\Auth\RegisterController;

Database::connect();

// HomeRouter 
Router::get('/', [HomeController::class, 'index']);

//AuthRouter
Router::get('/Login',[LoginController::class,'index']);
Router::post("/Login/store",[LoginController::class,'store']);
Router::get('/Register',[RegisterController::class,'index']);
Router::post('/Register/store',[RegisterController::class,'store']);
Router::post('/Logout',[LoginController::class,'logout']);

// PostRouter
Router::get('/posts/{order}',[HomeController::class,'selectBy']);
Router::get('/posts/{order}',[HomeController::class,'selectBy']);
Router::get('/post/create', [PostController::class, 'index']);
Router::post('/post/store',[PostController::class,'store']);
Router::get('/post/{id}', [PostController::class, 'show']);
Router::get('/post/edit/{id}',[PostController::class,'edit']);
Router::post('/post/update/{id}',[PostController::class,'update']);



Router::dispatch($_SERVER['REQUEST_URI']);
