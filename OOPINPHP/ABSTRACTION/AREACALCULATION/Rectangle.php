<?php

 class Rectangle extends Shape{
  protected $length;
  protected $breadth;

  public function __construct($color,$length,$breadth){
    parent::__construct($color);
    $this->length = $length;
    $this->breadth = $breadth;
  }

  public function getLength(){
    return $this->length;
  }

  public function setLength($length){
    $this->length = $length;
  }

  public function getBreadth(){
    return $this->breadth;
  }

  public function setBreadth($breadth){
    $this->breadth = $breadth;
  }

  public function calculateArea(){
    return  $this->getLength() * $this->getBreadth();
  }

  public function displayInfo(){
    echo "Color of Shape: " . $this->getColor() . "\n";
    echo "Area of Rectangle: " . $this->calculateArea() ."cm^2" . "\n";
  }
 }
?>