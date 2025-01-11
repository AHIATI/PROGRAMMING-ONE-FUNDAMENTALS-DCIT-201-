<?php 
include ('student.php');

echo "Enter your name: \n";
$name = fgets(STDIN);

echo "Enter the course you are offering: \n";
$course = fgets(STDIN);

echo "Ente the score you had in the exam: \n" ;
$examScore = fgets(STDIN);

$student1 = new Student($name, $course, $examScore);
$student1->displayInfo();










?>