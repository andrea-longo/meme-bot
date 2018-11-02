<?php
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
		"Ma varda ti quanto che l'è bifolco, trifolco, superfolco el Cristo Dio porco",
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
		"Te ve sul sporco .......Dio",
		"Dove la metto la benna?",
		"Portatemi le arance...spremute",
		"Te me ghe meso soto acqua el calsetto se the o ghe rovinà te bato come un caco",
		"E l'erba sta alta finche vojo mì",
		"Te si un handicapato nato pal culo ricordate.",
		"Vedito perchè no te ghe a testa perchè te a ghe cagà fora da picenin",
		"Deficiente,deficiente, 1000 volte deficiente",
		"Svejate no ...animale ...bastardo",
		"Questa è  la mia palude",
		"Chela maiala",
		"Domani mecatoooo",
		"So pí veoce mi de ti",
		"Ea fiera dee tonelate dea merda",
		"Dio schifoso cane",
		"Chi è quel mona che sbate le porte",
		"Perchè signore no go la possibilità de smaterializzarme",
		"Sto tornando merde",
		"Oggi ho vinto 30 euro alle macchinette",
		"Po...Po...Porco Dio, Popopo porca Madonna",
		"Dio malato Dio cane",
		"Altro che Maria Vergine, Maria Vacca",
		"Madonna tripla",
		"Orca timonea"

	);

try {

    if($update->message->text == '/comandi') {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "I comandi disponibili sono:"
			. "\nCit - Fornisce una citazione casuale"
			. "\nVideo palazzo pd - palazzo porco dio"
			."\nVideo pompino - pompino con sparo"
			."\nVideo sberla - manifestazione contro i bambini"
			."\nVideo zia gabriella - tanti auguri zia Gabriella"
			."\nVideo 15 e 18 - 15 e 18 quanto fa coglione?"
			."\nVideo di merdah - panzone affannato"
			."\nVideo il motore - barca perde il motore"
    	]);
    }
    else if($update->message->text == 'cit' || $update->message->text == 'Cit') {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $cit[array_rand($cit, 1)]
    	]);
    }
    else if($update->message->text == 'Video palazzo pd') {
		$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
			'chat_id' => $update->message->chat->id,
			'text' => 'https://youtu.be/5NsXGRyrtQI'
		]);
    }
    else if($update->message->text == 'Video pompino') {
		$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
			'chat_id' => $update->message->chat->id,
			'text' => 'https://youtu.be/RInZ4FB-RE4'
		]);
    }
	else if($update->message->text == 'Video sberla') {
		$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
			'chat_id' => $update->message->chat->id,
			'text' => 'https://youtu.be/s6cQgvEEs8E'
		]);
    }
	else if($update->message->text == 'Video zia gabriella') {
		$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
			'chat_id' => $update->message->chat->id,
			'text' => 'https://youtu.be/Qa-q1l9t7jo'
		]);
    }
	else if($update->message->text == 'Video 15 e 18') {
		$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
			'chat_id' => $update->message->chat->id,
			'text' => 'https://youtu.be/Iybaa-AZtus'
		]);
    }
	else if($update->message->text == 'Video dio merdah') {
		$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
			'chat_id' => $update->message->chat->id,
			'text' => 'https://youtu.be/S8MkXJTMWTQ'
		]);
    }		
	else if($update->message->text == 'Video il motore') {
		$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
			'chat_id' => $update->message->chat->id,
			'text' => 'https://youtu.be/36PXfNdYLGk'
		]);
    }
	else if( $update->message->text == 'AaA' ){
		// $user = str_replace("Offendi", "", $update->message->text);
		$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
			'chat_id' => $update->message->chat->id,
			'text' => $update->message->text
		]);
	}
		
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
