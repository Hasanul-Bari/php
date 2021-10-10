<pre>
POST:
<?php 
    print_r($_POST);
?>

GET:
<?php 
    print_r($_GET);
?>



SESSION:
<?php 
    session_start();
    print_r($_SESSION);
?>


SERVER:
<?php 
    print_r($_SERVER);
?>


</pre>


<form action="index.php" method="post">

<input type="text" name="name">
<input type="email" name="em">

<input type="submit" value="Send">


</form>

<a href="data_insert.php">Data_insert</a>



