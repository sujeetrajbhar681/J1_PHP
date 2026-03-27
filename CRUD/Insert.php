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
    <br>
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

    $sql=$conn->prepare("insert into emp values(?,?,?)");
    $sql->bind_param('iss', $id, $name, $email);

    if($sql->execute()){
        echo "inserted";
    }else{
        echo "Not inseted";
    }
}

?>