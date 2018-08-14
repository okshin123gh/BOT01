<?php

//Composerでインストールしたライブラリを一括読込
require_once__DIR__.'/vendor/autoload.php';

//アクセストークンを使いCuleHTTPClientをインスタンス化
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(getenv('CHANNEL_ACCESS_TOKEN'));

//CurlHTTPClientとシークレットを使いLINEBotをインスタンス化
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => getenv('CHANNEL_SECRET')]);

//LINE Messaging APIがリクエストに付与した署名を取得
$signature = $_SERVER['HTTP_' . \LINE\LINEBot\Constant\HTTPHeader :: LINE_SIGNATURE];

//署名が正当がチェック。正当であればリクエストをパースし配列へ
$events = $bot->parseEventRequest(file_get_contents('php://input'),$signature);

//配列に格納された各イベントをループ処理
foreach ($events as $event){
	//テキストを返信
	$bot->replyText($event->getReplyToken(), 'TextMessage');
}

?>

