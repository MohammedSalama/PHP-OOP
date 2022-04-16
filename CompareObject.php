<?php

class Employee
{
    /**
     * @var Attribute
     */
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($firstName,$lastName,$age)
    {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> age = $age;
    }

    /**
     * @return Attribute
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param Attribute $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    public static function compare($obj1 , $obj2)
    {
        return $obj1 == $obj2;
    }
}

$employee1 = new Employee('Muhammed','Salama',25);
$employee2 = new Employee('Ahmed','Salama',25);

if (Employee::compare($employee1,$employee2))
{
    echo 'They are equal';
}
else
{
    echo 'They are not equal';
}

echo "<br><br>";

$employee3 = $employee2;
if ($employee3 === $employee2)
{
    echo 'They are identical';
}
else
{
    echo 'They are not identical';
}

echo "<br><br>";

$employee4 = clone $employee2;

if ($employee4 === $employee2)
{
    echo 'They are identical';
}
else
{
    echo 'They are not identical';
}