<?php

	include("endecacrunch.php");
	$pisoicona = getcwd() . '/kabe.jpg';
	$edoicona = imagecreatefromjpeg($pisoicona);
	$megalitero = 255;
	$iconaipsos = imagesy($edoicona);
	$iconafarthos = imagesx($edoicona);
        $kokino = mt_rand(67,$megalitero);
	$prasino = mt_rand(67,$megalitero);
	$pmle = mt_rand(67,$megalitero);
 	$lexihroma = imagecolorallocate($edoicona,$megalitero-$kokino,$megalitero-$prasino,$megalitero-$pmle);
	$select_entry_array = array ('#', '');
	while ( strpos($select_entry_array[0], '#') !== FALSE ) {
	shuffle($daarray);
	$select_entry_array = explode('####', trim(base64_decode(convert_uudecode(urldecode(stripslashes(trim($daarray[mt_rand(0, count($daarray) - 1)])))))));
	}
	for ( $steuclidewy = 0; $steuclidewy < strlen($select_entry_array[0]); $steuclidewy++ ) {

		$fatrand = mt_rand(0, 1);

		if ( $fatrand == 0 ) {
		
			$cased_entry .= strtolower($select_entry_array[0][$steuclidewy]);

		} else {

			$cased_entry .= strtoupper($select_entry_array[0][$steuclidewy]);

		}
		
	}
	$iconafrasi = $cased_entry;
	$ergalio = getcwd() . '/grafistilo.ttf';
	$ergaliomegathos = 12;
	$ola = imagettfbbox($ergaliomegathos, 0, $ergalio, $iconafrasi);
	$fardoslexi = $ola[4] - $ola[6];
	$enarxix = mt_rand(5,$iconafarthos/2);
	if ($enarxix > ($iconafarthos-$fardoslexi-5))
	{
	$enarxix = 3;
	}
	session_start();
	$_SESSION['alphaomega_captcha_case_sensitive'] = '0';
	$_SESSION['alphaomega_captcha_akrivos_idio'] = '0';
	$_SESSION['alphaomega_code'] = $select_entry_array[1];	
	$leximegathos = 12;
	$lexiarhaio = getcwd() . '/grafistilo.ttf';
	$apotelisma = imagettftext($edoicona, $leximegathos, mt_rand(-4,4), $enarxix, mt_rand($leximegathos,$iconaipsos-5), $lexihroma, $lexiarhaio, $iconafrasi);
	header("Content-Type:image/png");
	header("Content-Disposition:inline ; filename=daimage.png");
	imagepng($edoicona);
	imagedestroy($edoicona);

?>
