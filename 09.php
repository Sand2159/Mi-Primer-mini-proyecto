<html>
<head>
<title> While </title>
</head>
<body>
<center>
<h2>09</h2>
<?php
//for
echo "Ciclo for <br>";
for ($x=1;$x<2;$x++){
	echo "El ciclo se ha repetido $x veces <br>";
}
//while
echo "<br> Ciclo while <br>";
$x=1;
while ($x<=3){
	echo "El ciclo se ha repetido $x veces<br>";
	$x = $x + 1;
}
//do-while
echo "<br> Ciclo do-while <br>";
$x=1;
do {
	echo "El ciclo se ha repetido $x veces<br>";
	$x= $x + 1;
} while ($x < 5);
?>
</body>
</html>