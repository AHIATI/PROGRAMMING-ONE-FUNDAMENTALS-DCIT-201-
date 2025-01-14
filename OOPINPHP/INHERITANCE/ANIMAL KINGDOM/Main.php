<?php
  include ('Animal.php');
  include ('bird.php');
  include ('Cat.php');
  include ('Dog.php');


 $CatOne = new Cat("Asiamah");
 $CatOne -> makeSound();
 $CatOne -> scratch();

 echo "\n";
 echo "\n";

 $dogOne = new Dog("Rex");
  $dogOne->makeSound();     // Output: The barks woef woef!!!
  $dogOne->fetch();         // Output: The Dog is fetching the ball
  echo "\n";
  echo "\n";

  $birdOne = new bird("Tweety");
  $birdOne->makeSound();    // Output: Name: Tweety, The bird beeps Chirp Chirp!!!
  $birdOne->fly();          // Output: The bird is flying
  echo "\n";
  echo  "\n";

?>