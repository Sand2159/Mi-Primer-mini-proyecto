<html>
<head>
<title> Actividad 2 </title>
</head>
<body>
<?php
$SalarioTrabajador = 3500;
$Impuesto = 20;

$Descuento = $SalarioTrabajador * $Impuesto / 100;
$ConImpuesto = $SalarioTrabajador - $Descuento;

echo "El sueldo del trabajador sin impuesto es: $SalarioTrabajador<br>";
echo "El sueldo del trabajador con el impuesto es: $ConImpuesto";
?>
</body>
</html>