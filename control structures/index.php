<h1>Control Structure</h1>

<?php
    $ans=42;

    if($ans==42)
      print "Hello World\n";
    else
      print "Wrong answer\n";


   //while loop
   echo "<br>";
    $fuel=10;
    while($fuel>1){
        echo "Vroom\n";
        $fuel=$fuel-1;
    }


    //do-while
    echo "<br>";
    $count=1;
    do{
      echo "$count times 5 is: ". $count*5;
      echo "\n";
    }while(++$count<=5);


    //for loop
    echo "<br>";

    for($count=1; $count<=6; $count++){
      echo "$count times 6 is: ". $count*6;
      echo "\n";
    }


    //break
    echo "<br>";

    for($count=1; $count<=600; $count++){
      if($count==5)
        break;

      echo "count : $count\n";
    }
    echo "done\n";


    //continue
    echo "<br>";

    for($count=1; $count<=10; $count++){
      if($count%2==0)
        continue;

      echo "count : $count\n";
    }
    echo "done\n";

 ?>
