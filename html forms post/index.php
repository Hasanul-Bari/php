<h1>HTML forms with post method</h1>

<form method="post">

  <p>
    <label for="guess">Input Guess</label>
    <input type="text" name="guess" id="guess">
    <input type="submit">

  </p>

</form>


<pre>
$_POST
<?php
  print_r($_POST);
 ?>
</pre>


<pre>
$_GET
<?php
  print_r($_GET);
 ?>
</pre>
