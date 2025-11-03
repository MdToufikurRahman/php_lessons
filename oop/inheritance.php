<?php 
    class Fruit{
        public $name;
        public $color;

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        function info(){
            echo "Name:" . $this->name . " color: " . $this->color . "<br>";
        }
    }


    class Grape extends Fruit{
        function message(){
            echo "I am function inside Grape class";
        }
    }

    $obj1 = new Fruit("Apple", "Green");
    $obj1->info(); 


    $obj2 = new Grape("Orange", "Red");
    $obj2->info();
    $obj2->message();




?>