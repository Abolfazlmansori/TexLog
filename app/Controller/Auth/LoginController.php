<?php

namespace App\Controller\Auth;

use App\Config\Controller;

class LoginController extends Controller
{
        public function index()
    {
        $this->render('Auth/Login');
    }

}