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
        Type <input type="text" name="type"><br>
        Salary <input type="number" name="salary"><br>
        Quality <input type="text" name="quality"><br>
        <button type="submit">submit</button>


    </form>
</body>
</html>
<?php
include './page1.php';
$obj=new CarerInfo;
$obj->insert();  
if($obj){
    header("Location:Biri.php");
}
?>