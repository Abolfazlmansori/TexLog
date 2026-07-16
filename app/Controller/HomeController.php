<?php

namespace App\Controller;

use App\Config\Controller;
use App\Config\Database;
use Exception;

class HomeController extends Controller
{
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
    public function selectBy(string $order)
    {
        if ($order === "newest") {
            $column = "created_at";
            $direction = "DESC";
        } elseif ($order === "oldest") {
            $column = "created_at";
            $direction = "ASC";
        } else {
            $column = "id";
            $direction = "DESC";
        }
        try {
            $posts = Database::SelectOrder('posts', $column, $direction);
            $this->render('Front/index', ['posts' => $posts]);
        } catch (Exception $e) {
            error_log($e->getMessage());
            die('در نمایش پست مشکلی پیش آمده است.');
        }
    }
}
