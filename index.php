<?php

class Employee extends Person {
    
    private $jobTitle;

    public function __construct($jobTitle, $firstName, $lastName, $gender = 'f') {
        $this->jobTitle = $jobTitle;
        parent::__construct($firstName, $lastName, $gender);
    }

    public function setJobTitle($jobTitle){
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

$jane = new Employee('Backend developer', 'Jane', 'Groves', 'm');

// $jane->jobTitle = 'Frontend developer';

$jane->setJobTitle("Dish washer");

echo $jane->getJobTitle();
// echo $jane->jobTitle;
echo "\n";
// echo $jane->getGender();
// echo "\n";
// echo $jane->sayHello();
echo "\n";

?>