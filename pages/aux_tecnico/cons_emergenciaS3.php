<?php
session_start();
if (isset($_SESSION['AUXILIAR TECNICO']))
{ 
  include 'include/conexion.php';
  $usuario=($_SESSION['AUXILIAR TECNICO']);
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
    <h1>SIEMBRA S0</h1>
</div>

        <div class="bg-white-primary" id="Innovacion">
            <div class="container">
                


                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fechaemergencia_ps">Fecha Emergencia</label>
                                <input type="date" class="form-control" id="fechaemergencia_ps">

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="NumeroLote">Lote</label>
                                <input type="text" class="form-control" id="NumeroLote">

                            </div>
                        </div>
                    </div>

                    <div class="table-responsive scrol">
                      <table class="table table-bordered table-striped table ">
                        <thead>
                          <tr>
        
                            <th> Finca </th>
                            <th> Lote  </th>
                            <th> Cultivo </th>
                            <th> Tipo Cultivo  </th>
                            <th> Fecha Emergencia </th>
                            <th></th>
                          </tr>
                        </thead>


                        <tbody id="contenedor">

            
                        </tbody>
                      </table>
                    </div>
            </div>

        </div>

<?php 

        include'include/footer.php';
        include'include/scripts2.php'; ?>

        <script>

$(document).ready(inicio);

function inicio() {

    $("#fechaemergencia_ps").keyup(enviar);
    $("#NumeroLote").keyup(enviar);

}





function validar_fechaemergencia_ps() {
  
  var fechaemergencia_ps=document.getElementById("fechaemergencia_ps").value;
  var fechaemergencia_ps=new Date(fechaemergencia_ps);
  if (fechaemergencia_ps=="Invalid Date") {
    var fechaemergencia_ps=document.getElementById("fechaemergencia_ps").style.border="1px solid red";
    return false;
  }else{

    var fechaemergencia_ps=document.getElementById("fechaemergencia_ps").style.border="1px solid green";
    return true;
  }
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



function enviar() {
    if (validar_fechaemergencia_ps() == true || validar_NumeroLote() == true) {
        var fechaemergencia_ps = document.getElementById('fechaemergencia_ps').value;
        var NumeroLote = document.getElementById('NumeroLote').value;
   
        $("#contenedor").load("cons/Most-emergencia_S3.php", {

            fechaemergencia_ps: fechaemergencia_ps,
            NumeroLote: NumeroLote

        });
        return true;
    } else {
        return false;
    }
}

</script>
        <?php
        }
        else
        {
            echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../index.php?Acceso Denegado'</script>";
        }
    ?>

</body>
</html>