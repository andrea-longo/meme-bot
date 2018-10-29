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

$token=getenv('TOKEN_VAR');
$client = new Zelenin\Telegram\Bot\Api($token);
$url = ''; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));

$cit = array(
   	"15 e 18 quanto fa coglione?",
    	"Chea maleducata troia dea Madonna",
	"Te odio Cristo, mori Dio can",
	"Che metodo bifolco de finire ea setimana",
	"Dio merdah",
	"Vara chi che ga i schei",
	"Qua ghe voe satana Dio can",
	"E ti cossa spetito?",
	"Mi no vegno tajartea no de sicuro",
	"Palazzo Porco Dio", 
	"Paghei a multa i marochini Dio can",
	"Xe ea parte mia chea là",
	"Me toca infetarlo de biasteme",
	"Dio bifolco,trifolco,superfolco",
	"Dove xeo el classon su sto merda de camion Dio bastardo",
	"Dio bestia",
	"Pronto per ripartire?",
	"Ga i spasmi",
	"E mi me meto el casco",
	"Ero Giulia?",
	"40 anni el ga durà porco Dio",
	"Ció Art Atachake",
	"In boca ai altri te fa schifo",
	"Te tiro un sciafon che te impituro su pal muro",
	"Sta alto co chea cazioea Dio can",
	"Te ve sul sporco.......Dio",
	"Dove la metto la benna?",
	"Portatemi le arance...spremute",
	"Te me ghe meso soto acqua el calsetto se the o ghe rovinà te bato come un caco",
	"E l'erba sta alta finche vojo mì",
	"Te si un handicapato nato pal culo ricordate.",
	"Vedito perchè no te ghe a testa perchè te a ghe cagà fora da picenin",
	"Deficiente,deficiente, 1000 volte deficiente",
	"Svejate no...animale...bastardo",
	"Questa è  la mia palude",
	"Chela maiala",
	"Domani mecatoooo",
	"So pí veoce mi de ti",
	"Ea fiera dee tonelate dea merda",
	"Dio schifoso cane",
	"Chi è quel mona che sbate le porte"
);

try {

    if($update->message->text == '/help')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "I comandi disponibili sono:\nCit - Fornisce una citazione casuale"
    		]);

    }
    else if($update->message->text == 'cit' || $update->message->text == 'Cit'){
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $cit[array_rand($cit, 1)]
    		]);
    }
    else if($update->message->text == 'AaA'){
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
		'chat_id' => $update->message->chat->id,
		'text' => 'https://youtu.be/s1w7kSvTWjk'
	]);
    }
		
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
