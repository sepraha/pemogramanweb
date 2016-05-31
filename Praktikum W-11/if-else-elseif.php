<?php
$nilai = 80;
if($nilai>=90){
	$grade = "A";
}elseif($nilai>=80){
	$grade = "B";
}elseif($nilai>=60){
	$grade = "C";
}else{
	$grade = "D";
}

echo "Jono mendapatkan nilai 80 pada mata kuliah pemograman, dan jono mendapatkan grade :".$grade;
?>