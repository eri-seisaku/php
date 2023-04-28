<?php
// h()関数の定義
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

//
echo "ブラウザ(User Agent)は " , h($_SERVER['HTTP_USER_AGENT'])  , "です。<br>\n";
echo "接続元IPは " , h($_SERVER['REMOTE_ADDR']) , "です。<br>\n";
echo "本当の接続元IPは " , h($_SERVER['HTTP_X_FORWARDED_FOR']) , "です。<br>\n";

// 接続元IPアドレスの取得
$form_ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';
echo "接続元IPは " , h($form_ip) , "です。<br>\n";
?>