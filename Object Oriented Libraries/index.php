<h1>Object Oriented Libraries</h1>

<?php

//Access “static item” in a class
$x = new DateTime('1999-04-31');
$oops = DateTime::getLastErrors();
print_r($oops);

echo "<br>";
//Access item in an object

$z = new DateTime('2012-01-31');
echo $z->format('Y-m-d')."<br>";


 ?>
