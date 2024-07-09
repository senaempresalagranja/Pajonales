<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{
	include '../../conexion.php';

	$usuario=($_SESSION['ADMINISTRADOR']);	
	date_default_timezone_set("America/Bogota");
	$fecha=date("Y-m-d H:i:s",time());
		
		$consulta=mysqli_query($conexion,"INSERT INTO tipo_cultivo (Nombre)
					VALUES (	
					'$_REQUEST[nombre_tipoCultivo]')")

				or die ("Problemas en el select ".mysqli_error());
				echo "<script type='text/javascript'>alert('Tipo Cultivo Registrado');location='../frm_tipoCultivo.php'</script>";
}
else
{
  echo "<script type='text/javascript'>alert('Parece que su Sesion ha finalizado, por favor Inicie Sesion');location='../index.php?Acceso Denegado'</script>";
}		
?>


