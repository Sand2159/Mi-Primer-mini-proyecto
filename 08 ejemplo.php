<html>
<head>
<title> While </title>
</head>
<body>
<center>
<h2>Suma de un numero mas el mismo numero por 10</h2>
<?php
$numero=1;
while ($numero<=10){
	$suma= $numero+($numero * 10);
	echo "$numero+ ($numero x 10) es $suma <br>";
	$numero++;
}
?>
</body>
</html>