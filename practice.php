<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name:<input type="text" name="name"><br>
        Age:<input type="number" name="age"><br>
        Adress:<input type="text" name="adress"><br>
        Phone-Number:<input type="number" name="number"><br>
        <button type="submit">submit</button>


    </form>
</body>
</html>
<?php
include './page1.php';
$obj=new InsertData;
$obj->insert();
if($obj){
    header("Location:Career.php");
}
?>