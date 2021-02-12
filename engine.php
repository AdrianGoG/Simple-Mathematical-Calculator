<?php
	
	function function_assembly() {

	if (isset($_GET['send'])) {
		
	$valass1 = $_REQUEST['valx'];
	$valass2 = $_REQUEST['valy'];

	if (!is_numeric($valass1) || !is_numeric($valass2) || $valass1 <= 0 || $valass2 <= 0) {
		
		echo '<p style="color: red;">'.'ERROR! Fields must contain numeric values ​​greater than "0"'.'</p>';	

	} else {

	$ad = $valass1 + $valass2;
	echo '<p style="text-align: center; font-size: 20px; margin-left: 3px; margin-top: 15px; width: 98%; color: white;">'.'Result : '.$ad.'</p>';
	}	
}
}


	function function_subtraction() {

	if (isset($_GET['goo'])) {
	 	
	$valsubs1 = $_REQUEST['sub1'];
	$valsubs2 = $_REQUEST['sub2'];

	if (!is_numeric($valsubs1) || !is_numeric($valsubs2) || $valsubs1 <= 0 || $valsubs2 <= 0) {
		
		echo '<p style="color: red;">'.'ERROR! Fields must contain numeric values ​​greater than "0"'.'</p>';	
	} else {

	$subsres = $valsubs1 - $valsubs2;

	echo '<p style="text-align: center; font-size: 20px; margin-left: 3px; margin-top: 15px; width: 98%; color: white;">'.'Result : '.$subsres.'</p>';
	}
}
}


function function_multiplication() {

	if (isset($_GET['gogo'])) {
	 	
	$valmult1 = $_REQUEST['mult1'];
	$valmult2 = $_REQUEST['mult2'];

	if (!is_numeric($valmult1) || !is_numeric($valmult2) || $valmult1 <= 0 || $valmult2 <= 0) {

		echo '<p style="color: red;">'.'ERROR! Fields must contain numeric values ​​greater than "0"'.'</p>';

	} else {

	$multres = $valmult1 * $valmult2;

	echo '<p style="text-align: center; font-size: 20px; margin-left: 3px; margin-top: 15px; width: 98%; color: white;">'.'Result : '.$multres.'</p>';
	}
}
}


function function_division() {

	if (isset($_GET['goend'])) {
	 	
	$valdiv1 = $_REQUEST['div1'];
	$valdiv2 = $_REQUEST['div2'];

	if (!is_numeric($valdiv1) || !is_numeric($valdiv2) || $valdiv1 <= 0 || $valdiv2 <= 0) {
		
		echo '<p style="color: red;">'.'ERROR! Fields must contain numeric values ​​greater than "0"'.'</p>';	

	} else {

	$divres = $valdiv1 / $valdiv2;

	echo '<p style="text-align: center; font-size: 20px; margin-left: 3px; margin-top: 15px; width: 98%; color: white;">'.'Result : '.$divres.'</p>';
	}
}
}


?>