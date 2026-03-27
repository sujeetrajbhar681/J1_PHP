<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <form action="" method="POST">
        Name:
        <input type="text" name="name"><br>

        Password:
        <input type="text" name="password"><br>

        Confirm Password:
        <input type="text" name="cpass"><br>

        Email:
        <input type="text" name="email"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $password = $_POST["password"];
    $cpass = $_POST["cpass"];
    $email = $_POST["email"];

    if(empty($name)){
        echo "<script>alert('Name is required')</script>";
    }

    if($password != $cpass){
        echo "<script>alert('Passwords do not match')</script>";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Invalid Email')</script>";
    }
}
?>