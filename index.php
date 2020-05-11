<?php

class Employee extends Person {
    public $jobTitle;

    public function __construct($jobTitle, $firstName, $lastName, $gender = 'f') {
        $this->jobTitle = $jobTitle;
        parent::__construct($firstName, $lastName, $gender);
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

$jane = new Employee('Backend developer', 'Jane', 'Groves');
echo $jane->getJobTitle();
echo "\n";
echo $jane->getGender();
echo "\n";
echo $jane->sayHello();
echo "\n";

?>