<?php
class Employee
{
    public $id;
    public $name;
    protected $salary;

    public function set_salary($salary)
    {
        if ($salary < 0)
            $salary = 0;
        $this->salary = $salary;
    }

    public static function get_rate()
    {
        return [0.1, 0.2, 0.3];
    }

    private function calc_tax()
    {
        if ($this->salary <= 1000) {
            return $this->salary * 0.1;
        } else if ($this->salary <= 2000) {
            return $this->salary * 0.2;
        } else {
            return $this->salary * 0.3;
        }
    }

    public function get_net()
    {
        $tax = $this->calc_tax();
        return $this->salary - $tax;
    }
}

class Labor extends Employee
{
    public $duration;
    public function calc_total()
    {
        return $this->get_net() * $this->duration;
    }
}


$employee1 = new Employee;
$employee1->id = 1;
$employee1->name = "Islam";
$employee1->set_salary(150000);


$employee2 = new Employee;
$employee2->id = 2;
$employee2->name = "Mostafa";
$employee2->set_salary(200000);

$labor1 = new Labor;
$labor1->id = 3;
$labor1->name = "Ramy";
$labor1->set_salary(500000);
$labor1->duration = 6;

// echo $employee1->get_net();
// echo "<br />";
echo $employee2->get_net();
echo "<br />";
echo $labor1->calc_total();
echo "<br />";
echo Employee::get_rate()[0];
