<?php 

class Dog extends Animal{

  public function __construct($name){
    parent::__construct($name);
  }

  public function makeSound(){
    echo "Name:".  $this->getName(). "\n";
    echo "The barks woef woef!!!";
  }

  public function fetch(){
    echo "The Dog is fetching the ball.";
  }

}

?>