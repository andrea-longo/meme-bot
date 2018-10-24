<?php

/*
* This file is part of GeeksWeb Bot (GWB).
*
* GeeksWeb Bot (GWB) is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License version 3
* as published by the Free Software Foundation.
* 
* GeeksWeb Bot (GWB) is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.  <http://www.gnu.org/licenses/>
*
* Author(s):
*
* © 2015-2018 Kasra Madadipouya <kasra@madadipouya.com>
*
*/
require 'vendor/autoload.php';

$client = new Zelenin\Telegram\Bot\Api('524326842:AAHKIV8D06niOlDE84sOR0k9DitpGN-INFA');
$url = ''; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));

$cit = array(
    "15 e 18 quanto fa coglione?",
    "Maleducata troia dea Madonna."
);

try {

    if($update->message->text == '/citazione')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
        	'text' => $cit[array_rand($cit, 1)[0]];
     	]);
    }


} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
