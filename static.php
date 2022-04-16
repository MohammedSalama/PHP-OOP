<?php

class Student
{
    /**
     * @var string
     */
    public static $myName = 'Muhammed';
    public static $myLastName = 'Salama';
    public static $myArray = array(1 => 'Apple',2 => 'Samsung',3 => 'Techno');
    private $properties;

    /**
     * @param $propertyName
     * @return mixed|void
     */
    public function __get($propertyName)
    {
        if(array_variables($propertyName,$properties))
        {
            return $this->properties[$propertyName];
        }
    }

    /**
     * @param $propertyName
     * @param $propertyValue
     * @return void
     */
    public function __set($propertyName,$propertyValue)
    {
        $this -> properties[$propertyName] = $propertyValue;
    }
}

echo Student::$myName;
echo Student::$myLastName;

echo '<pre>';
print_r(Student::$myArray);
echo '</pre>';