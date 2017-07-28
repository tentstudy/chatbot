
<?php 
/*đã xong*/
/*create bot*/
require_once '../lib/SDK-Php-Chatfuel-Socola.php';
$bot = new Chatfuel(TRUE);
/*Send text messages*/
$text = 'Socola';
$arrayTexts = array(
	'Socola',
	'Đại',
	'Ca'
);
$bot->sendText($text_or_arrayTexts);

/*Send an image*/
$image = 'http://i.imgur.com/luWlRwV.jpg';
$arrayImages = array(
	'http://i.imgur.com/luWlRwV.jpg',
	'http://i.imgur.com/luWlRwV.jpg'
);
$bot->sendImage($image_or_arrayImages);

/*Send a file*/
$file = 'https://01b02091.ngrok.io/test.pdf';
$arrayFiles = array(
	'https://01b02091.ngrok.io/test.pdf',
	'https://01b02091.ngrok.io/test.pdf'
);
$bot->sendFile($file_or_arrayFiles);

/*Send an audio*/
$audio = 'https://01b02091.ngrok.io/test.mp3';
$arrayAudios = array(
	'https://01b02091.ngrok.io/test.mp3',
	'https://01b02091.ngrok.io/test.mp3'
);
$bot->sendAudio($audio_or_arrayAudios);
/*Create a button*/

/*Create Button To URL*/
$title = "button to url";
$url = "http://www.facebook.com";
$buttonToURL = $bot->createButtonToURL($title, $url, $setAttributes = Null);

/*Create Button To Block*/
$title = "button to block";
$block = "re-start";
$buttonToBlock = $bot->createButtonToBlock($title, $block, $setAttributes = Null);

/*Create Button Share*/
$buttonShare = $bot->createButtonShare();

/*Create Button Call*/
$phoneNumber = '096******5';
$buttonCall    = $bot->createButtonCall($phoneNumber, $title = 'Call');

/*Create Button Quick Reply*/
$block = "re-start";
$arrayBlocks = array(
	'play',
	'pause'
);
$bot->createButtonQuickReply($title, $block_or_arrayBlocks);

/*Send a text card with one or more button (max 3 buttons)*/
$text = 'this is text card';
$arrayButtons = array(
	$buttonToURL,
	$buttonToBlock,
	$buttonShare
);
$bot->sendTextCard($text, $button_or_arrayButtons);

/*Create element*/
$title    = 'this is element';
$image    = 'http://i.imgur.com/luWlRwV.jpg';
$subTitle = 'this is sub title';
$element  = $bot->createElement($title, $image, $subTitle, $button_or_arrayButtons);
$arrayElements = array(
	$element1,
	$element2
);

/*Send a gallery*/
$bot->sendGallery($element_or_arrayElements);

/*Send a list template min 2 element*/
/*You can switch type “top_element_style” between “large” and “compact”.*/
$topElementStyle = 'large';
$bot->sendList($arrayElements, $topElementStyle);
?>

<pre>
	
<?php









	// /*send video lỗi*/
	// $bot->sendVideo('https://01b02091.ngrok.io/test.mp4');
?>