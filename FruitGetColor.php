<?php
/**
 * 
 * 在下面的範例中，我們在 Fruit 類別中新增另外兩個方法，用於設定和 取得 $color 屬性：
 * * */
class FruitGetColor {
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
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new FruitGetColor();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>