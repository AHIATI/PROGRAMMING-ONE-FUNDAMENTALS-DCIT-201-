<?php 

class CommissionEmployee{
  private $firstName;
  private $lastName;
  private $socialSecurity;
  private $grossSales;
  private $commissionRate;

  public function __construct($firstName,$lastName,$socialSecurity,$grossSales,$commissionRate){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->socialSecurity = $socialSecurity;
    $this->grossSales= $grossSales;
    $this->commissionRate = $commissionRate;
    
  }
  
  public function getFirstName(){
    
  }
    
  }






?>