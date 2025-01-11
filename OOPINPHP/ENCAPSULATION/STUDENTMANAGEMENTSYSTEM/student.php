<?php
 class Student{
   private $name;
   private $course;
   private $examScore;
   private $grade;

  public function __construct($name,$course,$examScore){
    $this->name = $name;
    $this->course = $course;
    $this->setExamScore($examScore);
    }

  public function getName(){
    return $this->name;
  }

  public function getCourse(){
    return $this->course;
  }

  public function getExamScore(){
    return $this->examScore;
  }


  public function setName($name){
    if(empty($name)){
      echo "The name section cannot be empty. Please enter your name.";
    }
    else{ $this->name = $name;
    }
  }

  public function setCourse($course){
    if(empty($course)){
      echo "Course section cannot be empty. Please enter your course.";
    }
    else{
      $this->course = $course;
    }
      }

      
  public function setExamScore($examScore){
     $examScore = (int)$examScore;
     
     if($examScore === null || $examScore < 0){
      echo "Enter your score here. Dont leave it blank please";
     }
     else{
      $this->examScore = $examScore;
     }

     switch (true){
      case $examScore >=80:
        $this->grade = 'A';
        break;

      case $examScore >=75 && $examScore < 80:
        $this->grade = 'B+';
        break;

        case $examScore >=70 && $examScore < 75:
          $this->grade = 'B';
          break;

        case $examScore >=65 && $examScore < 70:
            $this->grade = 'C+';
            break;

        case $examScore >=60 && $examScore < 65:
              $this->grade = 'C';
              break;

        case $examScore >=55 && $examScore < 60:
                $this->grade = 'D+';
                break;

        case $examScore >=50 && $examScore < 55:
                  $this->grade = 'D';
                  break;

       case $examScore >=45 && $examScore < 50:
                    $this->grade = 'E';
                    break;

        default:
        $this->grade = 'F';
     }
  }
  
  public function displayInfo(){
    echo "Name: ".$this->name ."\n";
    echo "Course: ".$this->course ."\n"; 
    echo "Grade: ". $this->grade . "\n"; 
  }
  
  }
?>