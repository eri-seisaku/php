<?php
// 二重ループ

for($i = 1; $i <= 9; ++$i) {
    //
    echo "{$i}の段 \n";
    //
    for($j = 1; $j <= 9; ++$j) {
        $k = $i * $j;
        echo "{$i} * {$j} = {$k} \n";
    }
    //
    echo "\n";
}

?>