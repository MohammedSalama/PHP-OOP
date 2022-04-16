<?php

class Person
{
    /**
     * @var Attribute
     */
    public $firstName;
    public $lastName;
    public $age;
    public $address;
    public $job;


    /**
     * @return void
     */
    function printInfo()
    {
        $resualt = '';
        $resualt .= $this -> firstName . 'and' . $this -> lastName;
        $resualt .= $this -> age . 'and' . $this -> address;
        $resualt .= $this -> job ;
        return $resualt;
    }
}

$person1 = new Person();

echo '<pre>';
print_r($person1);
echo '</pre>';

$person1 -> firstName = "Muhammed";
$person1 -> lastName = "Salama";
$person1 -> age = 25;
$person1 -> address = "Cairo";
$person1 -> job = "Back-End Developer";

echo '<pre>';
print_r($person1);
echo '</pre>';

