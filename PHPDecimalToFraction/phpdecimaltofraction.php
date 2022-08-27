<?php
/*
 * Coding by ZZZ
 */
class phpdecimaltofraction{ 
	function getFractionAndMixedNumbers($input){
		$input = round($input, 7);
		$outputs = array();
		for($mixed_numbers = 0; $mixed_numbers <11; $mixed_numbers++){
			for($denominator = 1; $denominator <11; $denominator++){
				for($numerator=0;$numerator<11;$numerator++){
					$temp = round(($mixed_numbers + ($numerator/$denominator)), 7);
					if($temp - $input == 0){
						$output = "Mixed numbers: ". $mixed_numbers . ", Numerator: ". $numerator . ", Denomirator: ". $denominator;
						array_push($outputs, $output);
					}
				}
			}
		}
		return $outputs;	
	}
}
?>
