<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Phone: <input type="text" name="phone"><br>

    Car Brand:
    <select name="brand">
        <option>Toyota</option>
        <option>Ford</option>
        <option>Tesla</option>
    </select><br>

    <button type="submit">Submit</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $brand = $_POST["brand"];

    echo "Hello, $name. Your phone number is $phone and your preferred car brand is $brand";
}
?>

</body>
</html>