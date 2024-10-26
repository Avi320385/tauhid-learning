<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Team <input type="text" name="team"><br>
    Ucl <input type="number" name="ucl"><br>
    League <input type="number" name="league"><br>
    Country <input type="text" name="country"><br>
    <button type="submit">login</button>
    </form>
</body>
</html>

<?php
include './page1.php';
$obj=new FanInfo;
$obj->insert();
header("Location:Final.php");
?>
