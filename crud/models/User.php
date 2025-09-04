<?php
class User {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function register($name, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $email, password_hash($password, PASSWORD_BCRYPT)]);
    }
}
