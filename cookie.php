<?php
// バッファリング開始
ob_start();

// h()関数の定義
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

// Cookieから数値を読み込む + 型をintに変換
$counter = intval($_COOKIE['counter'] ?? 1);

// 出力
echo "あなたがこのサイトを訪れたのは " , h( strval($counter) ) , "回目ですね。";

// Cookieに設定する値を作成する
$next_counter = strval($counter + 1);

// Cookieに値を設定する
setcookie('counter', $next_counter);

// バッファリング終了と出力
ob_end_flush();

?>