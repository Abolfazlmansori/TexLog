<?php
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
Router::get('/Register',[RegisterController::class,'index']);
Router::post('/Register/store',[RegisterController::class,'store']);

// PostRouter
Router::get('/post/create', [PostController::class, 'index']);
Router::post('/post/store',[PostController::class,'store']);
Router::get('/post/{id}', [PostController::class, 'show']);



Router::dispatch($_SERVER['REQUEST_URI']);
