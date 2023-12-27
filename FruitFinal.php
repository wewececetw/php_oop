<?php

/***
 * 
 * 以下範例展示如何防止方法重寫
 */
class FruitFinal
{
    final public function intro()
    {
        // some code
    }
}

class Strawberry extends FruitFinal
{
    // will result in error
    public function intro()
    {
        // some code
    }
}

/**
 * 
 * 此final 關鍵字可用於防止類別繼承或防止方法重寫。
 * 以下範例顯示如何防止類別繼承：
 * 
 * * */

final class FruitFinal
{
    // some code
}

// will result in error
class Strawberry extends FruitFinal
{
    // some code
}
