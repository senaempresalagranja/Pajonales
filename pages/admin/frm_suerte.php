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
    <h1>INGRESAR SUERTE (LOTE)</h1>
</div>
    <div id="pagina_completa">
        <div class="bg-white-primary" id="Innovacion">
            <div class="container">
                <form action="reg/reg_suerte.php" id="formulario" method="post" enctype="multipart/form-data">

<!-------------------------------------------------------------->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre_lote">Nombre Suerte:</label>
                                <input type="text" name="nombre_lote" class="form-control" id="nombre_lote" required/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tamanoterrones_ps">Finca:</label>
                                <select name="hacienda"  id="hacienda" class="hacienda form-control" required/>
                                    <option value="Selecciona" selected disabled>Seleccione</option>
                                    <?php
                                        $query="SELECT * FROM hacienda";
                                        $resource=mysqli_query($conexion,$query);
                                        while ($fila=mysqli_fetch_row($resource)) 
                                        {
                                            echo "<option value='$fila[0]'>$fila[1]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tamano">Tamaño (Ha):</label>
                                <input type="text" name="tamano" class="form-control" id="tamano" required/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kml">KML:</label>
                                <input type="file" name="kml" class="form-control" id="kml" required/>
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
                                <label for="NumeroLote">Suerte </label>
                                <input type="text" class="form-control" id="NumeroLote">

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="IdHacienda">Finca </label>
                                <input type="text" class="form-control" id="IdHacienda">

                            </div>
                        </div>

                        
                    </div>

              <div class="row">
                  <div class="col-md-8 col-xs-12 col-md-offset-2">
                    <div class="table-responsive scrol">
                      <table class="table table-bordered table-striped table ">
                        <thead>
                          <tr>
                            <th> Suerte </th>  
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
    <script>
        

function mostrar_lote1() {
    var finca=document.getElementById('finca1').value;


$("#contenedor_lote1").load("mostrar_lote1.php",{finca:finca})
}



function mostrar_cultivo() {


var lote1=document.getElementById('lote1').value;


$("#contenedor_cultivo").load("mostrar_cultivo.php",{lote1:lote1})

}
    </script>
   
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

    $("#NumeroLote").keyup(enviar);
    $("#IdHacienda").keyup(enviar);

}






function validar_NumeroLote() {
    var NumeroLote = document.getElementById('NumeroLote').value;
    NumeroLote = NumeroLote.toUpperCase();
    if (NumeroLote == null || NumeroLote.length == 0 || /[\\^"'<>;ç`,_ª%&¿°¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(NumeroLote)) {
        var NumeroLote = document.getElementById('NumeroLote').style.border = "1px solid red"
        return false;
    } else if (NumeroLote.length > 50) {
        var NumeroLote = document.getElementById('NumeroLote').style.border = "1px solid red";
        return false;
    } else {
        var NumeroLote = document.getElementById('NumeroLote').style.border = "1px solid green";
        var NumeroLote = document.getElementById('NumeroLote').value;
        return true;
    }
}

function validar_IdHacienda() {
    var IdHacienda = document.getElementById('IdHacienda').value;
    IdHacienda = IdHacienda.toUpperCase();
    if (IdHacienda == null || IdHacienda.length == 0 || /[\\^"'<>;ç`,_ª%&¿°¨Ç¡º#~¬€$.*+?=!:|\\/()\[\]{}]/.test(IdHacienda)) {
        var IdHacienda = document.getElementById('IdHacienda').style.border = "1px solid red"
        return false;
    } else if (IdHacienda.length > 50) {
        var IdHacienda = document.getElementById('IdHacienda').style.border = "1px solid red";
        return false;
    } else {
        var IdHacienda = document.getElementById('IdHacienda').style.border = "1px solid green";
        var IdHacienda = document.getElementById('IdHacienda').value;
        return true;
    }
}


function enviar() {
    if (validar_NumeroLote() == true || validar_IdHacienda() == true) {
        var NumeroLote = document.getElementById('NumeroLote').value;
        var IdHacienda = document.getElementById('IdHacienda').value;
   
        $("#contenedor").load("cons/Most-suerte.php", {

            NumeroLote: NumeroLote,
            IdHacienda: IdHacienda

        });
        return true;
    } else {
        return false;
    }
}

</script>
</body>
</html>