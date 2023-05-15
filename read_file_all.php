<?php
// ファイル名の把握
$file_name = __FILE__;

// ファイル全体の読み込み
$file_string = file_get_contents($file_name);

// 出力
var_dump($file_string);

?>