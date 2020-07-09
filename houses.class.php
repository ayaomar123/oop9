<?php
class House{
  //Properites
  public $name;
  public $age;


  public function __construct($name, $age ){
    $this->name = $name;
    $this->age = $age;
  }
  public function getAdress(){
    return $person = $this->name . "is" . $this->age . "years old";

  }


?>
