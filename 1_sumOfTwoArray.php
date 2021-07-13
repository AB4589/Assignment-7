<?php

$array1 = [1, 2, 3, 4, 5];
$array2 = [10, 8, 7, 2, 1];
if(count($array1)==count($array2)){
	$sum=[];
	for($i=0;$i<count($array1);$i++){
		$sum=$array1[$i]+$array2[$i];
		echo $sum;
		echo "</br>";
	}
}



?>