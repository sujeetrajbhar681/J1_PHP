<?php
$servername = "localhost";
$username = "root";
$password  = "";
$dbname = "employee_db";

($conn = mysqli_connect($servername, $username, $password, $dbname));
if(!$conn){
    echo "Connection fail";
}else{
    echo "Connected";
}
?>