<?php
$file = "students.txt";

$data = "Amit - B\n";
file_put_contents($file, $data, FILE_APPEND);

echo "Data appended successfully";
?>