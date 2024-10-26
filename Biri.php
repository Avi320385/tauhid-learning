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
        price <input type="number" name="price"><br>
        quantity <input type="number" name="quantity"><br>
        quality <input type="text" name="quality"><br>
       
        <button type="submit">Submit</button>


    </form>
</body>
</html>

<?php
include './page1.php';
$obj=new BiriInfo;
$obj->insert(); 
if($obj){
    header("Location:Fanpage.php");
}
?>