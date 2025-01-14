<?php

class Bird extends Animal{

  public function __construct($name){
    parent::__construct($name);
  }

  public function makeSound(){
    echo "Name: " .  $this->getName(). "\n";
    echo "The bird beeps Chirp Chirp!!!";
  }

  public function fly(){
    echo "The bird is flying";
  }
}
?>