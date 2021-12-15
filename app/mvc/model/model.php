<?php
include_once("../mvc/model/user.php");

class Model {
    public function getAllUsers(){
        return array(
            #Return users from database query here
            #Dummy data
            "TestUser"=> new User("TestUser", "test"),
            "Bob"=> new User("Bob", "Test")
        );
    }

    public function getUser($username){
        $allUser= $this->getAllUsers();
        return $allUser[$username];
    }
}