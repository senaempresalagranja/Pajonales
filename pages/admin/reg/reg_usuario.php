<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{
	include '../../conexion.php';

	$pass=$_REQUEST['password_ps'];
	$pas_encript=md5(md5($pass));

	date_default_timezone_set("America/Bogota");
	$fecha=date("Y-m-d H:i:s",time());
		
		$consulta=mysqli_query($conexion,"INSERT INTO usuarios (nombre_ps,rol_ps,usuario_ps,password_ps,password_pura)
					VALUES (	
					'$_REQUEST[nombre_ps]',
					'$_REQUEST[rol_ps]',
					'$_REQUEST[usuario_ps]',
					'$pas_encript',
					'$_REQUEST[password_ps]')")

				or die ("Problemas en el select ".mysqli_error());
				echo "<script type='text/javascript'>alert('Usuario Registrado');location='../frm_usuario.php'</script>";
}
else
{
  echo "<script type='text/javascript'>alert('Parece que su Sesion ha finalizado, por favor Inicie Sesion');location='../index.php?Acceso Denegado'</script>";
}		
?>


