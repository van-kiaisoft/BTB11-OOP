<?php
class Employee
{
    private $name;
    private $age;
    private $salary;
    public function __construct($name, $age, $salary)

    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;

    }

    public function getName()

    {
        return $this->name;
    }

    public function setName($name)

    {
        $this->name = $name;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}

$employee = new Employee('Van', 18, 1000);
echo $employee->getName();

$employee1 = new Employee('Vava', 18, 1000);
echo $employee1->getName();

echo $employee1->getName();

echo $employee->getSalary();
