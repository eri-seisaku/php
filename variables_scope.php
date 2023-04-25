<?php
// 変数への代入
$a = 10;
// 変数の使用：使える
echo "global:a is {$a} \n";

// 関数の宣言
function myFunc()
{
    // 変数への代入
    $b = 999;
    // 変数の使用：使える
    echo "in function:b is {$b} \n";

    // 変数の使用：使えない
    echo "in function:a is {$a} \n";
}
// 関数の呼び出し
myFunc();

// 変数の使用：使えない
echo "global:b is {$b} \n";
?>