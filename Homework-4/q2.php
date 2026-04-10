<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    Course: <input type="text" name="course"><br>
    <button type="submit">Submit</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    header("Location: Registration.php");
    exit();
}
?>

</body>
</html>