<?php

class Cat 
{
	public $name;
	public $color;
	public $weight;
}

$cat1 = new Cat();
$cat1->name = 'Снежок';
$cat1->color = 'white';
$cat1->weight = 3.5;

$cat2 = new Cat();
$cat2->name = 'Барсик';
$cat2->color = 'black';
$cat2->weight = 6.2;

var_dump($cat1);
var_dump($cat2);

echo $cat1->name;