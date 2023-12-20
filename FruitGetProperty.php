<?php
/**
 * 
 * 那麼，我們可以在哪裡更改 $name 屬性的值呢？那裡有兩個 方法：
 * 1. 在類別內部（透過新增 set_name() 方法並使用 $this）：
 * 
 * * */
class FruitGetProperty {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new FruitGetProperty();
$apple->set_name("Apple");

echo $apple->name;
?>