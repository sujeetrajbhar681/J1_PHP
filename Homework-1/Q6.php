<?php

$str1 = 'Tesla Car';
$str2 = "BMW Car";

echo $str1 . " costs high <br>";

$text = "This is Tesla car";
echo strpos($text, "Tesla") . "<br>";

echo str_replace("Tesla", "BMW", $text) . "<br>";

echo strlen($text) . "<br>";
echo strtolower($text) . "<br>";
echo strtoupper($text) . "<br>";
echo trim("  Hello  ") . "<br>";
echo substr($text, 0, 7);
?>