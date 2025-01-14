<?php
class Cat extends Animal{

  public function __construct($name){
    parent::__construct($name);
  }

  public function makeSound(){
    echo "Name: " . $this->getName() . "\n";
    echo "The Cat cries meow meow!!!";
  }

  public function scratch(){
    echo "The Cat is scratching.";
  }
}
?>