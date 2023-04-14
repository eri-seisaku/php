<?php

echo "普通に比較\n";
$f = 0.3;
var_dump($f === 0.3);

// 0.1+0.2 と 0.3 を比較
echo "\n";
echo "0.1+0.2 と 0.3 を比較\n";
$f = 0.1 + 0.2;
var_dump($f === 0.3);

// 0.1+0.2 と 0.3 をprintfで表示
echo "\n";
echo "0.1+0.2 と 0.3 をprintfで表示\n";
printf("0.1+0.2: %f \n", $f);
printf("    0.3: %f \n", 0.3);

// 0.1+0.2 と 0.3 を高精度のprintfで表示
echo "\n";
echo "0.1+0.2 と 0.3 を高精度のprintfで表示\n";
printf("0.1+0.2: %.32f \n", $f);
printf("    0.3: %.32f \n", 0.3);

// 精度6桁での正しい比較
echo "\n";
echo "0.1+0.2 と 0.3 の現実的な比較\n";
define('FLOAT_PRECISION', 0.000001);
var_dump( abs($f - 0.3) < FLOAT_PRECISION );

?>