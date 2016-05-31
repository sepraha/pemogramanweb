<html>
<head>
	<title>Operator</title>
</head>
<body>
<hr>
Operator Aritmatika
<hr>
<?php 
$x = 10;
$y = 6;

echo $x + $y; echo "<br>";
echo $x - $y; echo "<br>";
echo $x * $y; echo "<br>";
echo $x / $y; echo "<br>";
echo $x % $y; echo "<br>";
//echo $x ** $y; echo "<br>";
?>
<hr>
Comparison Assignment Operator
<hr>
<?php 
$x = '10';
$y = 10;

$compare = $x == $y;
var_dump($compare); echo "<br>";

$compare = $x === $y;
var_dump($compare); echo "<br>";

$compare = $x != $y;
var_dump($compare); echo "<br>";

$compare = $x <> $y;
var_dump($compare); echo "<br>";

$compare = $x !== $y;
var_dump($compare); echo "<br>";

$compare = $x < $y;
var_dump($compare); echo "<br>";

$compare = $x > $y;
var_dump($compare); echo "<br>";

$compare = $x >= $y;
var_dump($compare); echo "<br>";

$compare = $x <= $y;
var_dump($compare); echo "<br>";
?>
<hr>
Logical Operator
<hr>
<?php 
if ($x == $y AND $x === $y){
	echo "Match<br>";
}
if ($x == $y OR $x === $y) {
	echo "Match but not identic<br>";
}
if ($x == $y XOR $x === $y) {
	echo "Result of XOR<br>";
}
if ($x != 0){
	echo "Not Zero<br>";
}
 ?>
</body>
</html>