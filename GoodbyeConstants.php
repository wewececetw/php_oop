<?php

/**
 * 
 * 如果您需要在類別中定義一些常數數據，則類別常數會很有用。
 * 類別常數在類別內部用關鍵字聲明const 。
 * 常量一旦聲明就不能更改。
 * 類別常量區分大小寫。但是，建議以全部大寫字母命名常數。
 * 我們可以透過使用類別名稱後跟作用域解析運算子 ( ::) 後面跟著常數名稱來從類別外部存取常數，如下所示：
 * 
 * * */
class GoodbyeConstants
{
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo GoodbyeConstants::LEAVING_MESSAGE;

/**
 * 
 * self或者，我們可以透過使用關鍵字、後跟範圍解析運算子 ( ::) 和常數名稱來從類別內部存取常數，如下所示：
 * 
 * * */


class Goodbye
{
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";

    function seeyou()
    {
        echo self::LEAVING_MESSAGE;
    }

    public function byebye()
    {
        self::seeyou();
        echo self::LEAVING_MESSAGE;
    }
}


$goodbye = new Goodbye();
$goodbye->byebye();
