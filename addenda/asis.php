<?php

$language_button_en = ' ';
$language_button_jp = ' ';
$language_button_gr = ' ';
$language_button_kr = ' ';
$language_button_cn = ' ';
if ( $myoptions['language'] === '1' ) {

	$language_button_en = ' checked="checked" ';

} elseif ( $myoptions['language'] === '2' ) {

	$language_button_jp = ' checked="checked" ';

} elseif ( $myoptions['language'] === '3' ) {

	$language_button_gr = ' checked="checked" ';

} elseif ( $myoptions['language'] === '4' ) {

	$language_button_kr = ' checked="checked" ';

} elseif ( $myoptions['language'] === '5' ) {

	$language_button_cn = ' checked="checked" ';

}
$captcha_classica_button = ' ';
$captcha_mathematica_button = ' ';
$captcha_geographica_button = ' ';
$captcha_scientifica_button = ' ';
$captcha_cinema_button = ' ';
$captcha_historica_button = ' ';
$captcha_computica_button = ' ';
if ( $myoptions['captcha_type'] === '1' ) {

	$captcha_classica_button = ' checked="checked" ';

} elseif ( $myoptions['captcha_type'] === '2' ) {

	$captcha_mathematica_button = ' checked="checked" ';

} elseif ( $myoptions['captcha_type'] === '3' ) {

	$captcha_geographica_button = ' checked="checked" ';

} elseif ( $myoptions['captcha_type'] === '4' ) {

	$captcha_scientifica_button = ' checked="checked" ';

} elseif ( $myoptions['captcha_type'] === '5' ) {

	$captcha_cinema_button = ' checked="checked" ';

} elseif ( $myoptions['captcha_type'] === '6' ) {

	$captcha_historica_button = ' checked="checked" ';

} elseif ( $myoptions['captcha_type'] === '7' ) {

	$captcha_computica_button = ' checked="checked" ';

}
$captcha_location_comment_checkbox = ' ';
$captcha_location_admin_checkbox = ' ';
if ( $myoptions['comment_captcha_on'] === '1' ) {

	$captcha_location_comment_checkbox = ' checked="checked" ';

}
if ( $myoptions['admin_captcha_on'] === '1' ) {

	$captcha_location_admin_checkbox = ' checked="checked" ';

}
$captcha_position_comment_middle = ' ';
$captcha_position_comment_bottom = ' ';
$captcha_position_admin_top = ' ';
$captcha_position_admin_bottom = ' ';
if ( $myoptions['comment_captcha_position'] === '1' ) {

	$captcha_position_comment_top = ' checked="checked" ';

} elseif ( $myoptions['comment_captcha_position'] === '2' ) {

	$captcha_position_comment_middle = ' checked="checked" ';

} elseif ( $myoptions['comment_captcha_position'] === '3' ) {

	$captcha_position_comment_bottom = ' checked="checked" ';

}
if ( $myoptions['admin_captcha_position'] === '2' ) {

	$captcha_position_admin_bottom = ' checked="checked" ';

}
$filter_name_button = ' ';
$filter_email_button = ' ';
$filter_url_button = ' ';
$filter_comment_button = ' ';
if ( $myoptions['filter_name'] === '1' ) {

	$filter_name_button = ' checked="checked" ';

}
if ( $myoptions['filter_email'] === '1' ) {

	$filter_email_button = ' checked="checked" ';

}
if ( $myoptions['filter_url'] === '1' ) {

	$filter_url_button = ' checked="checked" ';
}

if ( $myoptions['filter_comment'] === '1' ) {

	$filter_comment_button = ' checked="checked" ';

}
if ( $myoptions['filter_comment_form_element_s'] === '0' ) {

	$use_this_spam_filter_list = $myoptions['spam_filter_off_listbox_prompt'];

} else {

	if ( $myoptions['use_default_spam_filter_list'] === '1' ) {

		$use_this_spam_filter_list = str_replace('####', PHP_EOL, $myoptions['default_spam_filter_list']);

	} else {

		$use_this_spam_filter_list = str_replace("\\", "", str_replace('####', PHP_EOL, $myoptions['custom_spam_filter_list']));
		
	}

}
$use_default_spam_filter_list_button_click = str_replace("####", "\\n", $myoptions['default_spam_filter_list']);
if ( $myoptions['custom_spam_filter_list'] === '' ) {

	$show_custom_spam_filter_list_button_click =  $myoptions['custom_spam_filter_list_empty_prompt'];				

} else {

	$show_custom_spam_filter_list_button_click =  str_replace("\"", "&quot;", str_replace('####', "\\n", $myoptions['custom_spam_filter_list']));

}
if ( $myoptions['use_default_spam_message'] === '1' ) {

	$current_spam_message_title = $myoptions['default_spam_message_title'];
	$current_spam_message_content = $myoptions['default_spam_message_content'];

} else {

	$current_spam_message_title = stripslashes($myoptions['custom_spam_message_title']);
	$current_spam_message_content = stripslashes($myoptions['custom_spam_message_content']);

}


?>
