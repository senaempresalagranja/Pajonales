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
    <h1>INGRESAR FINCA</h1>
</div>
    <div id="pagina_completa">
        <div class="bg-white-primary" id="Innovacion">
            <div class="container">
                <form action="reg/reg_finca.php" id="formulario" method="post" enctype="multipart/form-data">
                    
<!-------------------------------------------------------------->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_finca">Nombre Finca:</label>
                                <input type="text" name="nombre_finca" class="form-control" id="nombre_finca" required/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tamano">Tamaño (Ha):</label>
                                <input type="text" name="tamano" class="form-control" id="tamano">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kml">KML:</label>
                                <input type="file" name="kml" class="form-control" id="kml" accept=".kml" required/>
                            </div>
                        </div>
                    </div>
<!-- -------------------------------------------------------------------- -->
                    <div class="row">

                        <div class="col-md-12 box">

                <button class="action-button shadow animate blue" id="btn_ProdProceso"  value='Registrar Finca'><i class=" fa fa-sign-in"></i> Registrar</button>
                <div id="contenedor_login"></div>
              </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-white-primary" id="Innovacion">
            <div class="container">
                


                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group">
                                <label for="Nombre">Finca </label>
                                <input type="text" class="form-control" id="Nombre">

                            </div>
                        </div>

                        
                    </div>

              <div class="row">
                  <div class="col-md-6 col-xs-12 col-md-offset-3">
                    <div class="table-responsive scrol">
                      <table class="table table-bordered table-striped table ">
                        <thead>
                          <tr>
                            <th> Finca </th>
                            <th> Tamaño </th>   
                          </tr>
                        </thead>


                        <tbody id="contenedor">

            
                        </tbody>
                      </table>
                    </div>
                    </div> 
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
    <script>

$(document).ready(inicio);

function inicio() {

    $("#Nombre").keyup(enviar);

}







function validar_Nombre() {
    var Nombre = document.getElementById('Nombre').value;
    Nombre = Nombre.toUpperCase();
    if (Nombre == null || Nombre.length == 0 || /[\\^"'<>;ç`,_ª%&¿°¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(Nombre)) {
        var Nombre = document.getElementById('Nombre').style.border = "1px solid red"
        return false;
    } else if (Nombre.length > 50) {
        var Nombre = document.getElementById('Nombre').style.border = "1px solid red";
        return false;
    } else {
        var Nombre = document.getElementById('Nombre').style.border = "1px solid green";
        var Nombre = document.getElementById('Nombre').value;
        return true;
    }
}


function enviar() {
    if ( validar_Nombre() == true) {
        // var Idtipo_cultivo = document.getElementById('Idtipo_cultivo').value;
        var Nombre = document.getElementById('Nombre').value;
   
        $("#contenedor").load("cons/Most-finca.php", {


            Nombre: Nombre

        });
        return true;
    } else {
        return false;
    }
}

</script>
</body>
</html>