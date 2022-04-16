<?php

class Employee
{
    /**
     * @var
     */
    private $firstName;
    private $lastName;
    private $age;
    private $address;
    private $salary;

    /**
     * @param $firstName
     * @param $lastName
     * @param $age
     * @param $address
     * @param $salary
     */
    public function __construct($firstName , $lastName , $age , $address , $salary)
    {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> age = $age;
        $this -> address = $address;
        $this -> salary = $salary;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "<b>First name :</b>" . $this -> firstName . '<br>'. "<b>Last name :</b>" . $this -> lastName . '<br>' . "<b>Age :</b>" .$this -> age . '<br>' . "<b>Address :</b>" . $this -> address . '<br>' . "<b>Salary</b> :" . $this -> salary;
    }
}

$employee = new Employee('Muhammed','Salama',25,'Cairo',20);

echo $employee;

echo "<br><br><br><br>";

$employee = new Employee('Ali','Samir',11,'IRAQ',30);

echo $employee;

echo "<br><br><br><br>";

$employee1 = $employee;
echo $employee1;

echo "<br><br><br><br>";

$employee3 = clone $employee;
echo $employee3;