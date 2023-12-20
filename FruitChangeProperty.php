<?php
/***
 * 那麼，我們可以在哪裡更改 $name 屬性的值呢？那裡有兩個 方法：
 * 2. 類外（透過直接改變屬性值）：
 * 
 * 
 * 
 */
class FruitChangeProperty {
  public $name;
}
$apple = new FruitChangeProperty();
$apple->name = "Apple";

echo $apple->name;
?>