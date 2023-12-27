<?php

/**
 * OOP 中的繼承 = 當一個類別衍生於另一個類別。
 * 子類別將從父類別繼承所有公共和受保護的屬性和方法。此外，它還可以有自己的屬性和方法。
 * 繼承類別是使用extends 關鍵字定義的。
 * 在下面的範例中，我們看到一切正常！protected 這是因為我們從衍生類別內部呼叫 方法 (intro())。
 * 
 * * */
class FruitInheritance
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends FruitInheritance
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
        // Call protected method from within derived class - OK
        $this->intro();
    }
}

$strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
