<?php
$bmw = array("name" => "BMW","model" => "X5", "speed" => "120", "doors" => "5", "year" => "2015");
$toyota =  array("name" => "Toyota", "model" => "Camry", "speed" => "180", "doors" => "4", "year" => "2010");
$opel = array("name" => "Opel", "model" => "Astra", "speed" => "150", "doors" => "3", "year" => "2008");

$new_car = array_merge($bmw, $toyota, $opel);
echo "<pre>";

    echo "CAR "
        .$new_car['name']
        ."</br>".$new_car['model']
        ." ".$new_car['speed']
        ." ".$new_car['doors']
        ." ".$new_car['year']
    ;

