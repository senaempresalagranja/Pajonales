<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{
	include '../../conexion.php';

	$usuario=($_SESSION['ADMINISTRADOR']);	
	date_default_timezone_set("America/Bogota");
	$fecha=date("Y-m-d H:i:s",time());
		






  if ( isset( $_FILES ) && isset( $_FILES['kml'] ) && !empty( $_FILES['kml']['name'] && !empty($_FILES['kml']['tmp_name']) ) ) {
  //Hemos recibido el fichero
  //Comprobamos que es un fichero subido por PHP, y no hay inyección por otros medios
  if ( ! is_uploaded_file( $_FILES['kml']['tmp_name'] ) ) {
    echo "Error: El fichero encontrado no fue procesado por la subida correctamente";
    exit;
  } 
  $source = $_FILES['kml']['tmp_name'];
  $destination ='../../kml/'.$_FILES['kml']['name'];
      
  if ( is_file($destination) ) {
   echo "<script type='text/javascript'>alert('Error: Ya existe almacenado un fichero con ese nombre');location='../frm_suerte.php'</script>";
   @unlink(ini_get('upload_tmp_dir').$_FILES['kml']['tmp_name']);
   exit;
  }

  if ( ! @move_uploaded_file($source, $destination ) ) {

      echo "<script type='text/javascript'>alert('Error: No se ha podido mover el fichero enviado a la carpeta de destino');location='../frm_suerte.php'</script>";
    @unlink(ini_get('upload_tmp_dir').$_FILES['kml']['tmp_name']);
    exit;
  }
  $nombre_img = $_FILES['kml']['name'];
  		$consulta=mysqli_query($conexion,"INSERT INTO lote (NumeroLote,IdHacienda,Ha,kml)
					VALUES (	
					'$_REQUEST[nombre_lote]',
					'$_REQUEST[hacienda]',
					'$_REQUEST[tamano]',
					'$nombre_img')")

				or die ("Problemas en el select ".mysqli_error());
				echo "<script type='text/javascript'>alert('Suerte Registrado');location='../frm_suerte.php'</script>";
        
}

}
else
{
  echo "<script type='text/javascript'>alert('Parece que su Sesion ha finalizado, por favor Inicie Sesion');location='../index.php?Acceso Denegado'</script>";
}		
?>


