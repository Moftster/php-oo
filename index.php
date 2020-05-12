<?php

class Employee extends Person {
    
    private $jobTitle;
    private $employeeNumber;

    public function __construct($jobTitle, $firstName, $lastName, $gender = 'f') {
        $this->jobTitle = $jobTitle;
        parent::__construct($firstName, $lastName, $gender);
    }

    public function __set($name, $value) {
        $this->$name = ucfirst($value);
    } 

    public function __get($name) {
        return $this->$name; 
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

$jane = new Employee('Backend dev', 'Jane', 'Groves');
$jane->jobTitle = 'tester';
$jane->employeeNumber = '1234';
echo $jane->jobTitle;
echo "\n";
echo $jane->employeeNumber;

?>