<?php

// 整数型の確認
echo "整数int \n";
$i = 123;
var_dump($i);

// 整数型の最大/最小値の確認
echo "整数型の最大/最小値の確認 \n";
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

// 「最大値」を超えた値はどうなる？
echo "「最大値」を超えた値 \n";
$over_max = PHP_INT_MAX +1;
var_dump($over_max);

// 「最小値」を下回った値はどうなる？
echo "「最小値」を下回った値 \n";
$under_min = PHP_INT_MIN -1;
var_dump($under_min);

?>