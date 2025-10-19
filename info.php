<html>
<head>
<title>Ejemplo de Constantes en PHP</title>
</head>
<body>
<h1>Primer ejemplo de Constantes</h1>

<?php
// Declaración de constantes en PHP
define("PI", 3.1416);
define("SALUDO", "¡Hola, bienvenido al curso de PHP!");
define("AUTOR", "Sandra");

// Uso de echo para mostrar mensajes con las constantes
echo "<p>".SALUDO."</p>";
echo "<p>La constante PI tiene el valor: <b>".PI."</b></p>";
echo "<p>Este ejemplo fue escrito por: <b>".AUTOR."</b></p>";
?>

</body>
</html>
