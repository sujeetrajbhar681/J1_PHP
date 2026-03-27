<?php
$cars = ["Tesla", "BMW", "Audi", "Ford"];

for($i=0; $i<count($cars); $i++){
    echo $cars[$i] . "<br>";
}

$prices = [
    "Tesla" => 50000,
    "BMW" => 40000,
    "Audi" => 45000
];

foreach($prices as $car => $price){
    echo "$car : $price <br>";
}

array_push($cars, "Honda");
print_r($cars);

array_pop($cars);
print_r($cars);

$newCars = ["Kia", "Hyundai"];
$merge = array_merge($cars, $newCars);
print_r($merge);

$slice = array_slice($merge, 1, 2);
print_r($slice);

print_r(array_keys($prices));
?>