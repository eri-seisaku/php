<?php

//
echo "論理演算子の確認\n";
var_dump( true && false );
var_dump( true || false );

// ユーザの情報
$age = 20;
$point = 499;

// 「かつ」の場合
echo "\n";
echo "「かつ」の場合\n";
var_dump( ($age >= 20)&&($point >= 500) );

// 「または」の場合
echo "\n";
echo "「または」の場合\n";
var_dump( ($age >= 20)||($point >= 500) );



?>