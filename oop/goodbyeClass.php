<?php 
class goodbyeClass{

    const mymsg = "I am learning the hardest thing in my life till now";
    const mymsg2 = "I am learning php";

    function Info(){
        echo self::mymsg2;
    }

}


$obj = new goodbyeClass;
$obj->Info();
echo "<br>";
echo goodbyeClass::mymsg;

?>