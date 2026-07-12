<?php

namespace App\Controller\Auth;

use App\Config\Controller;
use App\Config\Database;
use Exception;

class RegisterController extends Controller
{
    public function index()
    {
        $this->render('Auth/Register');
    }

    public function store()
    {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confrim = $_POST['password_confrim'];
        $hashPaswword = password_hash($password, PASSWORD_BCRYPT);

        if (!empty($fullname) && !empty($username) && !empty($email) && !empty($password) && !empty($password_confrim)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if (strlen($password) >= 8) {
                    if ($password == $password_confrim) {
                        try {
                            Database::Insert_Into('users','fullname,username,email,password', [$fullname, $username, $email, $hashPaswword], 4);
                            header("location:/TexLog/Login");
                        } catch (Exception $e) {
                            die('در ایجاد پست مشکلی پیش آمده' . $e->getMessage());
                        }
                    } else{
                        $this->render('Auth/Register',['error' => 'رمز عبور و تایید رمز عبور مطابقت ندارند.']);
                    }
                } else{
                        $this->render('Auth/Register',['error' => 'رمز عبور باید حداقل ۸ کاراکتر باشد.']);
                }
            } else{
                        $this->render('Auth/Register',['error' => 'ایمیل وارد شده معتبر نیست.']);
            }
        } else{
                        $this->render('Auth/Register',['error' => 'لطفاً تمامی فیلدها را پر کنید.']);

        } 
    }
}
