<?php
session_start();
if (isset($_SESSION['AUXILIAR CAMPO']))
{ 
  include 'include/conexion.php';
  $usuario=($_SESSION['AUXILIAR CAMPO']);
  $res=mysqli_query($conexion,"SELECT * FROM usuarios WHERE id_usuario=$usuario");
        while ($reg=mysqli_fetch_array($res)) 
        {
          $nomusua_usua=utf8_decode($reg[2]);
          $rolusua=utf8_decode($reg[1]);
         }
         $saludo="Bienvenido $nomusua_usua, a el Rol del $rolusua";
         $usu="<p>$nomusua_usua</p> <p class='designation'>$rolusua</p>"; 

?>
<!DOCTYPE <html>
<html lang="es">
<head><?php include'include/head.php' ?> 
  <title>Pajonales</title></head>
 

<?php include 'include/menu.php'; ?>



<body class="sidebar-mini fixed" >
  <?php 
      include'include/menu.php'; 
    ?>
<div class="my-container">
    <h1>Bienvenidos</h1>
</div>

    
    <?php
        include'include/footer.php';
        include'include/scripts2.php';
		}
		else
		{
			echo "<script type='text/javascript'>alert('Acceso Denegado');location='../index.php?Acceso Denegado'</script>";
		}
    ?>

</body>
</html>