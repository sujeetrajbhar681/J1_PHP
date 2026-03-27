<?php
$cars = [
    "Model S" => "Tesla",
    "Mustang" => "Ford",
    "Corolla" => "Toyota",
    "Civic" => "Honda",
    "BMW X5" => "BMW"
];

foreach($cars as $model => $brand){
    echo "Car Model: $model - Brand: $brand <br>";
}
?>