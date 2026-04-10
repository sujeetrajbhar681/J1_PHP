<?php
$file = "students.txt";

$data = "Rahul - A\n";
file_put_contents($file, $data);

echo "Data written successfully";
?>