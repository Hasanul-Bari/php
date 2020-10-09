
<h1>HTML field types...</h1>
<p>
Taken from
<a href="https://www.w3schools.com/html/html_form_input_types.asp" target="_blank">
https://www.w3schools.com/html/html_form_input_types.asp</a></p>

<form method="post" action="index.php">

  Select your favorite color: <input type="color" name="favcolor" value="#0000ff"><br/>

  Birthday: <input type="date" name="bday" value="2020-10-09"><br/>

  E-mail: <input type="email" name="email"><br/>

  Quantity (between 1 and 5): <input type="number" name="quantity" min="1" max="5"><br/>

  Add your homepage: <input type="url" name="homepage"><br>

  Transportation: <input type="flying" name="saucer"><br>




   <input type="submit" name="dopost" value="Submit"/>
   <input type="button"
    onclick="location.href='http://www.wa4e.com/'; return false;"
    value="Escape">
   </p>
</form>


<pre>
$_POST:
<?php
  print_r($_POST);
 ?>
</pre>
