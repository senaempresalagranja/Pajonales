<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{
	include '../../conexion.php';

	$usuario=($_SESSION['ADMINISTRADOR']);	
	date_default_timezone_set("America/Bogota");
	$fecha=date("Y-m-d H:i:s",time());
		
	

// $nombre_img = $_FILES['kml']['name'];
// $tipo = $_FILES['kml']['type'];
// $tamano = $_FILES['kml']['size'];

 
// //Si existe kml y tiene un tamaño correcto
// if (($nombre_img == !NULL) && ($_FILES['kml']['size'] <= 200000)) 
// {
//    //indicamos los formatos que permitimos subir a nuestro servidor
//    if (($_FILES["kml"]["type"] == "application/octet-stream")
// )
//    {
//       // Ruta donde se guardarán las imágenes que subamos
//       $directorio = '../Mapa/data/kml/';
//       // Muevo la kml desde el directorio temporal a nuestra ruta indicada anteriormente
//       move_uploaded_file($_FILES['kml']['tmp_name'],$directorio.$nombre_img);

//      
//     } 
//     else 
//     {
//        //si no cumple con el formato
//        echo "No se puede subir una kml con ese formato ";
//     }
// } 
// else 
// {
//    //si existe la variable pero se pasa del tamaño permitido
//    if($nombre_img == !NULL) echo "La kml es demasiado grande "; 
// }



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
   echo "<script type='text/javascript'>alert('Error: Ya existe almacenado un fichero con ese nombre');location='../frm_finca.php'</script>";
   @unlink(ini_get('upload_tmp_dir').$_FILES['kml']['tmp_name']);
   exit;
  }

  if ( ! @move_uploaded_file($source, $destination ) ) {

      echo "<script type='text/javascript'>alert('Error: No se ha podido mover el fichero enviado a la carpeta de destino');location='../frm_finca.php'</script>";
    @unlink(ini_get('upload_tmp_dir').$_FILES['kml']['tmp_name']);
    exit;
  }
  $nombre_img = $_FILES['kml']['name'];
  $consulta=mysqli_query($conexion,"INSERT INTO hacienda (Nombre,Tamano,kml)
          VALUES (  
          '$_REQUEST[nombre_finca]',
          '$_REQUEST[tamano]',
          '$nombre_img')")

        or die ("Problemas en el select ".mysqli_error());
        echo "<script type='text/javascript'>alert('Finca Registrada');location='../frm_finca.php'</script>";
        
}


 }   
else
{
  echo "<script type='text/javascript'>alert('Parece que su Sesion ha finalizado, por favor Inicie Sesion');location='../index.php?Acceso Denegado'</script>";
}		
?>


