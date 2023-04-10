<?php

echo "4/8勉強 \n";

$plus = 1 + 2;

echo $plus;
echo "足し算 \n";

$a = 22;
$b = 33;

$ab = $a + $b;

echo "{$ab} 変数の足し算 \n";

$random = random_int(1, 999);

echo "{$random} ランダムの数 \n";

$c = 7 % 3;

echo "{$c} \n";

$d = 2 ** 3;

echo "{$d} \n";

$i = random_int(0, 255);
$j = random_int(0, 255);

// AND
$k = $i & $j;
echo "AND \n";
printf("%x & %x = %x \n", $i, $j, $k);

// OR
$k = $i | $j;
echo "OR \n";
printf("%x | %x = %x \n", $i, $j, $k);

// XOR
$k = $i ^ $j;
echo "XOR \n";
printf("%x ^ %x = %x \n", $i, $j, $k);

// NOT
$k = ~$i;
echo "NOT \n";
printf("~%x = %x \n", $i, $k);

?>