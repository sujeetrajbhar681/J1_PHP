<?php
session_start();
include 'db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $pass=$_POST["pass"];

    $sql=$conn->prepare("select password from emp where name=?");
    $sql->bind_param("s", $name);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($password);

    if($sql->fetch() && password_verify($pass, $password)){
        $_SESSION["name"]=$name;
        header("Location: Home.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name:
        <input type="text" name="name"><br>
        Password:
        <input type="text" name="pass"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>