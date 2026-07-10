<?php

namespace App\Controller;

use App\Config\Controller;
use App\Config\Database;
use Exception;

class HomeController extends Controller
{
    public $posts;       
public function index()
{
    try {
        $posts = Database::Select('posts');
        $this->render('Front/index', ['posts' => $posts]);            
    } catch (Exception $e) {
        error_log($e->getMessage());
        die('در نمایش پست مشکلی پیش آمده است.');
    }
}

}
