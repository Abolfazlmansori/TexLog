<?php

namespace App\Config;

class Controller
{
    public function render(string $view, $data = [])
    {
        extract($data);
        $viewPath = __DIR__ . "/../../view/" . $view . ".php";
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            die("خطای فرانت: فایل نمایش در مسیر مقابل پیدا نشد: " . $viewPath);
        }
    }
}
