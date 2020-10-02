<h1>Expressions</h1>
<?php

  $x="15"+27;
  echo $x;
  echo "\n";
  echo ($x);
  echo "\n";


  $x=12;
  $y=15+ $x++;
  echo "x is $x and y is $y\n";

  echo "<br>";

//string concatenation
  $a='Hello' . 'World';
  echo $a."\n";

  echo "<br>";

//ternary

  $x=123;
  $msg= $x>100 ? "Large" : "Small";
  echo "First: $msg \n";

  $msg= ($x%2==0) ? "Even" : "Odd";
  echo "Second: $msg \n";

  $msg= ($x%2) ? "Odd" : "Even";
  echo "Third: $msg \n";

  echo "<br>";


// casting
  $a=56; $b=12;
  $c=$a/$b;
  echo "C: $c \n";

  $d="100"+36.25+true;
  echo "D: ". $d. "\n";
  echo "D2: ".(string) $d. "\n";

  $e=(int)9.9-1;
  echo "E: $e\n";

  $f="sam" + 25;
  echo "F: $f\n";

  $g="sam". 25;
  echo "G: $g\n";


  echo "A".false."B\n";  //false becomes nothing
  echo "A".true."B\n";   // true becomes 1




 ?>
