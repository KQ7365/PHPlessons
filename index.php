<?php


//properties
class User {
    //this is creating the keys of an object
    public $name;
    public $email;

    //constructor -- allows us to shorthand making an object (see below)
    public function __construct($name, $email){
       $this->name = $name;
       $this->email = $email;
    }

    //Methods--this is now a function that runs inside the class
    public function login(){
        echo $this->name ." logged in";
    }
}

//now instantiate/create new user object
$user1 = new User("John Doe", "john@gmail.com");



//notice the arrow syntax we use for this--we are now accessing the method inside the Class
$user1->login();

$user2 = new User("Jane Doe", "jane@gmail.com");
