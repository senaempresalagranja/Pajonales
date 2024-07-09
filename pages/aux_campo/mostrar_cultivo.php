<?php 

	$lote1=$_POST["lote1"];

	include 'include/conexion.php';

	$query="SELECT `Idlotecultivo`,cultivo.NombreCultivo FROM `lotecultivo` INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo WHERE lotecultivo.Idlote='$lote1' ORDER BY NombreCultivo";
	$resource=mysqli_query($conexion,$query);

	echo "<select name='id_lotecultivo' id='cultivo1' class=' form-control'>";
	echo "<option value='Selecciona'>Selecciona</option>";

	while($fila=mysqli_fetch_row($resource))
	{
		echo "<option value='$fila[0]'   >$fila[1]</option>";
	}

	echo "</select>";
?>