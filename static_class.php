<?php
//
class Hoge
{
    //
    private static $静的プロパティ;

    //
    public static function 静的なメソッド()
    {
        echo "静的なメソッド \n";
    }

    //
    public static function set静的プロパティ($v)
    {
        static::$静的プロパティ = $v;
    }
    //
    public static function get静的プロパティ()
    {
        return static::$静的プロパティ;
    }
}
//
Hoge::静的なメソッド();
//
Hoge::set静的プロパティ("set string");
echo Hoge::get静的プロパティ() , "\n";


// 演習問題1
class MyTest
{
    //
    public function add($i, $j)
    {
        return $i + $j;
    }

    //
    public function sub($i, $j)
    {
        return $i - $j;
    }
}
// 演習問題2
class MyTest2
{
    //
    private $price;
    private $name;

    // アクセサ
    public function setPrice($i)
    {
        $this->price = $i;
    }
    public function getPrice()
    {
        return $this->price;
    }

    //
    public function setName($s)
    {
        $this->name = $s;
    }
    public function getName()
    {
        return $this->name;
    }
}

?>