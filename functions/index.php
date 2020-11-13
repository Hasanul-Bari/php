<h1>Functions</h1>


<?php

    //built-in Functions

    echo strrev(" dlrow olleH"), "<br>";
    echo str_repeat("Hip ", 2),  "<br>";
    echo strtoupper("hooray!"),  "<br>";
    echo strlen("intro"),  "<br>";
    echo "<br>";



    //defining your own Functions

    function greet() {
      print "Hello\n";
    }

    greet();
    greet();

    echo "<br>";



    //return values

    function greeting(){
      return "Hello";
    }

    print greeting()." Hasan ";
    print greeting()." Hasanul";

    echo "<br>";
    echo "<br>";

    //arguments
    function howdy($lang){
      if($lang=="es")
        return "Hola";
      else if($lang=="fr")
        return "Bonjour";

      return "Hello";
    }

    print howdy("es")." Hasan ";
    print howdy("fr")." Hasan ";
    print howdy("ën")." Hasan ";

    echo "<br>";
    echo "<br>";



    //default arguments
    function howdy2($lang="es"){
      if($lang=="es")
        return "Hola";
      else if($lang=="fr")
        return "Bonjour";

      return "Hello";
    }

    print howdy2("es")." Hasan ";
    print howdy2("fr")." Hasan ";
    print howdy2("en")." Hasan ";
    print howdy2()." Hasan ";

    echo "<br>";
    echo "<br>";


    //call by value

    function double($alias)
    {
      $alias=$alias*2;
      return $alias;
    }

    $val=10;
    $dval=double($val);

    echo "value=$val Doubled=$dval", "<br>";



    //call by reference

    function triple(&$realthing)
    {
      $realthing=$realthing*3;
    }

    $val=10;
    triple($val);

    echo "Triple=$val ", "<br>";










 ?>
