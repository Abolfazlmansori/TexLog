<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Config\Router;
use App\Controller\HomeController;
use App\Controller\Post\PostController;
use App\Config\Database;

Database::connect();


Router::get('/', [HomeController::class, 'index']);
Router::get('/post/create', [PostController::class, 'index']);
Router::get('/post/{id}', [PostController::class, 'show']);
Router::post('/post/store',[PostController::class,'store']);

Router::dispatch($_SERVER['REQUEST_URI']);
