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
    <h1>V3-V5</h1>
</div>

        <div class="bg-white-primary" id="Innovacion">
            <div class="container">
                


                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fechainiciomacollamiento_ps">Fecha Inicio Macollamiento:</label>
                                <input type="date" class="form-control" id="fechainiciomacollamiento_ps">

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
                            <th> Fecha Inicio Macollamiento</th>
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

    $("#fechainiciomacollamiento_ps").keyup(enviar);
    $("#NumeroLote").keyup(enviar);

}





function validar_fechainiciomacollamiento_ps() {
  
  var fechainiciomacollamiento_ps=document.getElementById("fechainiciomacollamiento_ps").value;
  var fechainiciomacollamiento_ps=new Date(fechainiciomacollamiento_ps);
  if (fechainiciomacollamiento_ps=="Invalid Date") {
    var fechainiciomacollamiento_ps=document.getElementById("fechainiciomacollamiento_ps").style.border="1px solid red";
    return false;
  }else{

    var fechainiciomacollamiento_ps=document.getElementById("fechainiciomacollamiento_ps").style.border="1px solid green";
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
    if (validar_fechainiciomacollamiento_ps() == true || validar_NumeroLote() == true) {
        var fechainiciomacollamiento_ps = document.getElementById('fechainiciomacollamiento_ps').value;
        var NumeroLote = document.getElementById('NumeroLote').value;
   
        $("#contenedor").load("cons/Most-v3-v5.php", {

            fechainiciomacollamiento_ps: fechainiciomacollamiento_ps,
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