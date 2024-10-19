<?php
class Manager
{
    private int $id;
    private string $start_work;
    private int $id_department;
    public function __construct(int $id, string $start_work, int $id_department)
    {
        $this->id = $id;
        $this->start_work = $start_work;
        $this->id_department = $id_department;
    }
    public function getId(): int
    {
        return $this->id;
    }
}
class Company
{
    private int $id;
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return $this->id;
    }
}
class Department
{
    private int $id;
    private string $name;
    private string $location;
    private string $id_company;
    public function __construct(int $id, string $name, string $location, string $id_company)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->id_company = $id_company;
    }
    public function getName(): string
    {
        return $this->name;
    }
}
class Employee
{
    private int $id;
    private string $name;
    private int $age;
    private float $salary;
    private string $address;
    private int $insurance_number;
    private string $gender;
    private Manager $manager;
    private Department $department;
    public function __construct(int $id, string $name, int $age, float $salary, string $address, int $insurance_number, string $gender, Manager $manager, Department $department)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        $this->address = $address;
        $this->insurance_number = $insurance_number;
        $this->gender = $gender;
        $this->manager = $manager;
        $this->department = $department;
    }
    public function getInfo(): string
    {
        return "Id: $this->id, Name: $this->name, Age: $this->age, Salary: $this->salary, Addess: $this->address, Insurance number: $this->insurance_number, Gender: $this->gender,
        Manager: {$this->manager->getID()}, Department: {$this->department->getName()}";
    }
}

$manager = new Manager(1, '2024-01-01', 1);
$department = new Department(1, 'IT', 'HN', 1);
$employee = new Employee(1, 'John Doe', 30, 1000, 'HN', 1000000000, 'Male', $manager, $department);
echo $employee->getInfo(); // Id: 1, Name: John Doe, Age: 30, Salary: 1000, Addess: HN, Insurance number: 1000000000, Gender: Male, Manager: 1, Department: IT;

class Work_place
{
    private int $id;
    private int $id_department;
    public function __construct(int $id, int $id_department)
    {
        $this->id = $id;
        $this->id_department = $id_department;
    }
    public function getId(): int
    {
        return $this->id;
    }
}

class Project
{
    private int $id;
    private string $project_code;
    private string $project_name;
    private int $id_department;
    private int $id_work_place;
    public function __construct(int $id, string $project_code, string $project_name, int $id_department, int $id_work_place)
    {
        $this->id = $id;
        $this->project_code = $project_code;
        $this->project_name = $project_name;
        $this->id_department = $id_department;
        $this->id_work_place = $id_work_place;
    }
    public function getId(): int
    {
        return $this->id;
    }
}

class Working_time
{
    private int $id;
    private int $work_hour;
    private int $workweek;
    private int $id_employee;
    private int $id_project;
    public function __construct(int $id, int $work_hour, int $workweek, int $id_employee, int $id_project)
    {
        $this->id = $id;
        $this->work_hour = $work_hour;
        $this->workweek = $workweek;
        $this->id_employee = $id_employee;
        $this->id_project = $id_project;
    }
    public function getId(): int
    {
        return $this->id;
    }
}

class Children

