<h1>forms and html injection</h1>

<?php
  $oldguess= isset($_POST["guess"]) ? $_POST["guess"] : "";
 ?>

<form method="post">
  <p>
    <label for="guess">Input Guess</label>
    <input type="text" name="guess" id="guess" size="40" value="<?= $oldguess?>">
  </p>

  <input type="submit">

</form>

<?php
/*
this codes violates the php security
user can input html code and mess up the html
*/
?>

<pre>
$_POST
<?php
  print_r($_POST);
 ?>
</pre>
