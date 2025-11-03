<?php
class Fruit {
    public $name;
    public $color;

}




$fruitobj = new Fruit;

$fruitobj->name = "Mango";
$fruitobj->color = "Green";



$fruitobj2 = new Fruit;
$fruitobj2->name = "Grapes";
$fruitobj2->color = "Blue";
var_dump($fruitobj2);
var_dump($fruitobj);



?>



