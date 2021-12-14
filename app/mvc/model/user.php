<?php

class User {
    private string $username;
    private string $password;

    public function __construct($username, $password){
        $this->username=$username;
        $this->password=$password;
    }
} 