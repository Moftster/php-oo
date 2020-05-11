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

    public function myGender(){
        if($this->gender == 'f') {
            return "I am a female";
        } else {
            return "I am a male";
        }
    }
}

$tom = new Person('Tom', 'Ben', 'm');
$jane = new Person('Jane', 'Groves', 'f');

echo $tom->sayHello();
echo $jane->myGender();

echo "\n";
// echo $tom->gender;

?>