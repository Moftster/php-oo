<?php

class Person {
    
    public $firstName;
    public $lastName;
    public $gender;

    public function __construct($firstName, $lastName, $gender = 'f') {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }

    public function sayHello(){
        return "Hello my name is " . $this->firstName . " " . $this->lastName;
    }
}

$tom = new Person('Tom', 'Ben', 'm');

echo $tom->sayHello();
// echo $tom->gender;

?>