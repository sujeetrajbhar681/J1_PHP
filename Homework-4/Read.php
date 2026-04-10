<?php
$file = "students.txt";

if(file_exists($file)){
    $data = file_get_contents($file);
    echo nl2br($data);
} else {
    echo "File not found";
}
?>