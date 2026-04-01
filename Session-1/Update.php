<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="POST">
     ID:
    <input type="text" name="id">
    <br>
    Product Name:
    <input type="text" name="pname">
    <br>
    <button type="submit">Submit</button>
   </form>
</body>
</html>

<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $id=$_POST["id"];
    $pname=$_POST["pname"];

    $sql=$conn->prepare("update product set pname=? where id=?");
    $sql->bind_param('si', $pname, $id);

    if($sql->execute()){
        header("Location:Home.php");
    }
}

?>