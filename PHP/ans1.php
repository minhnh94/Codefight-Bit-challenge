<?php
function killKthBit($n, $k) {
	$nInBase2 = base_convert($n, 10, 2);
	// echo $nInBase2 . "<br>";
	$kInBase2 = base_convert(2 ** ($k-1), 10, 2);
	// echo $kInBase2 . "<br>";
	
	return $nInBase2 ^ $kInBase2;
}

echo killKthBit(37,3);
// echo 0b100101^0b100;
