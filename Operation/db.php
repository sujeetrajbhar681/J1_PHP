<?php
$servername = "localhost";
$username = "root";
$password  = "";
$dbname = "j1_php";

($conn = mysqli_connect($servername, $username, $password, $dbname));
if(!$conn){
    echo "Connection fail";
}else{
    echo "Connected";
}
?>