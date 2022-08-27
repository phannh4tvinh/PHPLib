<?php
require_once 'phpdecimaltofraction.php';
$dtf = new phpdecimaltofraction();
foreach ($dtf->getFractionAndMixedNumbers(7/5) as $value){
	echo $value . "<br>";
}
/*
 * output
 * Mixed numbers: 0, Numerator: 1, Denomirator: 3
 * Mixed numbers: 0, Numerator: 2, Denomirator: 6
 * Mixed numbers: 0, Numerator: 3, Denomirator: 9
 */
?>