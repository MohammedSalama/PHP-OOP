<?php

class Person
{
    /**
     * @param $name
     * @return void
     */
    public function PrintFirstName($name)
    {
        echo 'Name is : ' . ' ' . $name;
    }

    /**
     * @param $lastName
     * @return void
     */
    public function PrintLastName($lastName)
    {
        echo 'Last Name is: ' . ' ' . $lastName;
    }

    /**
     * @param $age
     * @return void
     */
    public function PrintAge($age)
    {
        echo 'Age is: ' . ' ' . $age;
    }
}

/**
 * Class Student is Son of Class Person
 * And we can use it in new file
 */
class Student extends Person
{
    /**
     * @param $name
     * @return void
     */
    public function PrintFirstName($name)
    {
        echo 'Name is : ' . ' ' . $name;
    }

    /**
     * @param $lastName
     * @return void
     */
    public function PrintLastName($lastName)
    {
        echo 'Last Name is: ' . ' ' . $lastName;
    }

    /**
     * @param $age
     * @return void
     */
    public function PrintAge($age)
    {
        echo 'Age is: ' . ' ' . $age;
    }
}

/**
 * Inheritance Function Age From Class Person
 */
class Employee extends Person
{
    public function PrintAge($age)
    {
        echo 'Age is : ' . ' ' . $age;
    }
}
$person = new Person();
$person -> PrintFirstName('Belal');
$person -> PrintLastName('Fayed');
$person -> PrintAge(50);

echo "<br><br><br>";

$student = new Student();
$student -> PrintFirstName('Muhammed');
$student -> PrintLastName('Salama');
$student -> PrintAge(25);

echo "<br><br><br>";

$employee = new Employee();
$employee ->PrintAge(30);
