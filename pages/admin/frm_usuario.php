<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{ 
  include 'include/conexion.php';
  $usuario=($_SESSION['ADMINISTRADOR']);
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
    <h1>INGRESAR USUARIO</h1>
</div>
    <div id="pagina_completa">
        <div class="bg-white-primary" id="Innovacion">
            <div class="container">
                <form action="reg/reg_usuario.php" method="post">
                    <!-- <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h2 class="text-center">INGRESAR USUARIO</h2>
                        </div>
                    </div> -->
<!-- ---------------------------------------------------------- -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre_ps">Nombre Completo:</label>
                                <input type="text" name="nombre_ps" class="form-control" id="nombre_ps" required/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="rol_ps">Rol:</label>
                                <select name="rol_ps" id="rol_ps" class="form-control" required/>
                                    <option selected disabled>.::Seleccione::.</option>
                                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                    <option value="AUXILIAR CAMPO">AUXILIAR DE CAMPO</option>
                                    <option value="AUXILIAR TECNICO">AUXILIAR TECNICO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="usuario_ps">Usuario:</label>
                                <input type="text" name="usuario_ps" class="form-control" id="usuario_ps" required/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="password_ps">Contraseña:</label>
                                <input type="password" name="password_ps" class="form-control" id="password_ps">
                            </div>
                        </div>
                    </div>                    
<!-- -------------------------------------------------------------------- -->
                    <div class="row">
                        <!-- <div class="col-xs-12 col-sm-4 col-md-offset-5">
                            <div class="form-group">
                                <input type='submit' id="btn_ProdProceso" class='buttons' value='Registrar Actividad'>
                            </div>
                        </div> -->
                        <div class="col-md-12 box">

                <button class="action-button shadow animate blue" type='submit' id="btn_ProdProceso"><i class=" "></i> Registrar</button>
                <div id="contenedor_login"></div>
              </div>
                    </div>
                </form>
            </div>
        </div>
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