<?php
// 絶対値の計算
$i = -100;
$j = abs($i);
echo "{$i} の絶対値は {$j} \n";

//
$f = 3.5;
// 端数の切り捨て
$f_floor = floor($f);
echo "{$f} の端数を切り捨てると {$f_floor} \n";

// 端数の切り上げ
$f_ceil = ceil($f);
echo "{$f} の端数を切り上げると {$f_ceil} \n";

?>