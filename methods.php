<?php

class Cat 
{
	public $name;
	public $color;
	public $weight;
	
	public function sayHello () : void 
	{
		echo 'Привет! Меня зовут ' . $this->name . '.</br>';
	}
}

$cat1 = new Cat();

$cat1->name = 'Снежок';
$cat1->color = 'white';
$cat1->color = 3.5;

$cat1->sayHello();

$cat2 = new Cat();
$cat2->name = 'Барсик';
$cat2->sayHello();