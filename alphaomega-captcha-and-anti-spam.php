<?php
/*
Plugin Name: AlphaOmega Captcha & Anti-Spam Filter
Plugin URI: http://alphaomegaplugins.com
Description: Provides Visually Appealing Captchas to Enhance and Secure your WordPress Comment Forms and Admin Log-In. Fortified with Anti-Spam Filter Protection.
Version: 1.7
Author: AlphaOmega Plugins
Author URI: http://alphaomegaplugins.com
License: GPL2
*/


session_start();


if ( get_option( 'aostichia' ) === FALSE ) {

	include( "addenda/defstichia.php" );
	update_option( 'aostichia', $aostichiaoa );

}

function asphaliaminimadixe () {

session_start();

include( "addenda/retop.php" ); 

if ( $aostichiaoa['dixeminimaticho'] === '1' ) {

	if ( isset($_SESSION['minimakubipatise']) ) {

		if ( $_SESSION['minimakubipatise'] === '0' ) {
	
			$_SESSION['tichoapantisiegrapse'] = '';
			$_SESSION['minimaegrapse'] = '';

		}

	}

	if ( strtolower(trim($aostichiaoa['tichoxanadixte'])) === 'reload' ) {

		$aostichiaoa['tichoxanadixte'] = $aostichiaoa['tichoxanadixte'] . $michanionoma;

	}

	if ( $aostichiaoa['minimatichotopos'] === '1' || $aostichiaoa['minimatichotopos'] === '2' ) {

		echo '<div style="padding-top:15px;padding-bottom:15px;"><label for="author">' . __( $aostichiaoa['tichoaristera'] ) . '</label> &nbsp;<img style="height:30px;vertical-align:middle" src="' . plugins_url( $aostichiaoa['tichomichaniselida'] , __FILE__ ) . '"> &nbsp;<a href="javascript:location.reload()" title="' . $aostichiaoa['tichoxanadixte'] . '" style="text-decoration:none;"><span style="font-size:2.2em;color:#e00000;vertical-align:middle;">&#10226;</span></a> &nbsp;<input id="asphaliakrifo" name="asphaliakrifo" type="text" value="' . $_SESSION['tichoapantisiegrapse'] . '" size="7" style="width:100px;"></div>';

	} else { 

		echo '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true">' . $_SESSION['minimaegrapse'] . '</textarea></p><div style="padding-top:15px;padding-bottom:15px;"><label for="author">' . __( $aostichiaoa['tichoaristera'] ) . '</label> &nbsp;<img style="height:30px;vertical-align:middle" src="' . plugins_url( $aostichiaoa['tichomichaniselida'] , __FILE__ ) . '"> &nbsp;<a href="javascript:location.reload()" title="' . $aostichiaoa['tichoxanadixte'] . '" style="text-decoration:none;"><span style="font-size:2.2em;color:#e00000;vertical-align:middle;">&#10226;</span></a> &nbsp;<input id="asphaliakrifo" name="asphaliakrifo" type="text" value="' . $_SESSION['tichoapantisiegrapse'] . '" size="7" style="width:100px;"></div>';

		}

if ( isset($_SESSION['minimakubipatise']) ) {

	$_SESSION['minimakubipatise'] = '0';

}

}

}

function asphaliastichiadixe () {

session_start();

include( "addenda/retop.php" );

if ( strtolower(trim($aostichiaoa['tichoxanadixte'])) === 'reload' ) {

	$aostichiaoa['tichoxanadixte'] = $aostichiaoa['tichoxanadixte'] . $michanionoma;

}

if ( $aostichiaoa['dixestichioticho'] === '1' ) {

	if ( $aostichiaoa['stichiotichotopos'] === '1' ) {

		echo '<div style="padding-top:15px;padding-bottom:15px;"><label for="author">' . __( $aostichiaoa['tichoaristera'] ) . '</label> &nbsp;<img style="height:30px;vertical-align:middle" src="' . plugins_url( $aostichiaoa['tichomichaniselida'] , __FILE__ ) . '"> &nbsp;<a href="javascript:location.reload()" title="' . $aostichiaoa['tichoxanadixte'] . '" style="text-decoration:none;"><span style="font-size:2.2em;color:#e00000;vertical-align:middle;">&#10226;</span></a> &nbsp;<input id="asphaliakrifo" name="asphaliakrifo" type="text" value="' . $_SESSION['tichoapantisiegrapse'] . '" size="9" style="width:160px;"></div>';

	} else {

		echo '<div style="padding-top:3px;padding-bottom:3px;"><label for="author">' . __( $aostichiaoa['tichoaristera'] ) . '</label></div>
<div style="padding-top:3px;padding-bottom:3px;"><img style="height:30px;vertical-align:middle" src="' . plugins_url( $aostichiaoa['tichomichaniselida'] , __FILE__ ) . '"> &nbsp;<a href="javascript:location.reload()" title="' . $aostichiaoa['tichoxanadixte'] . '" style="text-decoration:none;"><span style="font-size:2.2em;color:#e00000;vertical-align:middle;">&#10226;</span></a></div><div style="padding-top:3px;padding-bottom:3px;"><input id="asphaliakrifo" name="asphaliakrifo" type="text" value="' . $_SESSION['tichoapantisiegrapse'] . '" size="9" style="width:160px;"></div>';

	}

}

}

function dixeamesoseandenechimelomakarena () {

if ( !isset($_COOKIE["PHPSESSID"]) ) {

	include( "addenda/zacharoplastiodixeamesoseandenechi.php" );
	include( "addenda/retop.php" );

	if ( $aostichiaoa['glossa'] === '2' ) {

		echo $zacharoplastiodixeamesosdioeandenechi;

	} elseif ( $aostichiaoa['glossa'] === '4' ) {

		echo $zacharoplastiodixeamesosteseraeandenechi;

	} elseif ( $aostichiaoa['glossa'] === '3' ) {

		echo $zacharoplastiodixeamesostriaeandenechi;

	} elseif ( $aostichiaoa['glossa'] === '5' ) {

		echo $zacharoplastiodixeamesospenteeandenechi;

	} else {

		echo $zacharoplastiodixeamesosenaeandenechi;

	}

}

}

add_action( 'comment_form_before', 'dixeamesoseandenechimelomakarena' );


function asphaliaminimatoposepanomesikato () {

session_start();

include( "addenda/retop.php" );

if ( $aostichiaoa['dixeminimaticho'] === '1' ) {

	if ( $aostichiaoa['minimatichotopos'] === '1' ) {

		add_action( 'comment_form_before_fields', 'asphaliaminimadixe' );

	} elseif ( $aostichiaoa['minimatichotopos'] === '2' ) {

		add_action( 'comment_form_after_fields', 'asphaliaminimadixe' );

	} else {

		add_action( 'comment_form_field_comment', 'asphaliaminimadixe' );

	}

}

}

add_action( 'wp_head', 'asphaliaminimatoposepanomesikato' );

function asphaliastichiatoposepanomesikato () {

session_start();

include( "addenda/retop.php" );

if ( $aostichiaoa['dixestichioticho'] === '1' ) {

	if ( $aostichiaoa['stichiotichotopos'] === '1' ) {

		add_action( 'login_message', 'asphaliastichiadixe' );

	} else {

		add_action( 'login_form', 'asphaliastichiadixe' );

	}

} 

}

add_action( 'login_init', 'asphaliastichiatoposepanomesikato' );

function acpo () {

if ( get_option( 'aostichia' ) === FALSE ) {

	include( "addenda/defstichia.php" );
	update_option( 'aostichia', $aostichiaoa );

}

include_once "addenda/retop.php";

$stichiakubiapantisme = '';


if ( isset($_POST['protastichia']) ) {

	if ( $aostichiaoa['titichonadixis'] === '1' && $aostichiaoa['dixeminimaticho'] === '1' && $aostichiaoa['dixestichioticho'] === '0' && $aostichiaoa['minimatichotopos'] === '3' && $aostichiaoa['stichiotichotopos'] === '2' && $aostichiaoa['tichomichaniselida'] === 'addenda/asphaliadixeena.php' && $aostichiaoa['stragiseonoma'] === '0' && $aostichiaoa['stragisediefthinsi'] === '0' && $aostichiaoa['stragisehataftafpi'] === '0' && $aostichiaoa['stragiseminima'] === '1' && $aostichiaoa['stragisekabosaminima'] === '1' && $aostichiaoa['stragisemedikomas'] === '1' && $aostichiaoa['nadixisdikomaskakofaniminimaapantisi'] === '1' && $aostichiaoa['dikosustragiseklisto'] === '0' && $aostichiaoa['stragisemedikosu'] === '0' ) {

		if ( $aostichiaoa['glossa'] === '1' ) {

			$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#x2605;</div></td><td>The default settings are already in place. Please note that your Spam Filter is ON.</td></tr></table></left></div></div>';

		} elseif ( $aostichiaoa['glossa'] === '2' ) {

			$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#x2605;</div></td><td>既定の設定は、すでに場所でです。スパムフィルターはアクティブです。</td></tr></table></left></div></div>';

		} elseif ( $aostichiaoa['glossa'] === '3' ) {

			$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#x2605;</div></td><td>Οι προεπιλεγμένες ρυθμίσεις έχουν ήδη θεσπιστεί. Το φίλτρο ανεπιθύμητης αλληλογραφίας σας είναι ενεργή.</td></tr></table></left></div></div>';

		} elseif ( $aostichiaoa['glossa'] === '4' ) {

			$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#x2605;</div></td><td>기본 설정은 장소에 이미 있습니다. 스팸 방지 필터는 활성.</td></tr></table></left></div></div>';

		} elseif ( $aostichiaoa['glossa'] === '5' ) {

			$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#x2605;</div></td><td>預設設置已經到位。您的防垃圾郵件篩選器處於活動狀態。</td></tr></table></left></div></div>';

		}
	
	} else {

		$aostichiaoa['titichonadixis'] = '1';
		$aostichiaoa['dixeminimaticho'] = '1';
		$aostichiaoa['dixestichioticho'] = '0';
		$aostichiaoa['minimatichotopos'] = '3';
		$aostichiaoa['stichiotichotopos'] = '2';
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeena.php';
		$aostichiaoa['stragiseonoma'] = '0';
		$aostichiaoa['stragisediefthinsi'] = '0';
		$aostichiaoa['stragisehataftafpi'] = '0';
		$aostichiaoa['stragiseminima'] = '1';
		$aostichiaoa['stragisekabosaminima'] = '1';
		$aostichiaoa['stragisemedikomas'] = '1';
		$aostichiaoa['nadixisdikomaskakofaniminimaapantisi'] = '1';
		$aostichiaoa['dikosustragiseklisto'] = '0';
		$aostichiaoa['stragisemedikosu'] = '0';


		if ( $aostichiaoa['glossa'] === '1' ) {

			$aostichiaoa['tichoaristera'] = 'Please Enter Security Code';
			$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;">
<div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Good Job! The default settings have been successfully restored. Please note that your Spam Filter is ON.</td></tr></table></left></div></div>';

		} elseif ( $aostichiaoa['glossa'] === '2' ) {

			$aostichiaoa['tichoaristera'] = 'セキュリティ コードを入力して下さい'; 
			$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;">
<div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>おめでとうございます！ 既定の設定は正常に復元されています。スパムフィルターはアクティブです。</td></tr></table></left></div></div>';

		} elseif ( $aostichiaoa['glossa'] === '3' ) {

			$aostichiaoa['tichoaristera'] = 'Παρακαλώ εισάγετε κωδικό ασφαλείας'; 
			$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;">
<div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Συγχαρητήρια! Οι προεπιλεγμένες ρυθμίσεις έχουν αποκατασταθεί με επιτυχία. Το φίλτρο ανεπιθύμητης αλληλογραφίας σας είναι ενεργή.</td></tr></table></left></div></div>';

		} elseif ( $aostichiaoa['glossa'] === '4' ) {

			$aostichiaoa['tichoaristera'] = '보안 코드를 입력 하십시오.'; 
			$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;">
<div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>축 하! 기본 설정이 복원 되었습니다. 스팸 방지 필터는 활성.</td></tr></table></left></div></div>';

		} elseif ( $aostichiaoa['glossa'] === '5' ) {

			$aostichiaoa['tichoaristera'] = '請輸入安全代碼';
			$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;">
<div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>恭喜！ 已成功恢復預設設置。您的防垃圾郵件篩選器處於活動狀態。</td></tr></table></left></div></div>';

		}
	
		update_option( 'aostichia', $aostichiaoa );

	}

}

if ( isset($_POST['kenuriastichia']) ) {

$aostichiaoa['glossa'] = $_POST['glossa'];
$aostichiaoa['titichonadixis'] = $_POST['titichonadixis'];

if ( isset($_POST['tominimatichotopos']) ) {

	$aostichiaoa['dixeminimaticho'] = '1';

} else {

	$aostichiaoa['dixeminimaticho'] = '0';

}

if ( isset($_POST['tostichiotichotopos']) ) {

	$aostichiaoa['dixestichioticho'] = '1';

} else {

	$aostichiaoa['dixestichioticho'] = '0';

}

$aostichiaoa['minimatichotopos'] = $_POST['toalominimatichotopos'];
$aostichiaoa['stichiotichotopos'] = $_POST['toalostichiotichotopos'];

if ( isset($_POST['stragiseonoma']) ) {

	$aostichiaoa['stragiseonoma'] = '1';

} else {

	$aostichiaoa['stragiseonoma'] = '0';

}

if ( isset($_POST['stragisediefthinsi']) ) {

	$aostichiaoa['stragisediefthinsi'] = '1';

} else {

	$aostichiaoa['stragisediefthinsi'] = '0';

}

if ( isset($_POST['stragisehataftafpi']) ) {

	$aostichiaoa['stragisehataftafpi'] = '1';

} else {

	$aostichiaoa['stragisehataftafpi'] = '0';

}

if ( isset($_POST['stragiseminima']) ) {

	$aostichiaoa['stragiseminima'] = '1';

} else {

	$aostichiaoa['stragiseminima'] = '0';

}

if ( !isset($_POST['stragiseonoma']) && !isset($_POST['stragisediefthinsi']) && !isset($_POST['stragisehataftafpi']) && !isset($_POST['stragiseminima']) || trim($_POST['stragismakolona']) === '' || trim($_POST['stragismakolona']) === $aostichiaoa['stragiseklisto'] ) {

	$aostichiaoa['stragisekabosaminima'] = '0';

	if ( $aostichiaoa['glossa'] === '1' ) {

		$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Good Job! Your settings have been successfully saved. Please note that your Spam Filter is OFF.</td></tr></table></left></div></div>';

	} elseif ( $aostichiaoa['glossa'] === '2' ) {

		$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>おめでとうございます！ あなたの設定が正常に保存されました。スパムフィルターはアクティブではありません。</td></tr></table></left></div></div>';

	} elseif ( $aostichiaoa['glossa'] === '3' ) {

		$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Συγχαρητήρια! Αποθηκεύτηκαν με επιτυχία τις ρυθμίσεις σας. Το φίλτρο ανεπιθύμητης αλληλογραφίας σας δεν είναι ενεργή.</td></tr></table></left></div></div>';

	} elseif ( $aostichiaoa['glossa'] === '4' ) {

		$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>축 하! 설정이 성공적으로 저장 되었습니다. 스팸 방지 필터는 활성화 되지 않습니다.</td></tr></table></left></div></div>';

	} elseif ( $aostichiaoa['glossa'] === '5' ) {

		$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>恭喜！ 已成功保存您的設置。您的防垃圾郵件篩選器未處於活動狀態。</td></tr></table></left></div></div>';

	}
			
} else {

	$aostichiaoa['stragisekabosaminima'] = '1';

	if ( $aostichiaoa['glossa'] === '1' ) {

		$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Good Job! Your settings have been successfully saved. Please note that your Spam Filter is ON.</td></tr></table></left></div></div>';

	} elseif ( $aostichiaoa['glossa'] === '2' ) {

		$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>おめでとうございます！ あなたの設定が正常に保存されました。スパムフィルターはアクティブです。</td></tr></table></left></div></div>';

	} elseif ( $aostichiaoa['glossa'] === '3' ) {

		$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>Συγχαρητήρια! Αποθηκεύτηκαν με επιτυχία τις ρυθμίσεις σας. Το φίλτρο ανεπιθύμητης αλληλογραφίας σας είναι ενεργή.</td></tr></table></left></div></div>';

	} elseif ( $aostichiaoa['glossa'] === '4' ) {

		$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>축 하! 설정이 성공적으로 저장 되었습니다. 스팸 방지 필터는 활성.</td></tr></table></left></div></div>';

	} elseif ( $aostichiaoa['glossa'] === '5' ) {

		$stichiakubiapantisme = '<div style="padding-top:20px;padding-left:40px;padding-right:40px;text-align:left;"><div style="padding:20px;border:solid 1px #e0e0e0;background:#FFF8C6;text-align:left;font-size:1.2em;"><left><table><tr align="left"><td valign="left">
<div style="font-size:3.0em;color:#FF0000;padding-right:10px;">&#10004;</div></td><td>恭喜！ 已成功保存您的設置。您的防垃圾郵件篩選器處於活動狀態。</td></tr></table></left></div></div>';

	}

}

if ( trim($_POST['stragismakolona']) !== '' ) {

	$ftiaxestragismakolonastichio = preg_replace('~\r\n?~', '####', trim($_POST['stragismakolona']));

	if ( $ftiaxestragismakolonastichio === $aostichiaoa['dikomasstragisekolona'] || $ftiaxestragismakolonastichio === $aostichiaoa['dikosustragisekolonadenechitipotaminima'] ) {

		$aostichiaoa['stragisemedikomas'] = '1';
		$aostichiaoa['dikosustragiseklisto'] = '0';

	} else {

		$aostichiaoa['stragisemedikomas'] = '0';
		$aostichiaoa['dikosustragiseklisto'] = '1';

		if ( $ftiaxestragismakolonastichio !== $aostichiaoa['stragiseklisto'] ) {

			$aostichiaoa['dikosustragisekolona'] = $ftiaxestragismakolonastichio;

		}

	}

}

if ( trim($_POST['kakofanititlo']) !== '' && trim($_POST['kakofaniminima']) !== '' ) {

	if ( trim($_POST['kakofanititlo']) !== $aostichiaoa['kakofaniminimaapantasititlo'] ||  trim($_POST['kakofaniminima']) !== $aostichiaoa['kakofaniminimaapantasiminima'] ) {

		$aostichiaoa['dikosukakofaniminimaapantasititlo'] = trim($_POST['kakofanititlo']);
		$aostichiaoa['dikosukakofaniminimaapantasiminima'] = trim($_POST['kakofaniminima']);

		$aostichiaoa['stragisemedikosu'] = '1';
		$aostichiaoa['nadixisdikomaskakofaniminimaapantisi'] = '0';

	} else {

		$aostichiaoa['stragisemedikosu'] = '0';
		$aostichiaoa['nadixisdikomaskakofaniminimaapantisi'] = '1';

	}

}

if ( $aostichiaoa['glossa'] === '1' ) {

	$aostichiaoa['stichiaglossa'] = 'addenda/stichiaglossaena.php';
	$aostichiaoa['stragiseklisto'] ='The Spam Filter is OFF';
	$aostichiaoa['dikosustragisekolonadenechitipotaminima'] = 'Your Custom Spam Filter List Is Empty';
	$aostichiaoa['dikomasstragisekolona'] = 'Lose Weight####Buy This Now####Make Money####Work From Home####XXX####sex';				
	$aostichiaoa['kakofaniminimaapantasititlo'] = 'Comment Needs Modification';
	$aostichiaoa['kakofaniminimaapantasiminima'] = 'Please modify your comment as it may contain inappropriate and possibly spam-related content. Thank you.';

	$aostichiaoa['tichoglossa'] = 'addenda/commlangena.php';

	if ( $aostichiaoa['titichonadixis'] === '1' ) {

		$aostichiaoa['tichoaristera'] = 'Please Enter Security Code'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeena.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '2' ) {

		$aostichiaoa['tichoaristera'] = 'Please Do the Math'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedio.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '3' ) {

		$aostichiaoa['tichoaristera'] = 'Name the Artist'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixetria.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '4' ) {

		$aostichiaoa['tichoaristera'] = 'What Film Do You See?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixetesera.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '5' ) {

		$aostichiaoa['tichoaristera'] = 'Name the Author'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixepente.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '6' ) {

		$aostichiaoa['tichoaristera'] = 'Please Do the Science'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeexi.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '7' ) {

		$aostichiaoa['tichoaristera'] = 'Whom Do You See?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeefta.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '8' ) {

		$aostichiaoa['tichoaristera'] = 'What Does This Acronym Stand For?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeochto.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '9' ) {

		$aostichiaoa['tichoaristera'] = 'What Do You See?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeenea.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '10' ) {

		$aostichiaoa['tichoaristera'] = 'What City Do You See?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '11' ) {

		$aostichiaoa['tichoaristera'] = 'How Many?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeendeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '12' ) {

		$aostichiaoa['tichoaristera'] = 'Name the Sport'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedodeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '13' ) {

		$aostichiaoa['tichoaristera'] = 'Name the Film Director'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecatria.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '14' ) {

		$aostichiaoa['tichoaristera'] = 'What Do You See?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecatesera.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '15' ) {

		$aostichiaoa['tichoaristera'] = 'Country Associated with Currency?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecapente.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '16' ) {

		$aostichiaoa['tichoaristera'] = 'Country of Origin?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaexi.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '17' ) {

		$aostichiaoa['tichoaristera'] = 'What Do You See?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaefta.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '18' ) {

		$aostichiaoa['tichoaristera'] = 'What Do You See?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaochto.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '19' ) {

		$aostichiaoa['tichoaristera'] = 'What Do You See?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaenea.php';

	}

	$aostichiaoa['tichoxanadixte'] = ' Reload' . $michanionoma;

} elseif ( $aostichiaoa['glossa'] === '2' ) {

	$aostichiaoa['stichiaglossa'] = 'addenda/stichiaglossadio.php';
	$aostichiaoa['stragiseklisto'] ='スパムフィルターはアクティブではありません';
	$aostichiaoa['dikosustragisekolonadenechitipotaminima'] = 'カスタムスパムフィルター リストが空です';
	$aostichiaoa['dikomasstragisekolona'] = '重量を失う####金持ちになる####アダルト ビデオ####セックス';				
	$aostichiaoa['kakofaniminimaapantasititlo'] = 'コメントの変更が必要';
	$aostichiaoa['kakofaniminimaapantasiminima'] = '不適切なおそらくスパム関連のコンテンツを含めることがあなたのコメントに変更して下さい。';

	$aostichiaoa['tichoglossa'] = 'addenda/commlangdio.php';

	if ( $aostichiaoa['titichonadixis'] === '1' ) {

		$aostichiaoa['tichoaristera'] = 'セキュリティ コードを入力して下さい'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeena.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '2' ) {

		$aostichiaoa['tichoaristera'] = '答えは何ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedio.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '3' ) {

		$aostichiaoa['tichoaristera'] = 'アーティストは誰ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixetria.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '4' ) {

		$aostichiaoa['tichoaristera'] = 'どんな映画ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixetesera.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '5' ) {

		$aostichiaoa['tichoaristera'] = '作者は誰ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixepente.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '6' ) {

		$aostichiaoa['tichoaristera'] = '答えは何ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeexi.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '7' ) {

		$aostichiaoa['tichoaristera'] = '誰か。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeefta.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '8' ) {

		$aostichiaoa['tichoaristera'] = 'この頭字語はどういう意味ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeochto.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '9' ) {

		$aostichiaoa['tichoaristera'] = '何を見るか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeenea.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '10' ) {

		$aostichiaoa['tichoaristera'] = 'どの都市ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '11' ) {

		$aostichiaoa['tichoaristera'] = 'いくつ。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeendeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '12' ) {

		$aostichiaoa['tichoaristera'] = 'スポーツは何ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedodeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '13' ) {

		$aostichiaoa['tichoaristera'] = '映画監督は誰ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecatria.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '14' ) {

		$aostichiaoa['tichoaristera'] = '何を見るか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecatesera.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '15' ) {

		$aostichiaoa['tichoaristera'] = 'どの国を使用してこの通貨ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecapente.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '16' ) {

		$aostichiaoa['tichoaristera'] = 'どの国の起源この食品ですか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaexi.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '17' ) {

		$aostichiaoa['tichoaristera'] = '何を見るか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaefta.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '18' ) {

		$aostichiaoa['tichoaristera'] = '何を見るか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaochto.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '19' ) {

		$aostichiaoa['tichoaristera'] = '何を見るか。'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaenea.php';

	}

	$aostichiaoa['tichoxanadixte'] = $michanionoma . 'の再読み込み ';

} elseif ( $aostichiaoa['glossa'] === '3' ) {

	$aostichiaoa['stichiaglossa'] = 'addenda/stichiaglossatria.php';
	$aostichiaoa['stragiseklisto'] ='Το φίλτρο ανεπιθύμητης αλληλογραφίας σας δεν είναι ενεργή';
	$aostichiaoa['dikosustragisekolonadenechitipotaminima'] = 'σας προσαρμοσμένη λίστα φίλτρου ανεπιθύμητης αλληλογραφίας είναι κενό';				
	$aostichiaoa['dikomasstragisekolona'] = 'χάσετε βάρος####Αγοράστε τώρα####Γίνετε Πλούσιοι####Ενήλικα Βίντεο';
	$aostichiaoa['kakofaniminimaapantasititlo'] = 'Σχόλιο χρειάζεται τροποποίηση';
	$aostichiaoa['kakofaniminimaapantasiminima'] = 'Τροποποιήστε την παρατήρησή σας, όπως μπορεί να περιέχει περιεχόμενο ακατάλληλη και ενδεχομένως σχετίζονται με ανεπιθύμητη αλληλογραφία.';

	$aostichiaoa['tichoglossa'] = 'addenda/commlangtria.php';

	if ( $aostichiaoa['titichonadixis'] === '1' ) {

		$aostichiaoa['tichoaristera'] = 'Παρακαλώ εισάγετε κωδικό ασφαλείας'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeena.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '2' ) {

		$aostichiaoa['tichoaristera'] = 'Ποια είναι η απάντηση;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedio.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '3' ) {

		$aostichiaoa['tichoaristera'] = 'Ποιος είναι ο καλλιτέχνης;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixetria.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '4' ) {

		$aostichiaoa['tichoaristera'] = 'Τι ταινία βλέπετε;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixetesera.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '5' ) {

		$aostichiaoa['tichoaristera'] = 'Ποιος είναι ο συντάκτης;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixepente.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '6' ) {

		$aostichiaoa['tichoaristera'] = 'Ποια είναι η απάντηση;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeexi.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '7' ) {

		$aostichiaoa['tichoaristera'] = 'Ποιος είναι;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeefta.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '8' ) {

		$aostichiaoa['tichoaristera'] = 'Τι σημαίνει αυτό το ακρωνύμιο;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeochto.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '9' ) {

		$aostichiaoa['tichoaristera'] = 'Tι βλέπετε;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeenea.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '10' ) {

		$aostichiaoa['tichoaristera'] = 'Τι πόλη βλέπετε;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '11' ) {

		$aostichiaoa['tichoaristera'] = 'Πόσα;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeendeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '12' ) {

		$aostichiaoa['tichoaristera'] = 'Τι είναι το άθλημα;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedodeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '13' ) {

		$aostichiaoa['tichoaristera'] = 'Ποιος είναι ο σκηνοθέτης;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecatria.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '14' ) {

		$aostichiaoa['tichoaristera'] = 'Tι βλέπετε;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecatesera.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '15' ) {

		$aostichiaoa['tichoaristera'] = 'Ποια χώρα που χρησιμοποιεί αυτό το νόμισμα;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecapente.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '16' ) {

		$aostichiaoa['tichoaristera'] = 'Ποια χώρα προέρχεται αυτή τροφίμων;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaexi.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '17' ) {

		$aostichiaoa['tichoaristera'] = 'Tι βλέπετε;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaefta.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '18' ) {

		$aostichiaoa['tichoaristera'] = 'Tι βλέπετε;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaochto.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '19' ) {

		$aostichiaoa['tichoaristera'] = 'Tι βλέπετε;'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaenea.php';

	}

	$aostichiaoa['tichoxanadixte'] = ' Νέα φόρτωση' . $michanionoma;

} elseif ( $aostichiaoa['glossa'] === '4' ) {

	$aostichiaoa['stichiaglossa'] = 'addenda/stichiaglossatesera.php';
	$aostichiaoa['stragiseklisto'] ='스팸 방지 필터는 활성화 되지 않습니다';
	$aostichiaoa['dikosustragisekolonadenechitipotaminima'] = '사용자 지정 스팸 필터 목록 비어 있습니다.';
	$aostichiaoa['dikomasstragisekolona'] = '패 무게####지금 구입####부자 되기####섹스';				
	$aostichiaoa['kakofaniminimaapantasititlo'] = '댓글 수정 필요';
	$aostichiaoa['kakofaniminimaapantasiminima'] = '으로 부적절 하 고 아마 스팸 관련 콘텐츠를 포함할 수 있습니다 귀하의 코멘트를 수정 하십시오.';

	$aostichiaoa['tichoglossa'] = 'addenda/commlangtesera.php';

	if ( $aostichiaoa['titichonadixis'] === '1' ) {

		$aostichiaoa['tichoaristera'] = '보안 코드를 입력 하십시오.'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeena.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '2' ) {

		$aostichiaoa['tichoaristera'] = '대답은 무엇입니까?';
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedio.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '3' ) {

		$aostichiaoa['tichoaristera'] = '작가 누구 입니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixetria.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '4' ) {

		$aostichiaoa['tichoaristera'] = '당신은 어떤 영화를 봅니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixetesera.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '5' ) {

		$aostichiaoa['tichoaristera'] = '저자는 누구 인가.입니다?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixepente.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '6' ) {

		$aostichiaoa['tichoaristera'] = '대답은 무엇입니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeexi.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '7' ) {

		$aostichiaoa['tichoaristera'] = '누가 볼 수 있습니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeefta.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '8' ) {

		$aostichiaoa['tichoaristera'] = '이 약자는 무엇을 의미 합니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeochto.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '9' ) {

		$aostichiaoa['tichoaristera'] = '당신은 무엇을 봅니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeenea.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '10' ) {

		$aostichiaoa['tichoaristera'] = '어떤 도시를 보십니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '11' ) {

		$aostichiaoa['tichoaristera'] = '몇 개나요?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeendeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '12' ) {

		$aostichiaoa['tichoaristera'] = '스포츠는 무엇 인가.입니다?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedodeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '13' ) {

		$aostichiaoa['tichoaristera'] = '누가 영화 감독?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecatria.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '14' ) {

		$aostichiaoa['tichoaristera'] = '당신은 무엇을 봅니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecatesera.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '15' ) {

		$aostichiaoa['tichoaristera'] = '사용 하 여 어떤 나라가이 통화?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecapente.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '16' ) {

		$aostichiaoa['tichoaristera'] = '어떤 나라의 유래이 음식?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaexi.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '17' ) {

		$aostichiaoa['tichoaristera'] = '당신은 무엇을 봅니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaefta.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '18' ) {

		$aostichiaoa['tichoaristera'] = '당신은 무엇을 봅니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaochto.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '19' ) {

		$aostichiaoa['tichoaristera'] = '당신은 무엇을 봅니까?'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaenea.php';

	}

	$aostichiaoa['tichoxanadixte'] = $michanionoma . '를 다시 로드  ';

} elseif ( $aostichiaoa['glossa'] === '5' ) {

	$aostichiaoa['stichiaglossa'] = 'addenda/stichiaglossapente.php';
	$aostichiaoa['stragiseklisto'] ='您的防垃圾郵件篩選器未處於活動狀態';
	$aostichiaoa['dikosustragisekolonadenechitipotaminima'] = '您自訂垃圾郵件篩選器清單是空的';	
	$aostichiaoa['dikomasstragisekolona'] = '減肥####現在買####變得富有####性別';			
	$aostichiaoa['kakofaniminimaapantasititlo'] = '注釋需要改進';
	$aostichiaoa['kakofaniminimaapantasiminima'] = '請修改您的評論，因為它可能包含不適當和可能與垃圾郵件有關的內容。';

	$aostichiaoa['tichoglossa'] = 'addenda/commlangpente.php';

	if ( $aostichiaoa['titichonadixis'] === '1' ) {

		$aostichiaoa['tichoaristera'] = '請輸入安全代碼'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeena.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '2' ) {

		$aostichiaoa['tichoaristera'] = '答案是什麼？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedio.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '3' ) {

		$aostichiaoa['tichoaristera'] = '這位演出者是誰？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixetria.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '4' ) {

		$aostichiaoa['tichoaristera'] = '你看見什麼片子？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixetesera.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '5' ) {

		$aostichiaoa['tichoaristera'] = '作者是誰？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixepente.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '6' ) {

		$aostichiaoa['tichoaristera'] = '答案是什麼？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeexi.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '7' ) {

		$aostichiaoa['tichoaristera'] = '你看到了誰？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeefta.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '8' ) {

		$aostichiaoa['tichoaristera'] = '這首字母縮寫詞是什麼意思呢？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeochto.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '9' ) {

		$aostichiaoa['tichoaristera'] = '你看到了什麼？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeenea.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '10' ) {

		$aostichiaoa['tichoaristera'] = '你看見什麼城市？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '11' ) {

		$aostichiaoa['tichoaristera'] = '幾個？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixeendeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '12' ) {

		$aostichiaoa['tichoaristera'] = '這項運動是什麼？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedodeca.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '13' ) {

		$aostichiaoa['tichoaristera'] = '電影導演是誰？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecatria.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '14' ) {

		$aostichiaoa['tichoaristera'] = '你看到了什麼？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecatesera.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '15' ) {

		$aostichiaoa['tichoaristera'] = '哪些國家使用此貨幣嗎？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecapente.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '16' ) {

		$aostichiaoa['tichoaristera'] = '哪些國家起源這種食物呢？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaexi.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '17' ) {

		$aostichiaoa['tichoaristera'] = '你看到了什麼？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaefta.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '18' ) {

		$aostichiaoa['tichoaristera'] = '你看到了什麼？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaochto.php';

	} elseif ( $aostichiaoa['titichonadixis'] === '19' ) {

		$aostichiaoa['tichoaristera'] = '你看到了什麼？'; 
		$aostichiaoa['tichomichaniselida'] = 'addenda/asphaliadixedecaenea.php';

	}

	$aostichiaoa['tichoxanadixte'] = $michanionoma . '重新載入驗證碼 ';

}


update_option( 'aostichia', $aostichiaoa );

}

include( "addenda/asis.php" );
include( $aostichiaoa['stichiaglossa'] );
include( "addenda/stichiabase.php" );

}

function aokato ( $kola, $selida ) {

    if ( $selida == plugin_basename(__FILE__) && function_exists( 'admin_url' ) ) {

        $ftiaxe = '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=5YMUQTV2LVAW6&item_name=AlphaOmega-Captcha-Anti-Spam-Filter--WordPress--Plugin">' . __('Please Donate') . '</a>';
        array_unshift( $kola, $ftiaxe );
        $ftiaxe = '<a href="' . admin_url( 'plugins.php?page=alphaomega_captcha_and_antispam' ) . '">' . __('Settings') . '</a>';
        array_unshift( $kola, $ftiaxe );

    }

    return $kola;

}

add_filter( 'plugin_action_links', 'aokato', 10, 2 );

function aodexia () {

	add_plugins_page( 'AlphaOmega Captcha & Anti-Spam Filter Settings', 'AlphaOmega Captcha & Anti-Spam Filter Settings', 'manage_options', 'alphaomega_captcha_and_antispam', 'acpo' );

}

add_action( 'admin_menu', 'aodexia' );

function stile_minima_kubi () {

session_start();

include( "addenda/retop.php" );
include( $aostichiaoa['tichoglossa'] );

if ( !isset($_COOKIE["PHPSESSID"]) ) {

	wp_die( __($echimelomakarena) );

}

$_SESSION['minimakubipatise'] = '1';
$_SESSION['tichoapantisiegrapse'] = trim($_POST['asphaliakrifo']);
$_SESSION['minimaegrapse'] = trim($_POST['comment']);


if ( $aostichiaoa['stragisekabosaminima'] === '1' && (!empty($_POST['author']) || !empty($_POST['email']) || !empty($_POST['url']) || !empty($_POST['comment'])) ) {

	if ( $aostichiaoa['stragisemedikomas'] === '1' ) {

		$ftiaxedikomasstragismakolona = explode("####", strtolower($aostichiaoa['dikomasstragisekolona']));

	} else {

		$ftiaxedikomasstragismakolona = explode("####", strtolower($aostichiaoa['dikosustragisekolona']));

	}

	include( "addenda/oakolaao.php" );

	if ( $aostichiaoa['stragiseonoma'] === '1' ) {

		if ( !empty($_POST['author']) ) 

			$tiegrapseopelatis .= strtolower(trim($_POST['author'])) . $aokolaoa;

	}

	if ( $aostichiaoa['stragisediefthinsi'] === '1' ) {

		if ( !empty($_POST['email']) )

			$tiegrapseopelatis .= strtolower(trim($_POST['email'])) . $aokolaoa;

	}

	if ( $aostichiaoa['stragisehataftafpi'] === '1' ) {

		if ( !empty($_POST['url']) )

			$tiegrapseopelatis .= strtolower(trim($_POST['url'])) . $aokolaoa;

	}

	if ( $aostichiaoa['stragiseminima'] === '1' ) {

		if ( !empty($_POST['comment']) )

			$tiegrapseopelatis .= strtolower(trim($_POST['comment']));

	}

	for ( $ikakofani = 0; $ikakofani < count($ftiaxedikomasstragismakolona); $ikakofani++ ) {

		if ( strpos($tiegrapseopelatis, $ftiaxedikomasstragismakolona[$ikakofani]) !== FALSE ) {

			if ( $aostichiaoa['nadixisdikomaskakofaniminimaapantisi'] === '1' ) {

				wp_die( __('<strong>' . $aostichiaoa['kakofaniminimaapantasititlo'] . ':</strong> ' . $aostichiaoa['kakofaniminimaapantasiminima']) );	

			} else {

				wp_die( __('<strong>' . $aostichiaoa['dikosukakofaniminimaapantasititlo'] . ':</strong> ' . $aostichiaoa['dikosukakofaniminimaapantasiminima']) );

			}		

		}
	}

}

if ( trim($_POST['asphaliakrifo']) === '' ) {

	wp_die( __($opelatesdenapantise) );

} else {

	if ( $_SESSION['aoakrivosidiolexi'] === '1' ) {

		if ( trim($_POST['asphaliakrifo']) !== $_SESSION['aokrifoklidislexi'] ) {

  			wp_die( __($opelatesapantiselathos) );

 		}

	} else {

		if ( strpos($_SESSION['aokrifoklidislexi'], '。。。。') === FALSE ) {

			if ( strtolower(trim($_POST['asphaliakrifo'])) !== strtolower($_SESSION['aokrifoklidislexi']) ) {

				wp_die( __($opelatesapantiselathos) );

			}
		
		} else {

			$toutocolona = explode('。。。。', $_SESSION['aokrifoklidislexi']);
			
			$toutiocolona = 0;

			for ($touitocolona = 0; $touitocolona < count($toutocolona); $touitocolona++) {

				if ( strtolower($toutocolona[$touitocolona]) === strtolower(trim($_POST['asphaliakrifo'])) )

					$toutiocolona = 1;

			}

			if ( $toutiocolona == 0 ) {

				wp_die( __($opelatesapantiselathos) );

			}

		} 

  	}

}

if ( !empty($_POST['author']) && strpos($_POST['email'], '@') !== FALSE && strpos($_POST['email'], '.') !== FALSE && trim($_POST['comment']) !== '' ) {

	$_SESSION['minimakubipatise'] = '0';

}

}

add_action('pre_comment_on_post', 'stile_minima_kubi');   
 
function stichiaembros ($url, $username, $password) {

session_start();

include( "addenda/retop.php" );
include( $aostichiaoa['tichoglossa'] );

if ( isset($_POST['wp-submit']) ) {

	if ( !isset($_COOKIE["PHPSESSID"]) ) {

		wp_die( __($echimelomakarena) );

	}

	$tiine = array();

	if ( empty($username) ) {

		array_push($tiine, $stichioonoma);

	} else {

		$userdata = get_user_by('login', $username);

		if ( !$userdata ) {

			array_push($tiine, $stichioonomalathos);

		}

	}

	if ( empty($password) ) {

		array_push($tiine, $stichioklidi);

	} else {

		$userdata = apply_filters('wp_authenticate_user', $userdata, $password);

		if ( !wp_check_password($password, $userdata->user_pass, $userdata->ID) ) {

			array_push($tiine, $stichioklidilathos);

		}

	}



if ( $aostichiaoa['dixestichioticho'] === '1' ) {

	if ( trim($_POST['asphaliakrifo']) === '' ) {

		array_push($tiine, $stichiokliditichograpse);

	} else {

		$_SESSION['tichoapantisiegrapse'] = trim($_POST['asphaliakrifo']);
		$_SESSION['minimaegrapse'] = trim($_POST['comment']);

		if ( $_SESSION['aoakrivosidiolexi'] === '1' ) {

			if ( trim($_POST['asphaliakrifo']) !== $_SESSION['aokrifoklidislexi'] ) {

				array_push($tiine, $stichiokliditicholathos);

			}

		} else {

			if ( strpos($_SESSION['aokrifoklidislexi'], '。。。。') === FALSE ) {

				if ( strtolower(trim($_POST['asphaliakrifo'])) !== strtolower($_SESSION['aokrifoklidislexi']) ) {

					array_push($tiine, $stichiokliditicholathos);

				}
		
			} else {

				$toutocolona = explode('。。。。', $_SESSION['aokrifoklidislexi']);
			
				$toutiocolona = 0;

				for ($touitocolona = 0; $touitocolona < count($toutocolona); $touitocolona++) {

					if ( strtolower($toutocolona[$touitocolona]) === strtolower(trim($_POST['asphaliakrifo'])) )

						$toutiocolona = 1;

				}

				if ( $toutiocolona == 0 ) {

					array_push($tiine, $stichiokliditicholathos);

				}

			} 

		}

	}

}

$thecount = count($tiine);

if ( $thecount > 0 ) {

	switch ( $thecount ) {

		case 1:

		wp_die( __($stichioegrapsedeninearketo .  ' &nbsp;&nbsp;' . $tiine[0]) );
		break;

		case 2:

		wp_die( __($stichioegrapsedeninearketo .  ' &nbsp;&nbsp;' . $tiine[0] . ', &nbsp;&nbsp;' . $tiine[1]) );
		break;

		case 3:

		wp_die( __($stichioegrapsedeninearketo .  ' &nbsp;&nbsp;' . $tiine[0] . ', &nbsp;&nbsp;' . $tiine[1] . ', &nbsp;&nbsp;' . $tiine[2]) );
		break;
	}

}

return $url;

}

}

add_filter( 'authenticate', 'stichiaembros', 10, 3 );

function cdacso () {

if ( get_option( 'aostichia' ) === FALSE ) {

	include( "addenda/defstichia.php" );
	update_option( 'aostichia', $aostichiaoa );

}

}

register_activation_hook( __FILE__, 'cdacso' );

function dacso () {

if ( get_option( 'aostichia' ) !== FALSE ) {

	delete_option( 'aostichia' );

}

}

register_deactivation_hook( __FILE__, 'dacso' );

?>
