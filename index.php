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

    public function getGender(){
        return $this->gender;
    }
}

$tom = new Person('Tom', 'Ben', 'm');
$jane = new Person('Jane', 'Groves', 'f');

// echo $tom->sayHello();
echo $jane->sayHello() . ". Gender: " . $jane->getGender();

echo "\n";
// echo $tom->gender;

?>