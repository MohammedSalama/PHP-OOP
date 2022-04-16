<?php

interface Person
{
    /**
     * @param $firstName
     * @param $lastName
     * @return mixed
     */
    public function firstLastPerson($firstName,$lastName);

    /**
     * @param $age
     * @return mixed
     */
    public function agePerson($age);

    /**
     * @param $address
     * @return mixed
     */
    public function addressPerson($address);
}

class Student implements Person
{
    /**
     * @param $firstName
     * @param $lastName
     * @return int|mixed
     */
    public function firstLastPerson($firstName,$lastName)
    {
        return printf("Student First name : %s Last name : %s" , $firstName,$lastName);
    }

    /**
     * @param $age
     * @return int|mixed
     */
    public function agePerson($age)
    {
        return printf("Student Age : %d" , $age);
    }

    /**
     * @param $address
     * @return int|mixed
     */
    public function addressPerson($address)
    {
        return printf("Student Address : %s",$address);
    }
}

$student = new Student();
$student -> firstLastPerson('Muhammed','Salama');
echo '<br>';
$student -> agePerson(25);
echo '<br>';
$student -> addressPerson('Cairo - Egypt');