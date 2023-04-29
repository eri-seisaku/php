<?php

class クラス名
{
    //
    private $変数;

    public function 関数()
    {
        // 処理
        echo "メソッドの処理 \n";
    }

    // アクセサ
    public function set変数($v)
    {
        $this->変数 = $v;
    }
    //
    public function get変数()
    {
        return $this->変数;
    }
}

// クラスからインスタンス（オブジェクト）を作ってみる
$obj = new クラス名();
var_dump($obj);
$obj->関数(); // メソッドを呼び出す
// echo $obj->変数 , "\n"; // 変数を読む：これはエラーになる

//
$obj->set変数('data');
echo $obj->get変数() , "\n";
?>