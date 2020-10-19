<h1>Creating object</h1>

<?php
  class Person{

    public $fullname = false;
    public $givenname = false;
    public $familyname = false;
    public $room = false;

    function get_name(){
      if($this->fullname!==false)
          return $this->fullname;
      if($this->familyname!== false && $this->givenname!==false){
        return $this->givenname." ".$this->familyname;
      }
      return false;
    }

  }

  $hasan=new person();
  $hasan->fullname="Hasanul Bari";
  $hasan->room="4429NQ";

  $chuck = new Person();
  $chuck->familyname = "Severance";
  $chuck->givenname = "Chuck";
  $chuck->room = '3439NQ';

  print $hasan->get_name() . "<br>";
  print $chuck->get_name() . "<br>";



 ?>
