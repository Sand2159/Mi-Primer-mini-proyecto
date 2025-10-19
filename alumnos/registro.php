<?php
$no_cuenta = $_POST["no_cuenta"];
$nombre = $_POST["nombre"];
$apat = $_POST["apat"];
$amat = $_POST["amat"];
$edad = $_POST["edad"];
$materia = $_POST["materia"];
$turno = $_POST["turno"];
$comentarios = $_POST["comentarios"];

	if(!empty($no_cuenta) && !empty($nombre) && !empty($apat) && !empty($amat) && !empty($edad) && !empty($materia) && !empty($turno) && !empty($comentarios))
	{
	   include "conexion.php";//se establece la conexion dentro de la variable $conectar
//Ejecucion de la sentencia SQL
           $consulta="insert into alumnos(no_cta, nombre, apat, amat, edad, materia, turno, comentarios) values ('$no_cuenta','$nombre','$apat','$amat','$edad','$materia','$turno','$comentarios')";
	   $conectar->query($consulta);
	   echo "El registro fue insertado correctamente <BR>";
	   echo "<a href=\"index.html\">Pagina Principal</a>";

	}else {
		
	   echo "ingresa todos los datos por favor";
	   echo "<a href=\"index.html\">Pagina Principal</a>";

	}
?>
