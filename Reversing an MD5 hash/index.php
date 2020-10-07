
<!DOCTYPE html>
<head><title>Hasanul Bari MD5</title></head>

<body style="font-family: sans-serif">
  <h1>MD5 cracker</h1>
  <p>
      This application takes an MD5 hash
    of a four digit pin and check all 10,000
    possible four digit PINs to determine the PIN.
  </p>


<pre>Debug Output:
<?php
$ans="Not found";
    if(isset($_GET["md5"])){
      $time_before = microtime(true);

      $md5=$_GET["md5"];
      //echo $md5;

      $c=15;
      $cnt=0;

      $hp=2;

      for($i=0; $i<=9; $i++)
      {
          for($j=0; $j<=9; $j++)
          {
            for($k=0; $k<=9; $k++)
            {
              for($l=0; $l<=9; $l++)
              {
                  $pincombination=$i.$j.$k.$l;

                  $check=hash("md5",$pincombination);
                  $cnt++;

                  if($c>0)
                  {
                      echo "$check $pincombination","<br>";
                      $c--;
                  }

                  if($check==$md5)
                  {
                    $ans=$pincombination;
                    $hp=1;
                    break;
                  }
              }
              if($hp==1)
                break;
            }
            if($hp==1)
              break;
          }
          if($hp==1)
            break;
      }
      echo "Total checks: ", $cnt, "<br>";

      // Compute elapsed time
      $time_after = microtime(true);
      echo "Elapsed time: ", $time_after-$time_before, "<br>";


    }?>
  </pre>



  <p>PIN: <?php echo $ans; ?></p>

  <form>
    <input type="text" name="md5" size="50"
      value=""/>
    <input type="submit" value="Crack MD5"/>
  </form>
  <ul>

  <li><a href="index.php">Reset this page</a></li>

  </ul>

</body>
</html>
