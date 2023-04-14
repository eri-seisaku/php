<?php
/* 定数の定義 */
define('DEF_INT', 123); // 整数
define('DEF_FLOAT', 3.14); // 少数
define('DEF_STRING', "string"); // 文字列

// 定数の使用
var_dump(DEF_INT);
var_dump(DEF_FLOAT);
var_dump(DEF_STRING);

// 演習問題
$num_string = "999";
$num_int = 999;
var_dump($num_string);
var_dump($num_int);

// 定数の定義
define('TEST_FLOAT', 1.23);
var_dump(TEST_FLOAT);

?>