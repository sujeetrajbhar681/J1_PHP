<?php
$file = "students.txt";

if(file_exists($file)){
    unlink($file);
    echo "File deleted successfully";
} else {
    echo "File not found";
}
?>