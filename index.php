<?php


class Employee
{
    private name;
    private salary;


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
        echo "Employee's Basic Information"
        echo "Name: " . $this->name;
        echo "Salary: " . $this->salary;
    }
}

?>