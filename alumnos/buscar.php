<HTML>
<TITLE>Manipulando una BD</TITLE>
<h1>
<CENTER>
Datos del Alumno
</h1>
</CENTER>
<BR>
<center>
<table border="1">
  <tr bgcolor="#336699" style="color:#FF6";><td>No. Cuenta</td><td>Nombre</td><td>Edad</td><td>Materia</td><td>Turno</td><td>Comentarios</td></tr>
<?php
   $CLAVE = $_POST["CLAVE"];
   include "conexion.php";
   $myconsulta=$conectar->query("select * from alumnos where nocta='$CLAVE' ");
   $filas=$myconsulta->num_rows;        
   if($filas >= 1)
   {
      while($lafila=$myconsulta->fetch_assoc()) 
      {
?>
<tr bgcolor="#CEF6F5" onmouseover="this.style.background='#FFD961';" onmouseout="this.style.background='#CEF6F5';">
     <td> <?php echo $lafila['nocta']; ?> </td>
     <td> <?php echo $lafila["nombre"]." ".$lafila["apat"]." ".$lafila["amat"]; ?></td>
     <td> <?php echo $lafila['edad']; ?> </td>
     <td> <?php echo $lafila['materia']; ?> </td>
     <td> <?php echo $lafila['turno']; ?> </td>
     <td> <?php echo $lafila['comentarios']; ?> </td>
  </tr>

<?php
      }//fin del while
   } else 
   {
     echo "<BR><h1> Registro no encontrado </h1><BR>";
     echo "<a href=buscar.html>Volver a buscar\n";
   }//fin del else
?>
</table>
<br>
<a href='index.html'>Pagina Principal</a> 
</center>
</HTML>
