<?php

if ( get_option( 'aostichia' ) !== FALSE ) {

	$michanionoma = ' AlphaOmega Captcha ';
	$aostichiaoa = get_option( 'aostichia' );
	if ( !array_key_exists('posakakominimaechoume', $aostichiaoa) || !array_key_exists('posakakominimaechoumeskini', $aostichiaoa) ) {

		$aostichiaoa['posakakominimaechoume']  = '0' ;
		$aostichiaoa['posakakominimaechoumeskini']  = '0' ;
		$aostichiaoa['stepposakakominimadeftero'] = 'MESSAGES';
		$aostichiaoa['dikomasstragisekolona'] = 'lose weight####buy this now####x-ray glasses####work from home####sex####viagra####greed is good####hypnotize your boss';
		$aostichiaoa['aostichiaarithmo']  = '3.0' ;
		update_option( 'aostichia', $aostichiaoa );

	}


} 

?>
