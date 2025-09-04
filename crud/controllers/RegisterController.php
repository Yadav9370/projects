<?php
class RegisterController {
    private $user;
    public function __construct($user) {
        $this->user = $user;
    }
    public function index() {
        require 'views/register.php';
    }
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->user->register($_POST['name'], $_POST['email'], $_POST['password'])) {
                header('Location: /login');
                exit;
            } else {
                echo "Registration failed";
            }
        }
    }
}
