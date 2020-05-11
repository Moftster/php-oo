<?php

class Employee {
    public $jobTitle;

    public function __construct($jobTitle) {
        $this->jobTitle = $jobTitle;
    }

    public function getJobTitle(){
        return $this->jobTitle;
    }
}

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

echo "\n";

?>