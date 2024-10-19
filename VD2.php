<?php
class Employee
{
    const SALARY_MAX = 1000;
    private string $name;
    private float $base_salary;
    private float $rate;

    public function __construct(string $name, float $base_salary, float $rate) {
        $this->name = $name;
        $this->base_salary = $base_salary;
        $this->rate = $rate;
    }
    public function getSalary(): float
    {
        return $this->base_salary * $this->rate;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function increaseSalary(float $amount): bool
    {
        if ($this->base_salary * ($this->rate + $amount) > self::SALARY_MAX) {
            return false;
        }

        $this->rate += $amount;
        return true;
    }
}

$van = new Employee("Vân", 100, 1);
echo $van->getName() . "\n";
echo "Lương trước khi tăng: " . $van->getSalary() . "\n";
$isIncrease = $van->increaseSalary(5);
if ($isIncrease)
{
    echo $van->getName() . " được tăng lương" . "\n";
}
else {
    echo $van->getName() . " không được tăng lương";
}
echo "Lương sau khi tăng: " . $van->getSalary() . "\n";

$vava = new Employee("Vava", 1000, 1);
echo $vava->getName() . "\n";
echo "Lương trước khi tăng: " . $vava->getSalary() . "\n";
$isIncrease = $vava->increaseSalary(100);
if ($isIncrease)
{
    echo $vava->getName() . " được tăng lương" . "\n";
}
else {
    echo $vava->getName() . " không được tăng lương" . "\n";
}
echo "Lương sau khi tăng: " . $vava->getSalary() . "\n";
