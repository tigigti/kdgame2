<?php

class User
{
    public $username;
    public $password;
    public $role;
    public $conn;

    public function __construct($username, $password, $conn)
    {
        global $conn;
        $this->username = $username;
        $this->password = $password;
        $this->conn = $conn;
    }

    public function register()
    {
        $stmt = $this->conn->prepare("INSERT INTO user(username,password) VALUE (?, ?)");
        $hashed = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt->bind_param("ss", $this->username, $hashed);
        if (!$stmt->execute()) {
            if ($this->conn->errno == 1062) {
                echo __("Username already exists");
            } else {
                echo __("Could not create account");
            }
        } else {
            echo __("Account created");
        }
    }
}