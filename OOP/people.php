<?php

/**
 *
 */
 /**
  *
  */


 class Werknemer extends Persoon {

    static $werknemernummer = 100;
     const COMPANY_NAME = 'NIKE';

   /**
    * Titel van de baan
    * @var string Job Title
    */
   public $jobTitle;
   private $jobNumber;

   public function __construct($jobTitle, $firstName, $lastName, $gender = 'f') {
     $this->jobTitle = $jobTitle;

     parent::__construct($firstName, $lastName, $gender);
   }

   public function __set($name, $value)
   {
     $this->$name = $value;
   }

   public function __get($name)
   {
     return $this->$name;
   }


   public function sayHello() {
     $message = "Hallo mijn naam is " . $this->firstName . " " . $this->lastName . " \n";
     $message .= "Mijn beroep is " . $this->jobTitle;
     return $message;
   }

 }

class Persoon {

   const EYE_COLOR = 'brown';

  protected $firstName;
  public $lastName;
  public $gender;


  public function __construct($firstName, $lastName, $gender = 'f')
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->gender = $gender;
  }

  public function getGender() {
    return $this->gender;
  }
}

echo Werknemer::$werknemernummer;
echo "\n";

 ?>
