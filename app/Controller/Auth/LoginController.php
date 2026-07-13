<?php

namespace App\Controller\Auth;

use App\Config\Controller;
use App\Config\Database;
use Exception;

class LoginController extends Controller
{
    public function index()
    {
        $this->render('Auth/Login');
    }

    public function store()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = Database::SelectByEmail('users', $email);
        $verifyPass = password_verify($password, $user['password']);


        if (!empty($email) && !empty($password)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if ($user && $verifyPass) {

                    try {
                        $_SESSION['user'] = $user;
                        header("location:/TexLog");
                        exit;
                    } catch (Exception $e) {
                        die('خطایی در ورود کاربر رخ داد.' . $e->getMessage());
                    }
                } else {
                    $this->render('Auth/Login', ['error' => 'ایمیل یا رمز عبور اشتباه است']);
                }
            } else {
                $this->render('Auth/Login', ['error' => 'ایمیل وارد شده معتبر نیست.']);
            }
        } else {
            $this->render('Auth/Login', ['error' => 'لطفاً تمامی فیلدها را پر کنید.']);
        }
    }

    public function logout()
{
    $_SESSION = [];
    session_destroy();
    header("Location: /TexLog");
    exit;
}

}
