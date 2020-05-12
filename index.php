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

    public function sayHello(){
        $message = "Hello my name is " . $this->firstName . " " . $this->lastName . "\n";
        $message .= "My job title is " . $this->jobTitle;
        return $message;
    }
}

class Person {

    protected $firstName;
    public $lastName;
    public $gender;

    public function __construct($firstName, $lastName, $gender = 'f') {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }

    public function getGender(){
        return $this->gender;
    }
}

$jane = new Employee('tester', 'Jane', 'Groves');

echo $jane->lastName;

?>