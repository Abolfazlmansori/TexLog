<?php

namespace App\Middleware;
class AuthMiddleware {
    private $session_timeout = 3600;

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function protect() {
        $this->checkTimeout();

        if (!$this->isLoggedIn()) {
            header("Location: /TexLog/Login");
            exit();
        }
    }

    public function redirectIfLoggedIn() {
        if ($this->isLoggedIn()) {
            header("Location: /Dashboard.php");
            exit();
        }
    }

   
    public function isLoggedIn(): bool {
        return isset($_SESSION['user']);
    }

    public function getUser() {
        return $_SESSION['user'] ?? null;
    }


    private function checkTimeout() {
        if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $this->session_timeout) {
            $this->logout();
            header("Location: /Login.php?error=timeout");
            exit();
        }
        $_SESSION['last_activity'] = time();
    }


    public function logout() {
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }
}
