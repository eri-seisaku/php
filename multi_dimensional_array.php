<?php
// 配列の作成
$array = [
    [
        'key1' => 1,
        'key2' => 2,
        'key3' => 3,
    ],
    [
        'key1' => 11,
        'key2' => 22,
        'key3' => 33,
    ],
    [
        'key1' => 111,
        'key2' => 222,
        'key3' => 333,
    ],
];
//
var_dump($array);

// 外側の配列に対する繰り返しの処理
foreach($array as $key => $value) {
    //
    echo "{$key}番目の配列 \n";

    // 「配列の中に入っている配列」に対する繰り返しの処理
    foreach($value as $k => $v) {
        // 中身の出力
        echo "{$k} : {$v} \n";
    }
    //
    echo "\n";
}
?>