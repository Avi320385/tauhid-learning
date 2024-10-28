<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Name <input type="text" name="name"><br>
    Employee <input type="number" name="employee"><br>
    Position <input type="text" name="position"><br>
    Salary <input type="number" name="salary"><br>
    <button type="register">Register</button>
    </form>
</body>
</html>

<?php
include './WorkerProfile.php';
$obj=new WorkerInfo;
$obj->insert(); 
if($obj){
    header("Location:WorkerProfile.php");
}
?>