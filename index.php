<?php

class Employee extends Person {
    
    private $jobTitle;

    public function __construct($jobTitle, $firstName, $lastName, $gender = 'f') {
        $this->setJobTitle($jobTitle);
        parent::__construct($firstName, $lastName, $gender);
    }

    public function setJobTitle($jobTitle){
        $this->jobTitle = ucfirst($jobTitle);
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

    private function sayHello(){
        return "Hello my name is " . $this->firstName . " " . $this->lastName;
    }

    public function getGender(){
        return $this->gender;
    }
}

$jane = new Employee('tester', 'Jane', 'Groves', 'm');

echo $jane->getJobTitle();

echo $jane->sayHello();

// echo "\n";

?>