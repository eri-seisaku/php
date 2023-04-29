<?php
// バッファリング開始
ob_start();
// セッション開始
session_start();

// h()関数の定義
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

// セッションから数値を読み込む
$counter = $_SESSION['counter'] ?? 1;

// 出力
echo "セッション)あなたがこのサイトを訪れたのは " , h( strval($counter) ) , "回目ですね";

// セッションに設定する値を作成する
$next_counter = $counter + 1;

// セッションに値を設定する
$_SESSION['counter'] = $next_counter;

// バッファリング終了と出力
ob_end_flush();

?>