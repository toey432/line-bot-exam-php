<?php



require "vendor/autoload.php";

$access_token = 'sfUxAlFsOlqfGXU+7rdBdX0lJCae//MbAZQ/P3OIPP1yPWHoR/FN8reIPgLWZc6vq5oxGIHggv/lJEY9ElU3HSCZaRJchqKwdaMBQfDo592hT+iYkJvK1SV1Tz2GU7dnd7T6ZbZUQ908ZWG9ciH84gdB04t89/1O/w1cDnyilFU=';

$channelSecret = '3e901b4b20a7716f8dd6d71a6efab893';

$pushID = 'U1570bac20a275efc7b00f4194126c265';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







