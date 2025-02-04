<?php 
class user{
  private $name;
  private $age;

  public function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
  }

  public function getName(){
    return $this->name;
  }

  public function getAge(){
    return $this->age;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setAge($age){
    $this->age = $age;
  }
  
  public function displayInfo(){
    echo "Name: " . $this->getName(). "\n";
    echo "Age: " . $this->getAge() . "\n";
  }

  public function isAdult(){
    return $this->age >= 18;
  }

}


?>