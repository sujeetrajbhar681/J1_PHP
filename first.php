<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    Username:
    <input type="text" name="name"><br><br>

    Address:
    <input type="text" name="address"><br><br>

    Salary:
    <input type="text" name="salary"><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["name"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];

    echo "Username: " . $username . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Salary: " . $salary . "<br>";
}
?>