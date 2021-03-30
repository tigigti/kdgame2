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
        echo ("Register: " . $this->username . $this->password);
    }
}