<?php class Animal{
  private $name;

 public function __construct($name){
  $this->name = $name;
 }

  public function getName(){
    return $this->name;
  }

  public function setName($name){
    if($name === ""){
      echo "This section cannot be empty";
    }
    else{
      $this->name = $name;
    }
  }

  public function makeSound(){
    echo "Name: " . $this->getName(). "\n" ;
    echo"Make some generic sound";
  }
 }
 ?>