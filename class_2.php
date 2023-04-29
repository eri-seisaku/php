<?php

class MyClass
{
    // オブジェクト定数の宣言
    const HOGE = 'string';

    // コンストラクタ：構築する
    public function __construct()
    {
        echo "コンストラクタが動いた!! \n";
    }

    // デストラクタ：破壊する
    public function __destruct()
    {
        echo "デストラクタが動いた!! \n";
    }
}
// オブジェクト定数を使ってみる
var_dump( MyClass::HOGE );

// インスタンス（オブジェクト）を作成する
$obj = new MyClass();
?>