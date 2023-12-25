<?php
/**
 * 當物件被破壞或腳本停止或退出時，將呼叫析構函數。
 * 如果您建立__destruct()函數，PHP 將在腳本末尾自動呼叫該函數。
 * 請注意，析構函數以兩個底線 (__) 開頭！
 * 下面的範例有一個 __construct() 函數，當您從類別建立物件時自動呼叫該函數，以及一個在腳本末尾自動呼叫的 __destruct() 函數：
 * 
 * * */
class FruitDestruct {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

$apple = new Fruit("Apple", "red");
?>