<?php

 class Circle extends Shape{
  protected $radius;

  public function __construct($color,$radius){
    parent::__construct($color);
    $this->radius = $radius;
  }

   public function getRadius(){
    return $this->radius;
  }

  public function setRadius($radius){
    $this->radius = $radius;
  }

  public function calculateArea(){
    return  pow($this->radius , 2) * pi();
  }

  public function displayInfo(){
    echo "Color of Shape: " . $this->getColor() . "\n";
    echo "Area of Circle: " . $this->calculateArea() ."cm^2" . "\n";
  }
 }
?>