<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hasanul Bari - PHP</title>
  </head>
  <body>

      <h1>Hasanul Bari - PHP</h1>

      <p>The SHA256 hash of "Hasanul Bari" is
        <?php
            print hash('sha256', 'Hasanul Bari');
         ?>
      </p>

      <pre>ASCII ART:

    **       **
    **       **
    **       **
    ***********
    **       **
    **       **
    **       **
</pre>

      <a href="check.php">Click here to check the error setting</a>
      <br/>
      <a href="fail.php">Click here to cause a traceback</a>


  </body>
</html>
