<?php
  class Employee {
   private $empliyeerName;
   private $degisnation;
   private $salary;

   public function __construct($empliyeerName, $degisnation, $salary) 
   {
    $this->empliyeerName = $empliyeerName;
    $this->degisnation = $degisnation;
    $this->setSalary($salary);
   }

    public function empName() 
    {
      return $this->empliyeerName;
    }

    public function empDegisnation()
    {
     return $this->degisnation;
    }

    public function empSalary() 
    {
     return $this->salary;
    }

    public function setSalary($salary) 
    {
     if ($salary >= 0) 
     {
      $this->salary = $salary;
     }
     else
     {
      throw new InvalidArgumentException ("Salary cannot be negative.");
     }
    }

  }


  try
   {
    $employee = new Employee('Shatu Das','Software Engineer',30000);
    
    echo "Employee: {$employee->empName()}<br>";
    echo "Employee: {$employee->empDegisnation()}<br>";
    echo "Salary: {$employee->empSalary()}<br>";

    $employee->setSalary(-50000);
    }
    catch (InvalidArgumentException $e)
    {
     echo "Error: {$e->getMessage()}";
    }



?>