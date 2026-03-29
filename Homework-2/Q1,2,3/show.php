<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    include 'db.php';

    $result=$conn->query("select * from employees");

    ?>

    <table border=1; border-collapse=collapse; box-shadow: 0 0 10px gray;>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Position</td>
            <td>Job Title</td>
            <td>Salary</td>
        </tr>

<?php
        while($row=$result->fetch_assoc()){

        ?>

        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["position"] ?></td>
            <td><?php echo $row["job_title"] ?></td>
            <td><?php echo $row["salary"] ?></td>
        </tr>

        <?php } ?>

    </table>
</body>
</html>