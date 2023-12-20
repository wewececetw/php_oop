<?php
/**
 * 定義對象
 * 沒有對象，類別就什麼都不是！我們可以從一個物件建立多個對象 班級。每個物件都具有類別中定義的所有屬性和方法，但是 他們將有不同的財產價值。
 * 對象 類別的成員是使用 new 關鍵字建立的。
 * 在下面的範例中，$apple 和 $banana 是 Fruit 類別的實例：
 * 
 * * */ 
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

?>