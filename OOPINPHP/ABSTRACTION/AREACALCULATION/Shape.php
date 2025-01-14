<?php

abstract class Shape{
  protected $color;

  public function __construct($color){
    $this->color = $color;
  }

  public function getColor(){
    return $this->color;
  }

  public function setColor ($color){
    $this->color =$color;
  }
  
  abstract public function calculateArea();
  abstract public function displayInfo();
}
?>