<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{
	include '../../conexion.php';

	$usuario=($_SESSION['ADMINISTRADOR']);	
	date_default_timezone_set("America/Bogota");
	$fecha=date("Y-m-d H:i:s",time());
		
		$consulta=mysqli_query($conexion,"INSERT INTO cultivo (NombreCultivo,Idtipo_cultivo)
					VALUES (	
					'$_REQUEST[nombre_cultivo]',
					'$_REQUEST[tipo_cultivo]')")

				or die ("Problemas en el select ".mysqli_error());
				echo "<script type='text/javascript'>alert('Cultivo Registrado');location='../frm_cultivo.php'</script>";
}
else
{
  echo "<script type='text/javascript'>alert('Parece que su Sesion ha finalizado, por favor Inicie Sesion');location='../index.php?Acceso Denegado'</script>";
}		
?>


