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
    Name:
    <input type="text" name="name">
    <br>
    Email:
    <input type="text" name="email">
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

    $sql=$conn->prepare("update emp set name=?, email=? where id=?");
    $sql->bind_param('ssi', $name, $email, $id);

    if($sql->execute()){
        echo "updated";
    }else{
        echo "Not updated";
    }
}

?>