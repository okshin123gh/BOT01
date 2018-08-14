<?php

//Composerでインストールしたライブラリを一括読込
require_once__DIR__.'/vendor/autoload.php';

//POSTメソッドで渡される値を取得、表示
$inputString = file_get_contents('php://input');
error_log($inputString);

?>

