<?php

namespace App\Controller\Post;

use App\Config\Controller;
use APP\Config\Database;
use App\Middleware\AuthMiddleware;
use Exception;

class PostController extends Controller
{
    private $auth;

    public function __construct()
    {
        $this->auth = new AuthMiddleware();
    }

    public function index()
    {
        $this->auth->protect();
        $this->render('Front/Post/CreatePost');
    }

    public function show(int $id)
    {
        $posts = Database::SelectOne('posts', $id);
        $this->render('Front/Post/ShowPost', ['postsone' => $posts]);
    }

    public function store()
    {
        $user = $this->auth->getUser();
        $title = $_POST['title'];
        $category = $_POST['category'];
        $read_time = $_POST['read_time'];
        $content = $_POST['content'];
        $writer = $user['email'];

        if (!empty($title) && !empty($category) && !empty($read_time) && !empty($content)) {
            try {
                Database::Insert_Into('posts', "title, category, read_time, content, writer ", [$title, $category, $read_time, $content, $writer], 5);
                header("location:/TexLog");
            } catch (Exception $e) {
                $this->render('Front/Post/CreatePost', ['error', 'در ایجاد پست مشکلی پیش آمده']);
            }
        } else {
            $this->render('Front/Post/CreatePost', ['error' => 'لطفاً تمامی فیلدها را پر کنید.']);
        }
    }
}
