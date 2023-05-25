<?php
// 課題

$file = fopen("FizzBuzzFile.txt", "w");

if($file) {
    for($i = 1; $i <= 100; ++$i) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            fwrite($file, "FizzBuzz \n");
        } else if($i % 3 === 0) {
            fwrite($file, "Fizz \n");
        } else if($i % 5 === 0) {
            fwrite($file, "Buzz \n");
        } else {
            fwrite($file, "{$i} \n");
        }
    }

    fclose($file); // ファイルを閉じる
}




?>