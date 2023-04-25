<?php
declare(strict_types=1); // 厳格な型　モード

// 数字がstringなのでエラーになる
$i = random_int('1', '999');
echo "{$i} \n";

// 数字がintなので成功する
$i = random_int(1, 999);
echo "{$i} \n";

?>