<!DOCTYPE html>
<html>
<body>

<form method="GET">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>

    Agree:
    <input type="checkbox" name="agree" value="yes"><br>

    <button type="submit">Submit</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $user = $_GET["username"];

    if(isset($_GET["agree"])){
        echo "Welcome, $user. You have agreed to the terms.";
    } else {
        echo "Welcome, $user. You have not agreed to the terms.";
    }
}
?>

</body>
</html>