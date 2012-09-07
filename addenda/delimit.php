<?php

	$_delimiter_ = '';
	$numxers = 10;
	$this_array = array();
	$this_array = array('2', '3', '4', '5', '6', '7', '8', '9', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');
	for ( $ibide = 0; $ibide < $numxers; $ibide++ )
	{

		shuffle($this_array);
		$_delimiter_ .= $this_array[mt_rand(0, count($this_array) - 1)];
	
	}

?>
