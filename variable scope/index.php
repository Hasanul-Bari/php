<h1>Variable scope</h1>


<?php

    //normal scope (isolated)

    function tryZap(){
      $val=100;
    }

    $val=10;
    tryZap();
    echo "Tryzap= $val","<br>";

    //exceptional : $_GET, $_POST, $_SESSION



    //normal scope (isolated)

    function doZap(){
      global $val;
      $val=100;
    }

    $val=10;
    doZap();
    echo "Dozap= $val","<br>";
    //need to be carefull



    //checking if a function exits or not
    if(function_exists("array_combine")){
      echo "function exists", "<br>";
    }
    else{
      echo "function does not exist", "<br>";
    }


    

    phpinfo();

 ?>
