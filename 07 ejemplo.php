<html>
<head>
<title> Estructuras de control</title>
</head>
<body>
<center>
<H2>Sentencia<I>for</I></H2>
<?php
 echo "la suma de los 5 primeros multiplos de 7 es:";
 $suma = 0;
 for($i=1;$i<=5;$i++){
 	$multiplo = $i * 7;
 	$suma+= $multiplo;
 	echo "<BR>";
 	echo $multiplo;
 }
 echo "<BR>";
 echo "<B>$suma</B>";
?>
</body>
</html>