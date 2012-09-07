<?php

	include("teseracrunch.php");
	$pisoicona = getcwd() . '/kabe.jpg';
	$edoicona = imagecreatefromjpeg($pisoicona);
	$megalitero = 255;
	$iconaipsos = imagesy($edoicona);
	$iconafarthos = imagesx($edoicona);
        $kokino = mt_rand(67,$megalitero);
	$prasino = mt_rand(67,$megalitero);
	$pmle = mt_rand(67,$megalitero);
 	$lexihroma = imagecolorallocate($edoicona,$megalitero-$kokino,$megalitero-$prasino,$megalitero-$pmle);
	$select_entry_array = explode('####', trim(base64_decode(convert_uudecode(urldecode(stripslashes(trim($daarray[mt_rand(0, count($daarray) - 1)])))))));
	$iconafrasi = $select_entry_array[0];
	session_start();
	$_SESSION['alphaomega_captcha_case_sensitive'] = '0';
	$_SESSION['alphaomega_code'] = $select_entry_array[1];	
	$leximegathos = 12;
	$lexiarhaio = getcwd() . '/grafistilo.ttf';
	$apotelisma = imagettftext($edoicona, $leximegathos, mt_rand(-4,4), mt_rand(5,$iconafarthos/2), mt_rand($leximegathos,$iconaipsos-5), $lexihroma, $lexiarhaio, $iconafrasi);
	header("Content-Type:image/png");
	header("Content-Disposition:inline ; filename=daimage.png");
	imagepng($edoicona);
	imagedestroy($edoicona);

?>
