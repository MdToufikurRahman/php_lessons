<?php

$country_capitals = array(
    "Bangladesh" => "Dhaka",
    "India" => "New Delhi",
    "Pakistan" => "Islamabad",
    "Nepal" => "Kathmandu",
    "Sri Lanka" => "Colombo"
);

ksort($country_capitals); 


foreach($country_capitals as $country => $capital){
    echo "Country: $country — Capital: $capital<br>";
}
?>
