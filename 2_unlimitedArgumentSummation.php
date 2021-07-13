<?php

function getSummation(...$numbers){
	$total=0;
	foreach ($numbers as $number) {
	 	$total += $number;
	 	yield $total;
	 }
	 return $total; 
}


$generator=getSummation(1, 2, 3, 10, 67, 45, 89, 0, -1);


foreach ($generator as $result) {
		echo "$result\n";
}
?>