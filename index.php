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
        echo "Name: " . $this->name;
        echo "Salary: " . $this->salary;
    }

}

class Manager extends Employee {
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

?>