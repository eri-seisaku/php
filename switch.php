<?php

//
$i = 1;
switch($i) {
    case 0:
        echo "i は 0 です \n";
        break;

    case 1:
        echo "i は 1 です \n";
        break;

    default:
        echo "i は 0と1 以外です \n";
        break;
}

// PHP 8未満だと特に注意が必要なコード
$i = 2;
switch($i) {
    case '2a':
        echo "i は '2a'です \n";
        break;

    case '2':
        echo "i は '2'(string)です \n";
        break;

    case 2:
        echo "i は 2(int)です \n";
        break;
}

// 演習問題

$i = 123;

if($i <= 100) {
    echo "100以下 \n";
} else {
    echo "100を超える \n";
}

if($i < 50) {
    echo "50未満 \n";
} else if($i < 100) {
    echo "100未満 \n";
} else if($i < 150) {
    echo "150未満 \n";
} else {
    echo "150以上 \n";
}

?>