<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
       name:
         <input type="text" name="name"><br><br>
         age:
            <input type="text" name="age"><br><br>
            <select name="Gender" id="">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">other</option>
            </select>
            <br>
            <button type="submit">Submit</button>

    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["Gender"];

    echo "Hello, $username! You are $age years old and identify as $gender.";
}
?>