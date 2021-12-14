<?php
include_once("model/User.php");


class Model {
    public function getAllUsers(){
        return array(
            #Return users from database query here
            #Dummy data
            "Test User"=> new User("TestUser", "test");
            "Bob"=> new User("Bob", "Test");
        );
    }

    public function getUser($username){
        $allUser= $this->getAllUsers();
        return $allUser[$username];
    }
}