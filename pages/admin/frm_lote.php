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
                <form action="reg/reg_lote.php" id="formulario" method="post" enctype="multipart/form-data">

<!-------------------------------------------------------------->
                  <div class="row">
 
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group">
                    <div  id="elemento_finca">

                    <label for="finca">Selecciona Finca</label>
                    <select name="finca" onclick='mostrar_lote()' id="finca"  class="finca form-control">
                        <option value="Selecciona">Selecciona</option>
                            <?php

                            $query="SELECT * FROM hacienda ORDER BY Nombre";
$resource=mysqli_query($conexion,$query);
while ($fila=mysqli_fetch_row($resource)) {
    echo "<option   value='$fila[0]' '>$fila[1]</option>";
}

                             ?>
                        </select>
                        <!-- <span class="help-block icon icono_vereda     icon-map"></span> -->
                    </div>
                </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group">
                    <div  id="elemento_lote">

                    <label for="lote">Selecciona Lote</label>

                    <div id="elemento_lote1">
              


                    </div>
                    </div>
                </div>
    </div>


            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group">
                    <div  id="elemento_cultivo">

                    <label for="cultivo">Selecciona Cultivo</label>
      <select  class="form-control cultivos" name="cultivo"    id="cultivo"  >

                            <option value="Selecciona" >Selecciona</option>
                                <?php

                                

                                

                                $query1="SELECT * FROM tipo_cultivo";
                                $resource1=mysqli_query($conexion,$query1);

                                while ( $fila1=mysqli_fetch_row($resource1)) {
                                    echo "<optgroup label='$fila1[1]'  class='help-block'>";

                                $query="SELECT * FROM cultivo   WHERE  Idtipo_cultivo='$fila1[0]' ORDER BY NombreCultivo";

                                $resource=mysqli_query($conexion,$query);

                                while ($fila=mysqli_fetch_row($resource)) {

                                    echo "<option value='$fila[0]' >$fila[1]</option>";
                                }

                                }


                                 ?>

                                    </select>
                        <!-- <span class="help-block icon icono_vereda     icon-map"></span> -->
                    </div>
                </div>

</div>


            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                <div class="form-group">
                    <label for="Tamaño">Tamaño</label>
                    <div id="elemento_tamaño_cultivo">
                        <input type="number"  step="Any" name="tamaño_cultivo"  class="form-control"  id="tamaño_cultivo">
                        <span class="help-block"></span>
                    </div>
                </div>


            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="form-group">
                        <div  id="elemento_fax">

                            <label for="">kml</label>
                            <input type="file"  id="kml" name="kml" accept=".kml" class="form-control">
                
                        

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
        

function mostrar_lote() {
var finca=document.getElementById('finca').value;

$("#elemento_lote1").load("mostrar_lote.php",{finca:finca})

};

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






        function validar_kml () {

            var kml=document.getElementById('kml').value;

            if(kml==null  || kml.length==0  || kml<0){

                $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
                $("#elemento_kml").attr("class", "form-group has-error  has-feedback");
                $("#kml").parent().append('<span id="icono_texto" class="icon   form-control-feedback"></span>');

                return false;

            }
            else {

                $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
                $("#elemento_kml").attr("class", "form-group has-success has-feedback");
                $("#kml").parent().children("span").text("").show();
                $("#kml").parent().append('<span id="icono_texto" class=" form-control-feedback"></span>');

                return true;
            }

        }


</script>
</body>
</html>