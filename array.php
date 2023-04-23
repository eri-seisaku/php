<?php
// 要素1つの配列を作成
$awk = [ 123 ];
var_dump($awk);

// 要素3つの配列を作成
$awk2 = [ 999, "Hello", 3.14 ];
var_dump($awk2);

// 要素1つの中身を見たり書き換えたりする
var_dump( $awk[0] );

// 書き換え
$awk[0] = 654321;
var_dump( $awk[0] );

// $awkに要素を追加

echo "要素を追加 \n";

$awk[] = 1.41421356;
$awk[] = "string value";
var_dump($awk);

?>