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
		"Questa è la mia palude",
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
		"Orca timonea",
		"Come se chiama, non me viene per ora Bonfiglio",
		"Matona tachina",
		"Me toca ndare magnare chea merda de pure",
		"Ridame a torcia Dio can",
		"Sloggo devo andare dal parrucchiere"
	);

	$offese = array(
		"te bato come un caco",
		"deficiente,deficiente, 1000 volte deficiente",
		"sei peggio di Boaretto",
		"chel madre che si sta",
		"cauterio",
		"lazaròn",
		"te dago un sciafon che te impituro su pal muro",
		"facia da merda",
		"to pare se ciama Aronne ero?",
		"bifolco to pare, putana to mare",
		"ti mai a mi, mi sempre a ti",
		"ti scuoio dio merda",
		"te si un handicappato nato pal culo",
		"spara Dio can",
		"quanto sei disabile mentalmente",
		"devi andare avanti, sono solo contro due, e uno è un tank./nChe cura anche",
		"te ghe da morire di fronte gli applausi dea to fameja"
	);

try {

    if($update->message->text == 'Comandi') {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "I comandi disponibili sono:"
			."\n ■ Offendi <nome> - Offesa random"
			."\n ■ Cit - Fornisce una citazione casuale"
			."\n ■ Video - Fornisce lista video"
    	]);
    }
	else if($update->message->text == 'Video'){
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "I video disponibili sono:"
			."\n ■ Video palazzo pd - Palazzo porco dio"
			."\n ■ Video pompino - Pompino con sparo"
			."\n ■ Video sberla - Manifestazione contro i bambini"
			."\n ■ Video zia gabriella - Tanti auguri zia Gabriella"
			."\n ■ Video 15 e 18 - 15 e 18 quanto fa coglione?"
			."\n ■ Video di merdah - Panzone affannato"
			."\n ■ Video il motore - Barca perde il motore"
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
	else if( strpos($update->message->text , 'Offendi') !== FALSE ){
		$user = str_replace("Offendi", "", $update->message->text);
		$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
			'chat_id' => $update->message->chat->id,
			'text' => $user. " " . $offese[array_rand($offese,1)]
		]);
	}
		
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
