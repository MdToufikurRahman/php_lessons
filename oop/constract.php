<?php 
class fruitClass2 {
    public $name;
    public $color;

    function __construct($name){
        echo "Hello " . $name;
    }
   
}

new fruitClass2("Toufik");

?>