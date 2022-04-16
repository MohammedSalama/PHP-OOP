<?php

class Employee
{
    /**
     * @var Attribute
     */
    private $firstName;
    private $lastName;
    private $age;
    private $address;
    private $job;
    private $mySalary;

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

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
    }

    /**
     * @return mixed
     */
    public function getMySalary()
    {
        return $this->mySalary;
    }

    /**
     * @param mixed $mySalary
     */
    public function setMySalary($mySalary)
    {
        $this->mySalary = $mySalary;
    }

}

$employee1 = new Employee();

echo '<pre>';
print_r($employee1);
echo '</pre>';


$employee1 -> setFirstName("Muhammed");
$employee1 -> setLastName ("Salama");
$employee1 -> setAge (25);
$employee1 -> setAddress("Dammam , Saudi Arabia");
$employee1 -> setJob("Back-End Developer");
$employee1 -> setMySalary(20 . ' ' . 'EG');

echo '<pre>';
print_r($employee1);
echo '</pre>';


