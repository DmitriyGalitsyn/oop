<?php

interface ISayYourClass
{
    public function sayYourClass() : string;
}

trait sayYourClassTrait
{
    private $class;

    public function sayYourClass () : string
    {
        return 'My class ' . $this->class . PHP_EOL;
    }
}

class Man implements ISayYourClass
{
    use sayYourClassTrait;
    public function __construct ()
    {
        $this->class = self::class;
    }
}

class Box implements ISayYourClass
{
    use sayYourClassTrait;
    public function __construct()
    {
        $this->class = self::class;
    }
}

$man = new Man();
$box = new Box();
echo $man->sayYourClass();
echo $box->sayYourClass();

