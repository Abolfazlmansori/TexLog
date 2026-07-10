<?php

namespace App\Controller\Post;

use App\Config\Controller;
use APP\Config\Database;
use Exception;

class PostController extends Controller
{
    public function index()
    {
        $this->render('Front/Post/CreatePost');
    }

    public function show(int $id)
    {
        $posts = Database::SelectOne('posts',$id);
        $this->render('Front/Post/ShowPost',['postsone' => $posts]);
    }

    public function store()
    {
        $title = $_POST['title'];
        $category = $_POST['category'];
        $read_time = $_POST['read_time'];
        $content = $_POST['content'];
        try {
            Database::Insert_Into('posts',"title, category, read_time, content",[$title,$category,$read_time,$content],4);
            header("location:/TexLog");
        } catch (Exception $e) {
            die('در ایجاد پست مشکلی پیش آمده'. $e->getMessage());
        }
    }
}
