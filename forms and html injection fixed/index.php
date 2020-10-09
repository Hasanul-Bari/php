<h1>forms and html injection fixed</h1>

<?php
  $oldguess= isset($_POST["guess"]) ? $_POST["guess"] : "";
 ?>

<form method="post">
  <p>
    <label for="guess">Input Guess</label>
    <input type="text" name="guess" id="guess" size="40" value="<?=htmlentities($oldguess)?>">
  </p>

  <input type="submit">

</form>

<?php
/*
fixed with htmlentities
*/
?>

<pre>
$_POST
<?php
  print_r($_POST);   // still messed up here
 ?>
</pre>
