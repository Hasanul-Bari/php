<h1>Arrays</h1>

<?php
    $stuff = array("Hi", "There");
    echo $stuff[1], "<br>";

    //key-value
      $stuff = array("Name" => "Hasan" , "Course"=>"WA4E");
      echo $stuff["Course"],"<br>";


    //print array
      $stuff = array("Name" => "Hasan" , "Course"=>"WA4E");
      //method-1
      print_r($stuff);

      echo "<pre>\n";
      print_r($stuff);
      echo "\n</pre>\n";

      //method-2
      var_dump($stuff);

      echo "<pre>\n";
      var_dump($stuff);
      echo "\n</pre>\n";

      //var_dump can print false
      $thing=False;
      echo ("One->\n");
      print_r($thing);
      echo ("Two->\n");
      var_dump($thing);

      echo "<br>";

    //building up an array
    $va= array();
    $va[]="Hello";
    $va[]="World";
    print_r($va);
    echo "<br>";

    $za= array();
    $za["Name"]="Hasan";
    $za["Course"]="WA4E";
    print_r($za);
    echo "<br>";



    //looping through an array
    $stuff = array("Name" => "Hasan" , "Course"=>"WA4E");

    foreach ($stuff as $key => $value) {
      echo "Key= ",$key," val= ",$value,"<br>";
    }
    echo "<br>";



    $stuff=array("Hasanul","Bari");

    foreach ($stuff as $key => $value) {
      echo "Key= ",$key," val= ",$value,"<br>";
    }
    echo "<br>";


    for($i=0; $i<count($stuff);  $i++){
      echo "i=",$i," val=",$stuff[$i],"<br>";
    }
    echo "<br>";





    //Arrays of array


    $products = array(

        //paper will act as key
        "paper"=> array(
          "copier"=>"Copier & Multipurpose",
          "inject"=>"inkjet Printer",
          "laser"=>"Laser Printer",
          "photo"=>"Photographic Paper"
        ),

        "pens"=> array(
          "ball"=>"Ball Point",
          "hilight"=>"Highlighter",
          "marker"=>"Markers"
        ),

        "misc"=>array(
          "tape"=>"Sticky Tape",
          "glue"=>"Adhesives",
          "clips"=>"Paperclips"
        )

    );

    echo $products["pens"]["marker"], "<br>";

    print_r($products);
    echo "<br>";
    echo "<br>";

    var_dump($products);
    echo "<br>";
