<?php

$language_button_en = ' ';
$language_button_jp = ' ';
$language_button_gr = ' ';
$language_button_kr = ' ';
$language_button_cn = ' ';
if ( $myoptions['glossa'] === '1' ) {

	$language_button_en = ' checked="checked" ';

} elseif ( $myoptions['glossa'] === '2' ) {

	$language_button_jp = ' checked="checked" ';

} elseif ( $myoptions['glossa'] === '3' ) {

	$language_button_gr = ' checked="checked" ';

} elseif ( $myoptions['glossa'] === '4' ) {

	$language_button_kr = ' checked="checked" ';

} elseif ( $myoptions['glossa'] === '5' ) {

	$language_button_cn = ' checked="checked" ';

}
$captcha_classica_button = ' ';
$captcha_mathematica_button = ' ';
$captcha_artistica_button = ' ';
$captcha_cinematica_button = ' ';
$captcha_literaca_button = ' ';
$captcha_scientifica_button = ' ';
$captcha_historica_button = ' ';
$captcha_computica_button = ' ';
$captcha_musica_button = ' ';
$captcha_geographica_button = ' ';
$captcha_numerica_button = ' ';
$captcha_sportica_button = ' ';
$captcha_directa_button = ' ';
$captcha_fashionica_button = ' ';
$captcha_economica_button = ' ';
$captcha_gastronomica_button = ' ';


if ( $myoptions['titichonadixis'] === '1' ) {

	$captcha_classica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '2' ) {

	$captcha_mathematica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '3' ) {

	$captcha_artistica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '4' ) {

	$captcha_cinematica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '5' ) {

	$captcha_literacha_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '6' ) {

	$captcha_scientifica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '7' ) {

	$captcha_historica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '8' ) {

	$captcha_acronymica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '9' ) {

	$captcha_musica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '10' ) {

	$captcha_geographica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '11' ) {

	$captcha_numerica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '12' ) {

	$captcha_sportica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '13' ) {

	$captcha_directa_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '14' ) {

	$captcha_fashionica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '15' ) {

	$captcha_economica_button = ' checked="checked" ';

} elseif ( $myoptions['titichonadixis'] === '16' ) {

	$captcha_gastronomica_button = ' checked="checked" ';

}
$captcha_location_comment_checkbox = ' ';
$captcha_location_admin_checkbox = ' ';
if ( $myoptions['dixeminimaticho'] === '1' ) {

	$captcha_location_comment_checkbox = ' checked="checked" ';

}
if ( $myoptions['dixestichioticho'] === '1' ) {

	$captcha_location_admin_checkbox = ' checked="checked" ';

}
$captcha_position_comment_middle = ' ';
$captcha_position_comment_bottom = ' ';
$captcha_position_admin_top = ' ';
$captcha_position_admin_bottom = ' ';
if ( $myoptions['minimatichotopos'] === '1' ) {

	$captcha_position_comment_top = ' checked="checked" ';

} elseif ( $myoptions['minimatichotopos'] === '2' ) {

	$captcha_position_comment_middle = ' checked="checked" ';

} elseif ( $myoptions['minimatichotopos'] === '3' ) {

	$captcha_position_comment_bottom = ' checked="checked" ';

}
if ( $myoptions['stichiotichotopos'] === '2' ) {

	$captcha_position_admin_bottom = ' checked="checked" ';

}
$filter_name_button = ' ';
$filter_email_button = ' ';
$filter_url_button = ' ';
$filter_comment_button = ' ';
if ( $myoptions['stragiseonoma'] === '1' ) {

	$filter_name_button = ' checked="checked" ';

}
if ( $myoptions['stragisediefthinsi'] === '1' ) {

	$filter_email_button = ' checked="checked" ';

}
if ( $myoptions['stragisehataftafpi'] === '1' ) {

	$filter_url_button = ' checked="checked" ';
}

if ( $myoptions['stragiseminima'] === '1' ) {

	$filter_comment_button = ' checked="checked" ';

}
if ( $myoptions['stragisekabosaminima'] === '0' ) {

	$use_this_spam_filter_list = $myoptions['stragiseklisto'];

} else {

	if ( $myoptions['stragisemedikomas'] === '1' ) {

		$use_this_spam_filter_list = str_replace('####', PHP_EOL, $myoptions['dikomasstragisekolona']);

	} else {

		$use_this_spam_filter_list = str_replace("\\", "", str_replace('####', PHP_EOL, $myoptions['dikosustragisekolona']));
		
	}

}
$use_default_spam_filter_list_button_click = str_replace("####", "\\n", $myoptions['dikomasstragisekolona']);
if ( $myoptions['dikosustragisekolona'] === '' ) {

	$show_custom_spam_filter_list_button_click =  $myoptions['dikosustragisekolonadenechitipotaminima'];				

} else {

	$show_custom_spam_filter_list_button_click =  str_replace("\"", "&quot;", str_replace('####', "\\n", $myoptions['dikosustragisekolona']));

}
if ( $myoptions['nadixisdikomaskakofaniminimaapantisi'] === '1' ) {

	$current_spam_message_title = $myoptions['kakofaniminimaapantasititlo'];
	$current_spam_message_content = $myoptions['kakofaniminimaapantasiminima'];

} else {

	$current_spam_message_title = stripslashes($myoptions['dikosukakofaniminimaapantasititlo']);
	$current_spam_message_content = stripslashes($myoptions['dikosukakofaniminimaapantasiminima']);

}


?>
