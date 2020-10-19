<h1>Object Inheritance</h1>

<?php
    class Hello {
      protected $lang; // Only accessible in the class
      function __construct($lang) {
        $this->lang = $lang;
      }
      function greet() {
        if ( $this->lang == 'fr' ) return 'Bonjour';
        if ( $this->lang == 'es' ) return 'Hola';
        return 'Hello';
      }
    }

    class Social extends Hello {
      function bye() {
      if ( $this->lang == 'fr' ) return 'Au revoir';
      if ( $this->lang == 'es' ) return 'Adios';
      return 'goodbye';
      }
    }


    $hi = new Social('es');
    echo $hi->greet()."<br>";
    echo $hi->bye()."<br>";

?>



<br><br>Visibilty<br><br>

<?php

    class MyClass
    {
        public $pub = 'Public';
        protected $pro = 'Protected';
        private $priv = 'Private';
        function printHello()
        {
        echo $this->pub."<br>";
        echo $this->pro."<br>";
        echo $this->priv."<br>";
        }
    }

    $obj = new MyClass();
    echo $obj->pub."<br>"; // Works
    //echo $obj->pro."<br>"; // Fatal Error
    //echo $obj->priv."<br>"; // Fatal Error
    $obj->printHello(); // Shows Public, Protected and Private


    class MyClass2 extends MyClass
    {
        function printHello(){
          echo $this->pub."<br>";
          echo $this->pro."<br>";
          //echo $this->priv."<br>"; // Undefined
        }
    }
    echo("--- MyClass2 ---<br>");
    $obj2 = new MyClass2();
    echo $obj2->pub."<br>"; // Works
    $obj2->printHello(); // Shows Public, Protected, Undefined


 ?>



 <br><br>Building an Object from Scratch -> Make a class that has nothing in it<br><br>

 <?php

     $player = new stdClass();
     $player->name = "Hasan";
     $player->score = 0;
     $player->score++;
     print_r($player);

     //normal way
    class Player {
      public $name = "Hasanul";
      public $score = 0;
    }
    $p2 = new Player();
    $p2->score++;
    print_r($p2);

  ?>
