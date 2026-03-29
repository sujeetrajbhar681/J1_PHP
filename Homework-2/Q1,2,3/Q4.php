<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <form action="" method="POST">
        Full Name:
        <input type="text" name="name"><br>

        Email:
        <input type="text" name="email"><br>

        Password:
        <input type="password" name="password"><br>

        Confirm Password:
        <input type="password" name="cpass"><br>

        Job Title:
        <input type="text" name="job"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $password = $_POST["password"];
    $cpass = $_POST["cpass"];
    $email = $_POST["email"];
    $job = $_POST["job"];

    // a. Empty check
    if(empty($name) || empty($email) || empty($password) || empty($cpass) || empty($job)){
        echo "<script>alert('All fields are required')</script>";
    }

    // b. Password match
    if($password != $cpass){
        echo "<script>alert('Passwords do not match')</script>";
    }

    // c. Email validation
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Invalid Email')</script>";
    }

    // d. Insert only if all valid
    if(!empty($name) && !empty($email) && !empty($password) && !empty($cpass) && !empty($job) && $password == $cpass && filter_var($email, FILTER_VALIDATE_EMAIL)){

        // Check email exists
        $check = $conn->query("select * from users where email='$email'");
        
        if($check->num_rows > 0){
            echo "<script>alert('Email already exists')</script>";
        } else {

            // Hash password
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            // Insert data
            $sql = $conn->query("insert into users (name, email, password, job_title) VALUES ('$name','$email','$hashed','$job')");

            if($sql){
                echo "<script>alert('Registration Successful')</script>";
            } else {
                echo "<script>alert('Error inserting data')</script>";
            }
        }
    }
}
?>