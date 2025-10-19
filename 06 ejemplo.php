<html>
<head>
<title> Switch</title>
</head>
<body>
<?php
$posicion = "Oeste";
switch ($posicion) {
	case "Sur":
	echo "La variable contiene";
	echo " el valor al sur";
	break;
    case "Norte":
	echo "La variable contiene";
	echo " el valor al norte";
	break;
	case "Este":
	echo "La variable contiene";
	echo " el valor al Este";
	break;
	case "Oeste":
	echo "La variable contiene";
	echo " el valor al Oeste";
	break;
default:
	echo "La variable contiene otro valor";
	echo " distinto de sur, norte, este y oeste";
}
?>
</body>
</html>