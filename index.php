<?php

class Employee extends Person {

    static $jobNumber = 100;

    const COMPANY_NAME = 'ACME';

    // 
    // Title of job
    // @var string Job Title
    //     
    public $jobTitle;
    private $employeeNumber;

    public function __construct($jobTitle, $firstName, $lastName, $gender = 'f') {
        $this->jobTitle = $jobTitle;
        // echo parent::EYE_COLOUR;
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

    const EYE_COLOUR = "Brown";

    protected $firstName;
    public $lastName;
    public $gender;

    public function __construct($firstName, $lastName, $gender = 'f') {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        // echo self::EYE_COLOUR;

    }

    public function getGender(){
        return $this->gender;
    }
}

$jane = new Employee('Backend dev', 'Jane', 'Groves');

echo Employee::$jobNumber;
echo "\n";

?>