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
    <h1>INGRESAR CULTIVO</h1>
</div>

    <div id="pagina_completa">
        <div class="bg-white-primary" id="Innovacion">
            <div class="container">
                <form action="reg/reg_cultivo.php" id="formulario" method="post">
<!-------------------------------------------------------------->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_cultivo">Nombre Cultivo:</label>
                                <input type="text" name="nombre_cultivo" class="form-control" id="nombre_cultivo" required/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tamanoterrones_ps">Tipo Cultivo:</label>
                                <select name="tipo_cultivo"  id="tipo_cultivo" class="form-control" required/>
                                    <option value="Selecciona" selected disabled>Seleccione</option>
                                    <?php
                                        $query="SELECT * FROM tipo_cultivo";
                                        $resource=mysqli_query($conexion,$query);
                                        while ($fila=mysqli_fetch_row($resource)) 
                                        {
                                            echo "<option value='$fila[0]'>$fila[1]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
<!-- -------------------------------------------------------------------- -->
                    <div class="row">
                        <div class="col-md-12 box">

                <button class="action-button shadow animate blue" type='submit' id="btn_ProdProceso"><i class=" "></i> Registrar</button>
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
                        <div class="col-md-3 col-md-offset-3">
                            <div class="form-group">
                                <label for="NombreCultivo">Cultivo </label>
                                <input type="text" class="form-control" id="NombreCultivo">

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Idtipo_cultivo">Tipo Cultivo</label>
                                <input type="text" class="form-control" id="Idtipo_cultivo">

                            </div>
                        </div>
                    </div>

<div class="row">
    <div class="col-md-6 col-xs-12 col-md-offset-3">
                    <div class="table-responsive scrol">
                      <table class="table table-bordered table-striped table ">
                        <thead>
                          <tr>
                            <th> Cultivo </th>
                            <th> Tipo Cultivo  </th>   
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

    $("#Idtipo_cultivo").keyup(enviar);
    $("#NombreCultivo").keyup(enviar);

}






function validar_Idtipo_cultivo() {
    var Idtipo_cultivo = document.getElementById('Idtipo_cultivo').value;
    Idtipo_cultivo = Idtipo_cultivo.toUpperCase();
    if (Idtipo_cultivo == null || Idtipo_cultivo.length == 0 || /[\\^"'<>;ç`,_ª%&¿°¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(Idtipo_cultivo)) {
        var Idtipo_cultivo = document.getElementById('Idtipo_cultivo').style.border = "1px solid red"
        return false;
    } else if (Idtipo_cultivo.length > 50) {
        var Idtipo_cultivo = document.getElementById('Idtipo_cultivo').style.border = "1px solid red";
        return false;
    } else {
        var Idtipo_cultivo = document.getElementById('Idtipo_cultivo').style.border = "1px solid green";
        var Idtipo_cultivo = document.getElementById('Idtipo_cultivo').value;
        return true;
    }
}

function validar_NombreCultivo() {
    var NombreCultivo = document.getElementById('NombreCultivo').value;
    NombreCultivo = NombreCultivo.toUpperCase();
    if (NombreCultivo == null || NombreCultivo.length == 0 || /[\\^"'<>;ç`,_ª%&¿°¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(NombreCultivo)) {
        var NombreCultivo = document.getElementById('NombreCultivo').style.border = "1px solid red"
        return false;
    } else if (NombreCultivo.length > 50) {
        var NombreCultivo = document.getElementById('NombreCultivo').style.border = "1px solid red";
        return false;
    } else {
        var NombreCultivo = document.getElementById('NombreCultivo').style.border = "1px solid green";
        var NombreCultivo = document.getElementById('NombreCultivo').value;
        return true;
    }
}


function enviar() {
    if (validar_Idtipo_cultivo() == true || validar_NombreCultivo() == true) {
        var Idtipo_cultivo = document.getElementById('Idtipo_cultivo').value;
        var NombreCultivo = document.getElementById('NombreCultivo').value;
   
        $("#contenedor").load("cons/Most-cultivo.php", {

            Idtipo_cultivo: Idtipo_cultivo,
            NombreCultivo: NombreCultivo

        });
        return true;
    } else {
        return false;
    }
}

</script>
</body>
</html>