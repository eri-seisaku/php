<?php
echo "変数iに1を代入 \n";
$i = 1;
echo "{$i} \n";

echo "\n今までに学習した普通の加算 \n";
$i = $i + 1;
echo "{$i} \n";

echo "\n複合演算子を使って「プラス 1」する \n";
$i += 1;
echo "{$i} \n";

echo "\n加算子を使って「プラス 1」する \n";
++ $i;
echo "{$i} \n";

echo "\n減算子を使って「マイナス 1」する \n";
-- $i;
echo "{$i} \n";

echo "\n複合演算子を使って「マイナス 1」する \n";
$i -= 1;
echo "{$i} \n";

?>