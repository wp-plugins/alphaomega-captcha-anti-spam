<?php

	include("pentecrunch.php");
	$pisoicona = getcwd() . '/kabe.jpg';
	$edoicona = imagecreatefromjpeg($pisoicona);
	$megalitero = 255;
	$iconaipsos = imagesy($edoicona);
	$iconafarthos = imagesx($edoicona);
        $kokino = mt_rand(67,$megalitero);
	$prasino = mt_rand(67,$megalitero);
	$pmle = mt_rand(67,$megalitero);
 	$lexihroma = imagecolorallocate($edoicona,$megalitero-$kokino,$megalitero-$prasino,$megalitero-$pmle);
	$klidi = '';
	$cased_entry = '';
	$select_entry = trim(base64_decode(convert_uudecode(urldecode(stripslashes(trim($daarray[mt_rand(0, count($daarray) - 1)]))))));
	for ( $steuclide = 0; $steuclide < strlen($select_entry); $steuclide++ ) {

		$fatrand = mt_rand(0, 1);

		if ( $fatrand == 0 ) {
		
			$cased_entry .= strtolower($select_entry[$steuclide]);

		} else {

			$cased_entry .= strtoupper($select_entry[$steuclide]);

		}
		
	}
	$iconafrasi = $cased_entry;
	session_start();
	$_SESSION['alphaomega_captcha_case_sensitive'] = '1';
	$_SESSION['alphaomega_code'] = $cased_entry;	
	$leximegathos = 12;
	$lexiarhaio = getcwd() . '/grafistilo.ttf';
	$apotelisma = imagettftext($edoicona, $leximegathos, mt_rand(-4,4), mt_rand(5,$iconafarthos/2), mt_rand($leximegathos,$iconaipsos-5), $lexihroma, $lexiarhaio, $iconafrasi);
	header("Content-Type:image/png");
	header("Content-Disposition:inline ; filename=daimage.png");
	imagepng($edoicona);
	imagedestroy($edoicona);

?>
