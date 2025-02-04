<?php

$name;
$age;


echo "Enter your name: ";
$name = fgets(STDIN);
$name = trim($name); 

echo "Enter your age: ";
$age = fgets(STDIN);
$age = trim($age); 

// Convert use fgets() reads input as a string)
$age = (int)$age;

// Conditional logic based on age
if ($age <= 10) {
    echo "Welcome $name, young baby kid\n"; 
} elseif ($age > 10 && $age < 18) {
    echo "Welcome $name, young adult\n";  
} else {
    echo "Welcome $name, adult\n";  
}

// Final welcome message
echo "You are welcome $name\nYou are $age years old.\n";  // Fixed string syntax and added semicolon
?>
