<h1>Array Functions</h1>


<?php
    $za=array();
    $za["name"]="Hasan";
    $za["course"]="WA4E";


    if(array_key_exists("course",$za)){
      echo "Course exists\n";
    }
    else{
      echo "Course does not exist\n";
    }

    echo "<br>";


    echo isset($za["name"]) ? "Name is set\n" : "Name is not set\n";
    echo "<br>";
    echo isset($za["addr"]) ? "Addr is set\n" : "Addr is not set\n";
    echo "<br>";


    //null coalescing operator
    $name=$za["name"] ?? "Not found";
    $addr=$za["addr"] ?? "Not found";

    echo ("Name =$name\n");
    echo ("Addr =$addr\n");
    echo "<br>";



    echo "Count: ".count($za) ."<br>";

    if(is_array($za)){
      echo '$za is an array' ."<br>";
    }
    else {
      echo '$za is not an array'."<br>";
    }


    ///sorting

    $za["topic"]="PHP";

    echo "<pre>";
    print_r($za);
    echo "</pre><br>";


    //sort($za);
    //ksort($za);
    asort($za);


    echo "<pre>";
    print_r($za);
    echo "</pre><br>";



    //Exploding arrays
    //spliting sentence

    $inp="This is a sentence with seven words";
    $tmp=explode(" ",$inp);

    echo "<pre>";
    print_r($tmp);
    echo "</pre><br>";





















?>
