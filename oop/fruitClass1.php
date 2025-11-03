<?php
class Fruit {
    private $name;
    private $color;

    function set_name($name){
        $this->name = $name;
    }
    function set_color($color){
        $this->color = $color;
    }

    
}

$obj1 = new Fruit;
$obj1->set_name("Apple"); 
$obj1->set_color("Black"); 
var_dump($obj1)



?>



