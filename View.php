

<?php

include './page1.php';
error_reporting(false);
$obj=new View();
$obj->selctAll();
foreach ($obj->data as $data) { ?><br>
<h2>Name: <?php echo $data->name; ?></h2>
<h2>Price:<?php echo $data->price; ?></h2>
<h2>Quantity:<?php echo $data->quantity; ?></h2>
<a href="Delete.php?id=<?php echo $data->id; ?>">delete</a>

<?php } ?>