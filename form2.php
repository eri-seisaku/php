<?php
// h()関数の定義
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

// HTML formから入ってくる情報の一覧
$html_form_params = [
    "pw" => "パスワード",
    "radio_a" => "ラジオボタン",
    "check" => "チェックボックス",
    "sele" => "セレクトボックス",
    "tarea" => "テキストエリア",
    "hide" => "隠れた入力(hidden)",
];

// HTML formからの情報を取得する
$datum = []; // データを入れる領域の確保と初期化
// データ取得処理
foreach($html_form_params as $name => $type) {
    $datum[$name] = $_POST[$name] ?? "";
}

// 入力データの確認
// XXX 今回は一端、var_dumpでデータの確認だけ
var_dump($datum);
?>