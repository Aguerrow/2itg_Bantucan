<?php


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
        echo "Employee's Basic Information: <br><br>";
        echo "Name: " . $this->name . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }

}

class Manager extends Employee 
{
    private $department;
    
    public function __construct($department) {
        $this->department = $department;
    }
    
    public function getDepartment() {
        return $this->department;
    }
    
    public function printInfo() {
        parent::displayInfo();
        echo "Department: " . $this->department;
    }
}

$myManager = new manager("Accounting");
$myManager->setName("Isagi Yoichi");
$myManager->setSalary(25000);


$name = $myManager->getName();
$salary = $myManager->getSalary();
$department = $myManager->getDepartment();


$myManager->printInfo();

?>