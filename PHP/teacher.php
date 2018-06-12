<?php
class slime {
  public $type = "スライム";
  public $nanika = "";
  public $hp=3;
 
  function __construct($nanika) {
      $this->shurui = $nanika;
  }
 
 function name() {
      return $this->type . $this->shurui;
  }
 
  function attack($characters_name){
     print $this->name() . "が" . $characters_name . "を攻撃して" . $this->hp . "ダウン。";
  }
}

$slime_a = new slime("A");
$slime_a -> attack("boss");
