<?php

class Student
{

    const number1 = 100 + self::number2 ;
    const number2 = 200;

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

    /**
     * @return int
     */
    public static function printInfo()
    {
        return Student::number1+100;
    }

    /**
     * @param $lastname
     * @return string
     */
    public static function returnNameInfo($lastname)
    {
        return Student::$myName . ' ' . $lastname;
    }
}


echo Student::printInfo() . ' ' . 'USD' . '<br>' ;
echo Student::returnNameInfo('Salama');
