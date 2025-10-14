<?php

class Cat
{
	private $name;
	public $color;
	public $weight;
	
	public function sayHello () : void
	{
		echo 'Привет! Меня зовут ' . $this->name . '.';
	}
	
	public function setName (string $name) : void
	{
		$this->name = $name;
	}
	
	public function getName() : string
	{
		return $this->name;
	}
}

	$cat1 = new Cat();
	$cat1->setName('Снежек');
	echo $cat1->sayHello().'</br>';
	echo $cat1->getName();
		