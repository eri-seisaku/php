<?php
//
interface インターフェースA
{
    public function メソッドA();
}
//
interface インターフェースB
{
    public function メソッドB(int $i);
}

//
class Hoge implements インターフェースA, インターフェースB
{
    //
    public function メソッドA()
    {
        echo "メソッドA \n";
    }

    //
    public function メソッドB(int $i)
    {
        echo "メソッドB {$i} \n";
    }
}

//
$obj = new Hoge();
var_dump($obj);
$obj->メソッドA();
$obj->メソッドB(999);
?>