<?php

class Person
{
    /**
     * @var
     */
    private $firstName;
    private $lastName;
    private $age;
    private $address;

    /**
     * @param $firstName
     * @param $lastName
     * @param $age
     * @param $address
     */
    public function __construct($firstName , $lastName , $age , $address)
    {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> age = $age;
        $this -> address =$address;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this -> firstName . ' ' . $this -> lastName . ' ' . $this -> age . ' ' . $this -> address;
    }
}

$person1 = new Person('Muhammed','Salama',25,'Cairo-Egypt');
//echo '<pre>';
//print_r($person1);
//echo '</pre>';
//
//echo "----------------------------";
//echo '<pre>';
//var_dump($person1);
//echo '</pre>>';

echo $person1;