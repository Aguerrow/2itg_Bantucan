<?php

// Parent Class
class Employee
{
    private $name;
    private $salary;
    
    public function setName($name) 
    {
        $this->name = $name;
    }
    
    public function getName() 
    {
        return $this->name;
    }
    
    public function setSalary($salary) 
    {
        $this->salary = $salary;
    }
    
    public function getSalary() 
    {
        return $this->salary;
    }
    
    public function displayInfo() 
    {
        echo "<br>Employee's Information<br>";
        echo "<br>Name: " . $this->name . "<br>";
        echo "Salary: " . "₱" . $this->salary . "<br>";
    }
}


// Child Class
class Manager extends Employee 
{
    private $department;
    
    public function __construct($name, $salary, $department) 
    {
        $this->setName($name);
        $this->setSalary($salary);
        $this->department = $department;
    }
    
    public function getDepartment() 
    {
        return $this->department;
    }
    
    public function printInfo() 
    {
        parent::displayInfo();
        echo "Department: " . $this->department . "<br>";
    }
}

class Director extends Manager 
{
    private $carAllowance;
    
    public function __construct($name, $salary, $department, $carallowance) 
    {
        parent::__construct($name, $salary, $department);
        $this->carallowance = $carallowance;
    }
    
    public function getCarAllowance() 
    {
        return $this->carallowance;
    }
    
    public function printInfo() 
    {
        parent::printInfo();
        echo "Car Allowance: " . "₱" . $this->carallowance . "<br>";
    }
}

class Executive extends Employee 
{
    private $position;
    
    public function __construct($name, $salary, $position) 
    {
        $this->setName($name);
        $this->setSalary($salary);
        $this->position = $position;
    }
    
    public function getPosition() 
    {
        return $this->position;
    }
    
    public function printInfo() 
    {
        parent::displayInfo();
        echo "Position: " . $this->position . "<br>";
    }
}

class IT extends Executive 
{
    public function __construct($name, $salary) 
    {
        parent::__construct($name, $salary, "IT Head");
    }
}

class Intern extends Executive 
{
    public function __construct($name, $salary) 
    {
        parent::__construct($name, $salary, "Intern");
    }
}

// Hierarchical Inheritance
$manager1 = new Manager("Seishiro Nagi", 25000, "Accounting");
$manager1->printInfo();

$executive1 = new Executive(" Meguro Bachira", 50000, "Secretary");
$executive1->printInfo();

// Multilevel Inheritance
$director = new Director("Isagi Yoichi", 150000, "Admin", 10000);
$director->printInfo();

$it1 = new IT("Rensuke Kunigami", 90000);
$it1->printInfo();

$intern1 = new Intern("Hyoma Chigiri", 1000);
$intern1->printInfo();

?>