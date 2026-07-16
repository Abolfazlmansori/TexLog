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
        $writer = Database::SelectByEmail('users', $posts['writer']);
        $this->render('Front/Post/ShowPost', ['postsone' => $posts, 'writer' => $writer]);
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

    public function edit(int $id)
    {
        $post = Database::SelectOne('posts', $id);
        $this->render('Front/Post/EditPost', ['post' => $post]);
    }

    public function update(int $id)
    {
        $post = Database::SelectOne('posts', $id);
        if (!$post) {
            header("location:/TexLog/posts");
            exit;
        }

        $title = isset($_POST['title']) ? $_POST['title'] : $post['title'];
        $category = isset($_POST['category']) ? $_POST['category'] : $post['category'];
        $read_time = isset($_POST['read_time']) ? $_POST['read_time'] : $post['read_time'];
        $content = isset($_POST['content']) ? $_POST['content'] : $post['content'];

        if (!empty($title) && !empty($category) && !empty($read_time) && !empty($content)) {
            try {
                Database::Update('posts', ['title' => $title, 'category' => $category, 'read_time' => $read_time, 'content' => $content], $id);
                header("location:/TexLog/post/$id");
                exit;
            } catch (Exception $e) {
                $this->render('Front/Post/EditPost/', ['error' => 'در ویرایش پست مشکلی پیش آمده','id' => $id]);
            }
        } else {
            $this->render('Front/Post/EditPost/', ['error' => 'لطفاً تمامی فیلدها را پر کنید.','id' => $id]);
        }
    }
}
