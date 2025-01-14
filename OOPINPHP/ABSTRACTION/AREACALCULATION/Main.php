<?php
include_once('Shape.php');
include_once('Rectangle.php');
include_once('Circle.php');

$CircleOne =new  Circle("Red",5);
$CircleOne->displayInfo();
echo "\n";
echo "\n";

$RectangleOne = new Rectangle("black",5,10);
$RectangleOne->displayInfo();

?>