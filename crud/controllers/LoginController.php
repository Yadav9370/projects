<?php
class LoginController {
    private $logins;
    public function __construct($logins) {
        $this->logins = $logins;
    }
    public function index() {
        require 'views/login.php';
    }
    public function check() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->logins->verify($_POST['email'], $_POST['password']);
            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header('Location: /home');
                exit;
            } else {
                echo "Invalid credentials";
            }
        }
    }
}
