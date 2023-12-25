<?php

/**
 * 建構函式允許您在建立物件時初始化物件的屬性。
 * 如果您建立一個__construct()函數，那麼當您從類別建立物件時，PHP 將自動呼叫該函數。
 * 請注意，建構函數以兩個底線 (__) 開頭！
 * 我們在下面的範例中看到，使用建構函式可以使我們免於呼叫 set_name() 方法，從而減少程式碼量：
 * 
 * * */
class FruitConstruct {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new FruitConstruct("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>