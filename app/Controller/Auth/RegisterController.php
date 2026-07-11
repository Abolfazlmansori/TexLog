<?php

namespace App\Controller\Auth;

use App\Config\Controller;

class RegisterController extends Controller
{
        public function index()
    {
        $this->render('Auth/Register');
    }

}