<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="GET">
     email:
    <input type="text" name="email"><br><br>
    password:
    <input type="text" name="password"><br><br>
    Are you Subscribed?
    <input type="checkbox" name="Subscribe" value="yes"><br><br>
    <button type="submit">Submit</button>
   </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] === "GET") {

    $email = $_GET["email"];
    $password = $_GET["password"];
    $subscribe=isset($_GET["Subscribe"]) ? "Yes" : "No";

    echo "Thank you for signing up, $email! You have subscribed: $subscribe.";
}
?>