<?php
/**
 * Created by PhpStorm.
 * User: Alena
 * Date: 10.10.2018
 * Time: 15:00
 */
class City
{
    private $name;
    private $people = [];

    public function setName($value)
    {
        $this -> name = $value;
    }

    public function getName()
    {
        return $this -> name;
    }
    public function addPerson(Person $person)
    {
        /** @var Person $people */
        $this -> $people[] = $person;
    }


    public function getPeople()
    {
        $result = '';
        /** @var Person  $person */
        foreach ( $this->people as $person)
        {
            $result .= $person -> getName().' ';
        }
        return $result;
    }
}

class Person
{
    private $name;

    public function setName($value)
    {
        $this -> name = $value;
    }

    public function getName()
    {
        return $this -> name;
    }
}

$person1 = new Person();
$person1 -> setName('Misha');

$person2 = new Person();
$person2 -> setName('Dima');

$person3 = new Person();
$person3 -> setName('Natasha');

$moscow = new City();
$moscow -> setName('Moscow');
echo $moscow -> getName(). '<br>';
$moscow -> addPerson($person1);
$moscow -> addPerson($person2);
$moscow -> addPerson($person3);

echo $moscow -> getPeople();
