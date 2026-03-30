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
     Name:
    <input type="text" name="name"><br>
    Email:
    <input type="text" name="email"><br>
    Password:
    <input type="text" name="password"><br>
    <button type="submit">Submit</button>
   </form>
</body>
</html>



<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=password_hash($_POST["password"],PASSWORD_DEFAULT);

    $sql=$conn->prepare("insert into emp values(?,?,?,?)");
    $sql->bind_param("isss", $id, $name, $email, $password);

    if($sql->execute()){
        header("Location:Home.php");
    }
}
?>