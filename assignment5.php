<?php
class Person{
    public $name;
    public $email;
    function __construct($name='', $email='')
    {
        $this->name=$name;
        $this->email=$email;
    }
    function getName()
    {
        return $this->name;
    }
    function setName($name)
    {
        $this->name=$name;
    }
    function getEmail()
    {
        return $this->email;
    }
    function setEmail($email)
    {
        $this->email=$email;
    }
}

$person1= new Person("Trisha", "habijabi@gmail.com");
echo $person1->getName();
echo PHP_EOL;
echo $person1->getEmail();