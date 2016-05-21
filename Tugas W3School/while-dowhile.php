<?php
$i = 1;
while($i <= 10) { 
	$j=1;
	while($j <= $i) { 
		echo $j;
		$j++;
	}
	echo "<br>";
	$i++;
}

$k = 9;
do{
	$m = 1;
	do{
		echo $m;
		$m++;
	}while($m <= $k);
	echo "<br>";
	$k--;
}while($k >=1);
?>