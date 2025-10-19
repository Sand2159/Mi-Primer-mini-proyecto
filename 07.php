<html>
<head>
<title> Estructuras de control</title>
</head>
<body>
<center>
<H2>Sentencia<I>for</I></H2>
<?php
 echo "la suma de los 10 primeros numeros enteros es:";
 $suma = 0;
 for($i=1;$i<=10;$i++){
 	$suma+=$i;
 	echo "<BR>";
 	echo $i;
 }
 echo "<BR>";
 echo "<B>$suma</B>";
?>
</body>
</html>