<?php
/*
Plugin Name: AlphaOmega Captcha & Anti-Spam Filter
Plugin URI: http://alphaomegaplugins.com
Description: Creates Visually Appealing Captcha Images and Quizzes to Enhance and Secure your WordPress Comment/Log In Forms. Also includes Anti-Spam Protection.
Version: 1.0
Author: AlphaOmega Plugins
Author URI: http://alphaomegaplugins.com
License: GPL2
*/

session_start();

function asphaliacommdixe () {

session_start();

include( "addenda/retop.php" ); 

if ( $myoptions['comment_captcha_on'] === '1' ) {

	if ( isset($_SESSION['form_button_clicked']) ) {

		if ( $_SESSION['form_button_clicked'] === '0' ) 
	
			$_SESSION['captcha_entered'] = '';

	}

	if ( $myoptions['comment_captcha_position'] === '1' || $myoptions['comment_captcha_position'] === '2' ) {

		echo '<div style="padding-top:15px;padding-bottom:15px;"><label for="author">' . __( $myoptions['captcha_pretext'] ) . '</label> &nbsp;<img style="height:30px;vertical-align:middle" src="' . plugins_url( $myoptions['which_captcha'] , __FILE__ ) . '"> &nbsp;<a href="javascript:location.reload()"><img style="vertical-align:middle;" src="' . plugins_url( 'addenda/reload.gif' , __FILE__ ) . '" title="' . $myoptions['captcha_reload'] . '" border="0"></a> &nbsp;<input id="security" name="security" type="text" value="' . $_SESSION['captcha_entered'] . '" size="7" style="width:100px;"></div>';

	} else { 

		echo '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true"></textarea></p><div style="padding-top:15px;padding-bottom:15px;"><label for="author">' . __( $myoptions['captcha_pretext'] ) . '</label> &nbsp;<img style="height:30px;vertical-align:middle" src="' . plugins_url( $myoptions['which_captcha'] , __FILE__ ) . '"> &nbsp;<a href="javascript:location.reload()"><img style="vertical-align:middle;" src="' . plugins_url( 'addenda/reload.gif' , __FILE__ ) . '" title="' . $myoptions['captcha_reload'] . '" border="0"></a> &nbsp;<input id="security" name="security" type="text" value="' . $_SESSION['captcha_entered'] . '" size="7" style="width:100px;"></div>';

		}

if ( isset($_SESSION['form_button_clicked']) ) {

	$_SESSION['form_button_clicked'] = '0';

}

}

}

function asphaliaadmindixe () {

session_start();

include( "addenda/retop.php" );

if ( $myoptions['admin_captcha_on'] === '1' ) {

	if ( $myoptions['admin_captcha_position'] === '1' ) {

		echo '<div style="padding-top:15px;padding-bottom:15px;"><label for="author">' . __( $myoptions['captcha_pretext'] ) . '</label> &nbsp;<img style="height:30px;vertical-align:middle" src="' . plugins_url( $myoptions['which_captcha'] , __FILE__ ) . '"> &nbsp;<a href="javascript:location.reload()"><img style="vertical-align:middle;" src="' . plugins_url( 'addenda/reload.gif' , __FILE__ ) . '" title="' . $myoptions['captcha_reload'] . '" border="0"></a> &nbsp;<input id="security" name="security" type="text" value="' . $_SESSION['captcha_entered'] . '" size="9" style="width:160px;"></div>';

	} else {

		echo '<div style="padding-top:3px;padding-bottom:3px;"><label for="author">' . __( $myoptions['captcha_pretext'] ) . '</label></div>
<div style="padding-top:3px;padding-bottom:3px;"><img style="height:30px;vertical-align:middle" src="' . plugins_url( $myoptions['which_captcha'] , __FILE__ ) . '"> &nbsp;<a href="javascript:location.reload()"><img style="vertical-align:middle;" src="' . plugins_url( 'addenda/reload.gif' , __FILE__ ) . '" title="' . $myoptions['captcha_reload'] . '" border="0"></a></div><div style="padding-top:3px;padding-bottom:3px;"><input id="security" name="security" type="text" value="' . $_SESSION['captcha_entered'] . '" size="9" style="width:160px;"></div>';

	}

}

}

function mythemeformcommdefaults () {

session_start();

include( "addenda/retop.php" );

if ( $myoptions['comment_captcha_on'] === '1' ) {

	if ( $myoptions['comment_captcha_position'] === '1' ) {

		add_action( 'comment_form_before_fields', 'asphaliacommdixe' );

	} elseif ( $myoptions['comment_captcha_position'] === '2' ) {

		add_action( 'comment_form_after_fields', 'asphaliacommdixe' );

	} else {

		add_action( 'comment_form_field_comment', 'asphaliacommdixe' );

	}

}

}

add_action( 'wp_head', 'mythemeformcommdefaults' );

function mythemeformadmindefaults() {

session_start();

include( "addenda/retop.php" );

if ( $myoptions['admin_captcha_on'] === '1' ) {

	if ( $myoptions['admin_captcha_position'] === '1' ) {

		add_action( 'login_message', 'asphaliaadmindixe' );

	} else {

		add_action( 'login_form', 'asphaliaadmindixe' );

	}

} 

}

add_action( 'login_init', 'mythemeformadmindefaults' );

function acpo () {

include_once "addenda/retop.php";

$button_click_response = '';

if ( isset($_POST['info_restore']) ) {

	if ( $myoptions['captcha_type'] === '1' && $myoptions['comment_captcha_on'] === '1' && $myoptions['admin_captcha_on'] === '0' && $myoptions['comment_captcha_position'] === '3' && $myoptions['admin_captcha_position'] === '2' && $myoptions['filter_name'] === '0' && $myoptions['filter_email'] === '0' && $myoptions['filter_url'] === '0' && $myoptions['filter_comment'] === '1' && $myoptions['filter_comment_form_element_s'] === '1' && $myoptions['use_default_spam_filter_list'] === '1' && $myoptions['use_default_spam_message'] === '1' && $myoptions['use_custom_spam_filter_list'] === '0' && $myoptions['use_custom_spam_message'] === '0' ) {

		if ( $myoptions['language'] === '1' ) {

			$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#x2605;</div></td><td>The default settings are already in place. Please note that your Spam Filter is ON.</td></tr></table></left></div></div>';

		} elseif ( $myoptions['language'] === '2' ) {

			$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#x2605;</div></td><td>既定の設定は、すでに場所でです。スパムフィルターはアクティブです。</td></tr></table></left></div></div>';

		} elseif ( $myoptions['language'] === '3' ) {

			$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#x2605;</div></td><td>Οι προεπιλεγμένες ρυθμίσεις έχουν ήδη θεσπιστεί. Το φίλτρο ανεπιθύμητης αλληλογραφίας σας είναι ενεργή.</td></tr></table></left></div></div>';

		} elseif ( $myoptions['language'] === '4' ) {

			$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#x2605;</div></td><td>기본 설정은 장소에 이미 있습니다. 스팸 방지 필터는 활성.</td></tr></table></left></div></div>';

		} elseif ( $myoptions['language'] === '5' ) {

			$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#x2605;</div></td><td>預設設置已經到位。您的防垃圾郵件篩選器處於活動狀態。</td></tr></table></left></div></div>';

		}
	
	} else {

		$myoptions['captcha_type'] = '1';
		$myoptions['comment_captcha_on'] = '1';
		$myoptions['admin_captcha_on'] = '0';
		$myoptions['comment_captcha_position'] = '3';
		$myoptions['admin_captcha_position'] = '2';
		$myoptions['filter_name'] = '0';
		$myoptions['filter_email'] = '0';
		$myoptions['filter_url'] = '0';
		$myoptions['filter_comment'] = '1';
		$myoptions['filter_comment_form_element_s'] = '1';
		$myoptions['use_default_spam_filter_list'] = '1';
		$myoptions['use_default_spam_message'] = '1';
		$myoptions['use_custom_spam_filter_list'] = '0';
		$myoptions['use_custom_spam_message'] = '0';
		update_option( 'alphaomega_captcha_settings', $myoptions );

		if ( $myoptions['language'] === '1' ) {

			$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;">
<div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Good Job! The default settings have been successfully restored. Please note that your Spam Filter is ON.</td></tr></table></left></div></div>';

		} elseif ( $myoptions['language'] === '2' ) {

			$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;">
<div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>おめでとうございます！ 既定の設定は正常に復元されています。スパムフィルターはアクティブです。</td></tr></table></left></div></div>';

		} elseif ( $myoptions['language'] === '3' ) {

			$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;">
<div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Συγχαρητήρια! Οι προεπιλεγμένες ρυθμίσεις έχουν αποκατασταθεί με επιτυχία. Το φίλτρο ανεπιθύμητης αλληλογραφίας σας είναι ενεργή.</td></tr></table></left></div></div>';

		} elseif ( $myoptions['language'] === '4' ) {

			$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;">
<div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>축 하! 기본 설정이 복원 되었습니다. 스팸 방지 필터는 활성.</td></tr></table></left></div></div>';

		} elseif ( $myoptions['language'] === '5' ) {

			$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;">
<div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>恭喜！ 已成功恢復預設設置。您的防垃圾郵件篩選器處於活動狀態。</td></tr></table></left></div></div>';

		}

	}

}

if ( isset($_POST['info_update']) ) {

$myoptions['language'] = $_POST['language'];
$myoptions['captcha_type'] = $_POST['captchatype'];

if ( isset($_POST['captchalocationcommentform']) ) {

	$myoptions['comment_captcha_on'] = '1';

} else {

	$myoptions['comment_captcha_on'] = '0';

}

if ( isset($_POST['captchalocationadminlogin']) ) {

	$myoptions['admin_captcha_on'] = '1';

} else {

	$myoptions['admin_captcha_on'] = '0';

}

$myoptions['comment_captcha_position'] = $_POST['captchapositioncommentform'];
$myoptions['admin_captcha_position'] = $_POST['captchapositionadminloginform'];

if ( isset($_POST['filterelementname']) ) {

	$myoptions['filter_name'] = '1';

} else {

	$myoptions['filter_name'] = '0';

}

if ( isset($_POST['filterelementemail']) ) {

	$myoptions['filter_email'] = '1';

} else {

	$myoptions['filter_email'] = '0';

}

if ( isset($_POST['filterelementurl']) ) {

	$myoptions['filter_url'] = '1';

} else {

	$myoptions['filter_url'] = '0';

}

if ( isset($_POST['filterelementcomment']) ) {

	$myoptions['filter_comment'] = '1';

} else {

	$myoptions['filter_comment'] = '0';

}

if ( !isset($_POST['filterelementname']) && !isset($_POST['filterelementemail']) && !isset($_POST['filterelementurl']) && !isset($_POST['filterelementcomment']) || trim($_POST['spamtextfilterlist']) === '' || trim($_POST['spamtextfilterlist']) === $myoptions['spam_filter_off_listbox_prompt'] ) {

	$myoptions['filter_comment_form_element_s'] = '0';

	if ( $myoptions['language'] === '1' ) {

		$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Good Job! Your settings have been successfully saved. Please note that your Spam Filter is OFF.</td></tr></table></left></div></div>';

	} elseif ( $myoptions['language'] === '2' ) {

		$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>おめでとうございます！ あなたの設定が正常に保存されました。スパムフィルターはアクティブではありません。</td></tr></table></left></div></div>';

	} elseif ( $myoptions['language'] === '3' ) {

		$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Συγχαρητήρια! Αποθηκεύτηκαν με επιτυχία τις ρυθμίσεις σας. Το φίλτρο ανεπιθύμητης αλληλογραφίας σας δεν είναι ενεργή.</td></tr></table></left></div></div>';

	} elseif ( $myoptions['language'] === '4' ) {

		$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>축 하! 설정이 성공적으로 저장 되었습니다. 스팸 방지 필터는 활성화 되지 않습니다.</td></tr></table></left></div></div>';

	} elseif ( $myoptions['language'] === '5' ) {

		$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>恭喜！ 已成功保存您的設置。您的防垃圾郵件篩選器未處於活動狀態。</td></tr></table></left></div></div>';

	}
			
} else {

	$myoptions['filter_comment_form_element_s'] = '1';

	if ( $myoptions['language'] === '1' ) {

		$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Good Job! Your settings have been successfully saved. Please note that your Spam Filter is ON.</td></tr></table></left></div></div>';

	} elseif ( $myoptions['language'] === '2' ) {

		$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>おめでとうございます！ あなたの設定が正常に保存されました。スパムフィルターはアクティブです。</td></tr></table></left></div></div>';

	} elseif ( $myoptions['language'] === '3' ) {

		$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Συγχαρητήρια! Αποθηκεύτηκαν με επιτυχία τις ρυθμίσεις σας. Το φίλτρο ανεπιθύμητης αλληλογραφίας σας είναι ενεργή.</td></tr></table></left></div></div>';

	} elseif ( $myoptions['language'] === '4' ) {

		$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>축 하! 설정이 성공적으로 저장 되었습니다. 스팸 방지 필터는 활성.</td></tr></table></left></div></div>';

	} elseif ( $myoptions['language'] === '5' ) {

		$button_click_response = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>恭喜！ 已成功保存您的設置。您的防垃圾郵件篩選器處於活動狀態。</td></tr></table></left></div></div>';

	}

}

if ( trim($_POST['spamtextfilterlist']) !== '' ) {

	$delimited_listbox_filter = preg_replace('~\r\n?~', '####', trim($_POST['spamtextfilterlist']));

	if ( $delimited_listbox_filter === $myoptions['default_spam_filter_list'] || $delimited_listbox_filter === $myoptions['custom_spam_filter_list_empty_prompt'] ) {

		$myoptions['use_default_spam_filter_list'] = '1';
		$myoptions['use_custom_spam_filter_list'] = '0';

	} else {

		$myoptions['use_default_spam_filter_list'] = '0';
		$myoptions['use_custom_spam_filter_list'] = '1';

		if ( $delimited_listbox_filter !== $myoptions['spam_filter_off_listbox_prompt'] ) {

			$myoptions['custom_spam_filter_list'] = $delimited_listbox_filter;

		}

	}

}

if ( trim($_POST['spammessagetitle']) !== '' && trim($_POST['spammessagecontent']) !== '' ) {

	if ( trim($_POST['spammessagetitle']) !== $myoptions['default_spam_message_title'] ||  trim($_POST['spammessagecontent']) !== $myoptions['default_spam_message_content'] ) {

		$myoptions['custom_spam_message_title'] = trim($_POST['spammessagetitle']);
		$myoptions['custom_spam_message_content'] = trim($_POST['spammessagecontent']);

		$myoptions['use_custom_spam_message'] = '1';
		$myoptions['use_default_spam_message'] = '0';

	} else {

		$myoptions['use_custom_spam_message'] = '0';
		$myoptions['use_default_spam_message'] = '1';

	}

}

if ( $myoptions['language'] === '1' ) {

	$myoptions['stichiaglossa'] = 'addenda/stichiaglossaena.php';
	$myoptions['spam_filter_off_listbox_prompt'] ='The Spam Filter is OFF';
	$myoptions['custom_spam_filter_list_prompt'] = 'Your Custom Spam Filter List Is Empty';
	$myoptions['default_spam_filter_list'] = 'Lose Weight####Buy This Now####Make Money####Work From Home####XXX####sex';				
	$myoptions['default_spam_message_title'] = 'Comment Needs Modification';
	$myoptions['default_spam_message_content'] = 'Please modify your comment as it may contain inappropriate and possibly spam-related content. Thank you.';

	$myoptions['captcha_language'] = 'addenda/commlangena.php';

	if ( $myoptions['captcha_type'] === '1' ) {

		$myoptions['captcha_pretext'] = 'Please Enter Security Code'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeena.php';

	} elseif ( $myoptions['captcha_type'] === '2' ) {

		$myoptions['captcha_pretext'] = 'Please Do the Math'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixedio.php';

	} elseif ( $myoptions['captcha_type'] === '3' ) {

		$myoptions['captcha_pretext'] = 'Which City Do You See?'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixetria.php';

	} elseif ( $myoptions['captcha_type'] === '4' ) {

		$myoptions['captcha_pretext'] = 'Please Do the Science'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixetesera.php';

	} elseif ( $myoptions['captcha_type'] === '5' ) {

		$myoptions['captcha_pretext'] = 'What Film Do You See?'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixepente.php';

	} elseif ( $myoptions['captcha_type'] === '6' ) {

		$myoptions['captcha_pretext'] = 'Whom Do You See?'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeexi.php';

	} elseif ( $myoptions['captcha_type'] === '7' ) {

		$myoptions['captcha_pretext'] = 'What Does This Acronym Stand For?'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeefta.php';

	}

	$myoptions['captcha_reload'] = ' Reload Captcha ';

} elseif ( $myoptions['language'] === '2' ) {

	$myoptions['stichiaglossa'] = 'addenda/stichiaglossadio.php';
	$myoptions['spam_filter_off_listbox_prompt'] ='スパムフィルターはアクティブではありません';
	$myoptions['custom_spam_filter_list_prompt'] = 'カスタムスパムフィルター リストが空です';
	$myoptions['default_spam_filter_list'] = '重量を失う####金持ちになる####アダルト ビデオ####セックス';				
	$myoptions['default_spam_message_title'] = 'コメントの変更が必要';
	$myoptions['default_spam_message_content'] = '不適切なおそらくスパム関連のコンテンツを含めることがあなたのコメントに変更して下さい。';

	$myoptions['captcha_language'] = 'addenda/commlangdio.php';

	if ( $myoptions['captcha_type'] === '1' ) {

		$myoptions['captcha_pretext'] = 'セキュリティ コードを入力して下さい'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeena.php';

	} elseif ( $myoptions['captcha_type'] === '2' ) {

		$myoptions['captcha_pretext'] = '答えは何ですか。'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixedio.php';

	} elseif ( $myoptions['captcha_type'] === '3' ) {

		$myoptions['captcha_pretext'] = 'どの都市ですか。'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixetria.php';

	} elseif ( $myoptions['captcha_type'] === '4' ) {

		$myoptions['captcha_pretext'] = '答えは何ですか。'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixetesera.php';

	} elseif ( $myoptions['captcha_type'] === '5' ) {

		$myoptions['captcha_pretext'] = 'どんな映画ですか。'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixepente.php';

	} elseif ( $myoptions['captcha_type'] === '6' ) {

		$myoptions['captcha_pretext'] = '誰か。'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeexi.php';

	} elseif ( $myoptions['captcha_type'] === '7' ) {

		$myoptions['captcha_pretext'] = 'この頭字語はどういう意味ですか。'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeefta.php';

	}

	$myoptions['captcha_reload'] = ' キャプチャの再読み込み ';

} elseif ( $myoptions['language'] === '3' ) {

	$myoptions['stichiaglossa'] = 'addenda/stichiaglossatria.php';
	$myoptions['spam_filter_off_listbox_prompt'] ='Το φίλτρο ανεπιθύμητης αλληλογραφίας σας δεν είναι ενεργή';
	$myoptions['custom_spam_filter_list_prompt'] = 'σας προσαρμοσμένη λίστα φίλτρου ανεπιθύμητης αλληλογραφίας είναι κενό';				
	$myoptions['default_spam_filter_list'] = 'χάσετε βάρος####Αγοράστε τώρα####Γίνετε Πλούσιοι####Ενήλικα Βίντεο';
	$myoptions['default_spam_message_title'] = 'Σχόλιο χρειάζεται τροποποίηση';
	$myoptions['default_spam_message_content'] = 'Τροποποιήστε την παρατήρησή σας, όπως μπορεί να περιέχει περιεχόμενο ακατάλληλη και ενδεχομένως σχετίζονται με ανεπιθύμητη αλληλογραφία.';

	$myoptions['captcha_language'] = 'addenda/commlangtria.php';

	if ( $myoptions['captcha_type'] === '1' ) {

		$myoptions['captcha_pretext'] = 'Παρακαλώ εισάγετε κωδικό ασφαλείας'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeena.php';

	} elseif ( $myoptions['captcha_type'] === '2' ) {

		$myoptions['captcha_pretext'] = 'Ποια είναι η απάντηση;'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixedio.php';

	} elseif ( $myoptions['captcha_type'] === '3' ) {

		$myoptions['captcha_pretext'] = 'Τι πόλη βλέπετε;'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixetria.php';

	} elseif ( $myoptions['captcha_type'] === '4' ) {

		$myoptions['captcha_pretext'] = 'Ποια είναι η απάντηση;'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixetesera.php';

	} elseif ( $myoptions['captcha_type'] === '5' ) {

		$myoptions['captcha_pretext'] = 'Τι ταινία βλέπετε;'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixepente.php';

	} elseif ( $myoptions['captcha_type'] === '6' ) {

		$myoptions['captcha_pretext'] = 'Ποιος είναι;'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeexi.php';

	} elseif ( $myoptions['captcha_type'] === '7' ) {

		$myoptions['captcha_pretext'] = 'Τι σημαίνει αυτό το ακρωνύμιο;'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeefta.php';

	}

	$myoptions['captcha_reload'] = ' Νέα φόρτωση Captcha ';

} elseif ( $myoptions['language'] === '4' ) {

	$myoptions['stichiaglossa'] = 'addenda/stichiaglossatesera.php';
	$myoptions['spam_filter_off_listbox_prompt'] ='스팸 방지 필터는 활성화 되지 않습니다';
	$myoptions['custom_spam_filter_list_prompt'] = '사용자 지정 스팸 필터 목록 비어 있습니다.';
	$myoptions['default_spam_filter_list'] = '패 무게####지금 구입####부자 되기####섹스';				
	$myoptions['default_spam_message_title'] = '댓글 수정 필요';
	$myoptions['default_spam_message_content'] = '으로 부적절 하 고 아마 스팸 관련 콘텐츠를 포함할 수 있습니다 귀하의 코멘트를 수정 하십시오.';

	$myoptions['captcha_language'] = 'addenda/commlangtesera.php';

	if ( $myoptions['captcha_type'] === '1' ) {

		$myoptions['captcha_pretext'] = '보안 코드를 입력 하십시오.'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeena.php';

	} elseif ( $myoptions['captcha_type'] === '2' ) {

		$myoptions['captcha_pretext'] = '대답은 무엇입니까?';
		$myoptions['which_captcha'] = 'addenda/asphaliadixedio.php';

	} elseif ( $myoptions['captcha_type'] === '3' ) {

		$myoptions['captcha_pretext'] = '어떤 도시를 보십니까?';
		$myoptions['which_captcha'] = 'addenda/asphaliadixetria.php';

	} elseif ( $myoptions['captcha_type'] === '4' ) {

		$myoptions['captcha_pretext'] = '대답은 무엇입니까?';
		$myoptions['which_captcha'] = 'addenda/asphaliadixetesera.php';

	} elseif ( $myoptions['captcha_type'] === '5' ) {

		$myoptions['captcha_pretext'] = '당신은 어떤 영화를 봅니까?';
		$myoptions['which_captcha'] = 'addenda/asphaliadixepente.php';

	} elseif ( $myoptions['captcha_type'] === '6' ) {

		$myoptions['captcha_pretext'] = '누가 볼 수 있습니까?';
		$myoptions['which_captcha'] = 'addenda/asphaliadixeexi.php';

	} elseif ( $myoptions['captcha_type'] === '7' ) {

		$myoptions['captcha_pretext'] = '이 약자는 무엇을 의미 합니까?'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeefta.php';

	}

	$myoptions['captcha_reload'] = ' Captcha를 다시 로드  ';

} elseif ( $myoptions['language'] === '5' ) {

	$myoptions['stichiaglossa'] = 'addenda/stichiaglossapente.php';
	$myoptions['spam_filter_off_listbox_prompt'] ='您的防垃圾郵件篩選器未處於活動狀態';
	$myoptions['custom_spam_filter_list_prompt'] = '您自訂垃圾郵件篩選器清單是空的';	
	$myoptions['default_spam_filter_list'] = '減肥####現在買####變得富有####性別';			
	$myoptions['default_spam_message_title'] = '注釋需要改進';
	$myoptions['default_spam_message_content'] = '請修改您的評論，因為它可能包含不適當和可能與垃圾郵件有關的內容。';

	$myoptions['captcha_language'] = 'addenda/commlangpente.php';

	if ( $myoptions['captcha_type'] === '1' ) {

		$myoptions['captcha_pretext'] = '請輸入安全代碼'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeena.php';

	} elseif ( $myoptions['captcha_type'] === '2' ) {

		$myoptions['captcha_pretext'] = '答案是什麼？'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixedio.php';

	} elseif ( $myoptions['captcha_type'] === '3' ) {

		$myoptions['captcha_pretext'] = '你看見什麼城市？';
		$myoptions['which_captcha'] = 'addenda/asphaliadixetria.php';

	} elseif ( $myoptions['captcha_type'] === '4' ) {

		$myoptions['captcha_pretext'] = '答案是什麼？';
		$myoptions['which_captcha'] = 'addenda/asphaliadixetesera.php';

	} elseif ( $myoptions['captcha_type'] === '5' ) {

		$myoptions['captcha_pretext'] = '你看見什麼片子？';
		$myoptions['which_captcha'] = 'addenda/asphaliadixepente.php';

	} elseif ( $myoptions['captcha_type'] === '6' ) {

		$myoptions['captcha_pretext'] = '你看到了誰？'; 
		$myoptions['which_captcha'] = 'addenda/asphaliadixeexi.php';

	} elseif ( $myoptions['captcha_type'] === '7' ) {

		$myoptions['captcha_pretext'] = '這首字母縮寫詞是什麼意思呢？';
		$myoptions['which_captcha'] = 'addenda/asphaliadixeefta.php';

	}

	$myoptions['captcha_reload'] = ' 重新載入驗證碼 ';

}


update_option( 'alphaomega_captcha_settings', $myoptions );

}

include( "addenda/asis.php" );
include( $myoptions['stichiaglossa'] );
include( "addenda/stichiabase.php" );

}

function alphaomega_captcha_plugin_menu () {

	add_plugins_page( 'AlphaOmega Captcha & Anti-Spam Filter Settings', 'AlphaOmega Captcha & Anti-Spam Filter Settings', 'manage_options', 'alphaomega_captcha_and_antispam', 'acpo' );

}

add_action( 'admin_menu', 'alphaomega_captcha_plugin_menu' );

function stile_minima_kubi () {

session_start();

include( "addenda/retop.php" );
include( $myoptions['captcha_language'] );

if ( !isset($_COOKIE["PHPSESSID"]) ) {

	wp_die( __($echimelomakarena) );

}

if ( $myoptions['filter_comment_form_element_s'] === '1' && (!empty($_POST['author']) || !empty($_POST['email']) || !empty($_POST['url']) || !empty($_POST['comment'])) ) {

	if ( $myoptions['use_default_spam_filter_list'] === '1' ) {

		$filter_array = explode("####", strtolower($myoptions['default_spam_filter_list']));

	} else {

		$filter_array = explode("####", strtolower($myoptions['custom_spam_filter_list']));

	}

	include( "addenda/delimit.php" );

	if ( $myoptions['filter_name'] === '1' ) {

		if ( !empty($_POST['author']) ) 

			$user_commentform_entry .= strtolower(trim($_POST['author'])) . $_delimiter_;

	}

	if ( $myoptions['filter_email'] === '1' ) {

		if ( !empty($_POST['email']) )

			$user_commentform_entry .= strtolower(trim($_POST['email'])) . $_delimiter_;

	}

	if ( $myoptions['filter_url'] === '1' ) {

		if ( !empty($_POST['url']) )

			$user_commentform_entry .= strtolower(trim($_POST['url'])) . $_delimiter_;

	}

	if ( $myoptions['filter_comment'] === '1' ) {

		if ( !empty($_POST['comment']) )

			$user_commentform_entry .= strtolower(trim($_POST['comment']));

	}

	for ( $ispam = 0; $ispam < count($filter_array); $ispam++ ) {

		if ( strpos($user_commentform_entry, $filter_array[$ispam]) !== FALSE ) {

			if ( $myoptions['use_default_spam_message'] === '1' ) {

				wp_die( __('<strong>' . $myoptions['default_spam_message_title'] . ':</strong> ' . $myoptions['default_spam_message_content']) );	

			} else {

				wp_die( __('<strong>' . $myoptions['custom_spam_message_title'] . ':</strong> ' . $myoptions['custom_spam_message_content']) );

			}		

		}
	}

}

$_SESSION['form_button_clicked'] = '1';

if ( trim($_POST['security']) === '' ) {

	wp_die( __($capresponseempty) );

  } else {

	$_SESSION['captcha_entered'] = trim($_POST['security']);

	if ( $_SESSION['alphaomega_captcha_case_sensitive'] === '1' ) {

		if ( trim($_POST['security']) !== $_SESSION['alphaomega_code'] ) {

  			wp_die( __($capresponsefail) );

  		}

	} else {

	if ( strtolower(trim($_POST['security'])) !== strtolower($_SESSION['alphaomega_code']) ) {

		wp_die( __($capresponsefail) );

	}

  }

}

if ( !empty($_POST['author']) && strpos($_POST['email'], '@') !== FALSE && strpos($_POST['email'], '.') !== FALSE ) {

	$_SESSION['form_button_clicked'] = '0';

}

}

add_action('pre_comment_on_post', 'stile_minima_kubi');  
 
function minlogin ($url, $username, $password) {

session_start();

include( "addenda/retop.php" );
include( $myoptions['captcha_language'] );

if ( isset($_POST['wp-submit']) ) {

	if ( !isset($_COOKIE["PHPSESSID"]) ) {

		wp_die( __($echimelomakarena) );

	}

	$tiine = array();

	if ( empty($username) ) {

		array_push($tiine, $adminusername);

	} else {

		$userdata = get_user_by('login', $username);

		if ( !$userdata ) {

			array_push($tiine, $adminusernamefail);

		}

	}

	if ( empty($password) ) {

		array_push($tiine, $adminpassword);

	} else {

		$userdata = apply_filters('wp_authenticate_user', $userdata, $password);

		if ( !wp_check_password($password, $userdata->user_pass, $userdata->ID) ) {

			array_push($tiine, $adminpasswordfail);

		}

	}

	if ( $myoptions['admin_captcha_on'] === '1' ) {

		if ( trim($_POST['security']) === '' ) {

			array_push($tiine, $adminseccode);

		} else {

			$_SESSION['captcha_entered'] = trim($_POST['security']);

			if ( $_SESSION['alphaomega_captcha_case_sensitive'] === '1' ) {

				if ( trim($_POST['security']) !== $_SESSION['alphaomega_code'] ) {

  					array_push($tiine, $adminseccodefail);

  				}

			} else {

				if ( strtolower(trim($_POST['security'])) !== strtolower($_SESSION['alphaomega_code']) ) {

  					array_push($tiine, $adminseccodefail);

				}

			}

		}

	}

$thecount = count($tiine);

if ( $thecount > 0 ) {

	switch ( $thecount ) {

		case 1:

		wp_die( __($adminpretextmessage .  ' &nbsp;&nbsp;' . $tiine[0]) );
		break;

		case 2:

		wp_die( __($adminpretextmessage .  ' &nbsp;&nbsp;' . $tiine[0] . ', &nbsp;&nbsp;' . $tiine[1]) );
		break;

		case 3:

		wp_die( __($adminpretextmessage .  ' &nbsp;&nbsp;' . $tiine[0] . ', &nbsp;&nbsp;' . $tiine[1] . ', &nbsp;&nbsp;' . $tiine[2]) );
		break;
	}

}

return $url;

}

}

add_filter( 'authenticate', 'minlogin', 10, 3 );

function cdacso () {

if ( get_option( 'alphaomega_captcha_settings' ) === FALSE ) {

	include( "addenda/defstichia.php" );
	update_option( 'alphaomega_captcha_settings', $myoptions );

}

}

register_activation_hook( __FILE__, 'cdacso' );

function dacso () {

if ( get_option( 'alphaomega_captcha_settings' ) !== FALSE ) {

	delete_option( 'alphaomega_captcha_settings' );

}

}

register_deactivation_hook( __FILE__, 'dacso' );

?>
