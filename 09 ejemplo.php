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
$nombre="Sandy";
for ($x=1;$x<5;$x++){
	echo "Impresion $x tu nombre es: $nombre <br>";
}
//while
echo "<br> Ciclo while <br>";
$edad= 24;
$x=1;
while ($x<=4){
	echo "Impresion $x tu edad es: $edad <br>";
	$x++;
}
//do-while
echo "<br> Ciclo do-while <br>";
$color= "Azul";
$x=1;
do {
	echo "Impresion $x tu color favorito es: $color <br>";
	$x= $x + 1;
} while ($x <=3);
?>
</body>
</html>