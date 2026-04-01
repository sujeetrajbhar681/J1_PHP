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
    <input type="text" name="id"><br>
     Product Name:
    <input type="text" name="pname"><br>
    Product Category:
    <input type="text" name="p_category"><br>
    Product Quantity:
    <input type="text" name="p_quantity"><br>
    Price:
    <input type="text" name="price"><br>
    <button type="submit">Submit</button>
   </form>
</body>
</html>



<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $id=$_POST["id"];
    $pname=$_POST["pname"];
    $p_category=$_POST["p_category"];
    $p_quantity=$_POST["p_quantity"];
    $price=$_POST["price"];

    $sql=$conn->prepare("insert into product values(?,?,?,?,?)");
    $sql->bind_param("issid", $id, $pname, $p_category, $p_quantity, $price);

    if($sql->execute()){
        header("Location:Home.php");
    }
}
?>