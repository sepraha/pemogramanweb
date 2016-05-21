<?php
for ($i=1; $i <= 10; $i++) { 
	for ($j=1; $j <= 10 ; $j++) { 
		if($j==$i){
			echo "1    ";
		}else{
			echo "0    ";
		}
	}
	echo "<br>";
}

?>