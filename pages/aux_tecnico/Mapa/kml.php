<?php
session_start();
if (isset($_SESSION['AUXILIAR TECNICO']))
{ 
  include '../include/conexion.php';
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
<!DOCTYPE html>
<html lang="en-US">
<head>
 <!--  <?php include'../../include/head.php' ?> -->
  <title>Pajonales</title>


    <meta charset="UTF-8">
    <meta name="description" content="Software De Georeferenciacion">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../../../assets/img/Logo_Pajonales.png"/>
    <link rel="stylesheet" href="../../../assets/css/components.css">

  <link rel="stylesheet" href="./resources/prism/prism.css" type="text/css">
  <link rel="stylesheet" href="../css/ol.css" type="text/css">
  <link rel="stylesheet" href="./resources/layout.css" type="text/css">

  <link rel="stylesheet" href="https://openlayers.org/en/v4.5.0/css/ol.css" type="text/css">
  <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->

  <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>

  <script src="https://openlayers.org/en/v4.5.0/build/ol.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script> -->
 <!--  <script src="../../../assets/js/jquery-3.2.1.min.js"></script> -->


<!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

</head>
<body class="sidebar-mini fixed" >
        <header class="main-header hidden-print">
      <!-- <div class="logo" >

      <img class="logoimg" src="../../../assets/img/SIE.png" alt="">
      <h1 class="logoa">Sistema</h1 > 
      </div > -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!-- User Menu-->
              <li><a href="../cerrar.php"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="../../../assets/img/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <?php 
                echo "$usu";
               ?>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu"> <!-- colorcar la clase "active" cuando sea necesario --> 
        <li class=""><a href="../index.php"><i class="fa fa-home"></i><span>Inicio</span></a></li>
        <li class=""><a href="kml.php"><i class="fa fa-map"></i><span>Mapa</span></a></li>
            
            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Registrar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Vegetativa</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../frm_preparacionSuelo.php"><i class="fa fa-"></i> <span>Preracion Suelos</span></a></li>
                    <li><a href="../frm_siembraS0.php"><i class="fa fa-"></i><span>Siembra S0</span></a></li>
                    <!-- <li><a href="../"><i class="fa fa-"></i> </a></li> -->
                    <li><a href="../frm_emergenciaS3.php"><i class="fa fa-"></i><span> Emeregencia S3</span></a></li>

                    <li><a href="../frm_v3-v5.php"><i class="fa fa-"></i><span> V3-V5</span></a></li>

                    <li><a href="../frm_v6-v9.php"><i class="fa fa-"></i><span> V6-V9</span></a></li>


                  </ul>

                </li>

                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Productiva</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../frm_r0-r1.php"><i class="fa fa-"></i> <span>R0-R1</span></a></li>
                    <li><a href="../frm_r2-r3.php"><i class="fa fa-"></i><span> R2-R3</span></a></li>
                    <li><a href="../frm_r4-r5.php"><i class="fa fa-"></i> <span> R4-R5</span></a></li>

                  </ul>

                </li>

                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Maduracion</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">

                    <li><a href="../frm_r6-r8.php"><i class="fa fa-"></i><span> R6-R8</span></a></li>

                    <li><a href="../frm_r9.php"><i class="fa fa-"></i><span> R9</span></a></li>

                  </ul>

                </li>

              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Consultar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Vegetativa</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../cons_preparacionSuelo.php"><i class="fa fa-"></i> <span>Preracion Suelos</span></a></li>
                    <li><a href="../cons_siembraS0.php"><i class="fa fa-"></i><span>Siembra S0</span></a></li>
                    <!-- <li><a href="../"><i class="fa fa-"></i> </a></li> -->
                    <li><a href="../cons_emergenciaS3.php"><i class="fa fa-"></i><span> Emeregencia S3</span></a></li>

                    <li><a href="../cons_v3-v5.php"><i class="fa fa-"></i><span> V3-V5</span></a></li>

                    <li><a href="../cons_v6-v9.php"><i class="fa fa-"></i><span> V6-V9</span></a></li>


                  </ul>

                </li>

                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Productiva</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../cons_r0-r1.php"><i class="fa fa-"></i> <span>R0-R1</span></a></li>
                    <li><a href="../cons_r2-r3.php"><i class="fa fa-"></i><span> R2-R3</span></a></li>
                    <li><a href="../cons_r4-r5.php"><i class="fa fa-"></i> <span> R4-R5</span></a></li>

                  </ul>

                </li>

                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Maduracion</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">

                    <li><a href="../cons_r6-r8.php"><i class="fa fa-"></i><span> R6-R8</span></a></li>

                    <li><a href="../cons_r9.php"><i class="fa fa-"></i><span> R9</span></a></li>

                  </ul>

                </li>

              </ul>
            </li>
          </ul>
        </section>
       </aside><!-- <li class="treeview"><a href="#"><i class="fa fa-"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../"><i class="fa fa-"></i> Level Two</a></li>
                    <li><a href="../#"><i class="fa fa-"></i><span> Level Two</span></a></li>

                  </ul>

                </li> -->
                <div class="my-container">
                  <h1>Mapa Hacienda Pajonales</h1>
                </div>








                <div class="hiddencon">
  <div class="hiddencon-label"><i class="fa fa-plus"></i></div>

                    <div class="caja-checks" id="contenedor_chebox"  >
                     <?php 
                     $hosting="localhost";
                     $usua="root";
                     $contraseña="";
                     $bs="pajonales";

                     $conexion=mysqli_connect($hosting,$usua,$contraseña,$bs) or die("error en $conexion");

// ---------------------------------------------------------------------------------------------------------

// AQUI ABAJO ES PARA TRAER EL KML DE LA FINCA
// ---------------------------------------------------------------------------------------------------------

                     $query="SELECT `Idhacienda`, `Nombre` FROM `hacienda` ";
                     $resource=mysqli_query($conexion,$query);

                     while ($fila=mysqli_fetch_row($resource)) {
                      $vector="vector_finca" . $fila[0];
  // AQUI ABAJO DEFINO LAS VARIABLE QUE VOY A UTILIZAR EN LOS SCRIPT C 

                      echo "




                      <div class='checkbox'>
                      <button type='button'  onclick='mostrar_lotes_chec$fila[0]($fila[0])' class='desple_Buttons'><i id='icono_finca_$fila[0]' class='fa fa-plus'></i></button>

                      <label><input type='checkbox' onclick='ocultar_finca($vector, $fila[0]),seleccionar_todo_finca(contenedor_finca_$fila[0],$fila[0])' id='vector_finca$fila[0]'' checked> HACIENDA $fila[1]</label>
                      </div>


                      <div id='contenedor_finca_$fila[0]' class='ocultos'>

                      <script>
                      var contador_finca_contenedor$fila[0]=1
                      function mostrar_lotes_chec$fila[0](vector) {


                        if(contador_finca_contenedor$fila[0]==0){

                          var vector=document.getElementById('contenedor_finca_' + vector).style.display='none';
                          $('#icono_finca_$fila[0]').removeClass('fa-minus ');
                          $('#icono_finca_$fila[0]').addClass('fa-plus');
                          contador_finca_contenedor$fila[0]++;
                        }else{
                          var vector=document.getElementById('contenedor_finca_' + vector).style.display='block';
                          $('#icono_finca_$fila[0]').removeClass('fa-plus');
                          $('#icono_finca_$fila[0]').addClass('fa-minus ');


                          contador_finca_contenedor$fila[0]--;
                        }


                      }

                      </script>
                      ";
                      ?>

                      <?php
// ----------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------
  // AQUI ABAJO SE TRAE TODO LOS LOTES DE ESA FINCA

                      $query="SELECT `Idlote`, `NumeroLote`FROM `lote` WHERE IdHacienda=$fila[0] order by NumeroLote";
                      $resource_1=mysqli_query($conexion,$query);

                      while ($fila_1=mysqli_fetch_row($resource_1)) {
                        $vector="vector_lote" . $fila_1[0];
  // AQUI ABAJO DEFINO LAS VARIABLE QUE VOY A UTILIZAR EN LOS SCRIPT C 

                        echo "
                        &nbsp&nbsp&nbsp


                        <button type='button'  onclick='mostrar_cultivos_chec$fila_1[0]($fila_1[0])' class='desple_Buttons'><i id='icono_lote_$fila_1[0]' class=' fa fa-plus'></i></button>

                        <label><input type='checkbox'  onclick='ocultar_lote($vector, $fila_1[0]),seleccionar_todo(contenedor_lote_$fila_1[0],$fila_1[0])' id='vector_lote$fila_1[0]'  checked>$fila_1[1]</label>


                        <br>
                        <div id='contenedor_lote_$fila_1[0]' class='ocultos' >
                        <script>

                        var contador_lote_contenedor$fila_1[0]=1
                        function mostrar_cultivos_chec$fila_1[0](vector) {


                          if(contador_lote_contenedor$fila_1[0]==0){

                            var vector=document.getElementById('contenedor_lote_' + vector).style.display='none';


                            $('#icono_lote_$fila_1[0]').removeClass('fa-minus ');
                            $('#icono_lote_$fila_1[0]').addClass('fa-plus');

                            contador_lote_contenedor$fila_1[0]++;
                          }else{
                            var vector=document.getElementById('contenedor_lote_' + vector).style.display='block';


                            $('#icono_lote_$fila_1[0]').removeClass('fa-plus');
                            $('#icono_lote_$fila_1[0]').addClass('fa-minus ');

                            contador_lote_contenedor$fila_1[0]--;
                          }


                        }



// aqui abajo es para crear un arra para desactivar todos los contenedor_chebox


                        </script>
                        ";
                        ?>
                        <!-- <input type="checkbox" onclick="">lote -->
                        <?php
// -----------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------

                        echo "
                        <script>

                        var array_lotecultivos$fila_1[0]=[];

                        </script>";
                        $query="SELECT `Idlotecultivo`, cultivo.NombreCultivo FROM `lotecultivo` INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo WHERE `Idlote`=$fila_1[0]";
                        $resource_2=mysqli_query($conexion,$query);

                        while ($fila_2=mysqli_fetch_row($resource_2)) {
                          $vector="vector_lotecultivo" . $fila_2[0];
                             $punto="punto";
                          $contenedor_puntos=$vector . $punto;
  // AQUI ABAJO DEFINO LAS VARIABLE QUE VOY A UTILIZAR EN LOS SCRIPT C 


                          echo "
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp



                          <button type='button' onclick='mostrar_puntos_chec$fila_2[0]($fila_2[0])' class='desple_Buttons'><i  id='icono_cultivo_$fila_2[0]' class=' fa fa-plus'></i></button>

                          <label><input type='checkbox' onclick='ocultar_cultivo($vector, $fila_2[0]),seleccionar_todos_puntos($contenedor_puntos,$fila_2[0])' id='vector_lotecultivo$fila_2[0]'  checked>CULTIVO $fila_2[1]</label>

                          <br>
                          <div id='contenedor_cultivo_$fila_2[0]' class='ocultos'>
                          <script>


                          var contador_cultivo_contenedor$fila_2[0]=1
                          function mostrar_puntos_chec$fila_2[0](vector) {



                            if(contador_cultivo_contenedor$fila_2[0]==0){
                              var vector=document.getElementById('contenedor_cultivo_$fila_2[0]').style.display='none';



                              $('#icono_cultivo_$fila_2[0]').removeClass('fa-minus ');
                              $('#icono_cultivo_$fila_2[0]').addClass('fa-plus');

                              contador_cultivo_contenedor$fila_2[0]++;
                            }else{
                              var vector=document.getElementById('contenedor_cultivo_$fila_2[0]').style.display='block';



                              $('#icono_cultivo_$fila_2[0]').removeClass('fa-plus');
                              $('#icono_cultivo_$fila_2[0]').addClass('fa-minus ');


                              contador_cultivo_contenedor$fila_2[0]--;
                            }


                          }

                          vector_final=array_lotecultivos$fila_1[0].push('$vector');

                          </script>
                          ";
                          ?>

                          <?php



// AQUI ABAJO SON LOS PUNTOS DE ESE LOTECULTIVO
// -----------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------


// AQUI ABAJO ESTOY TRALLENDO LO PUNTOS DESDE LA BASE DE DATOS Y UTILIZARLOS PONINEDOLOS EN LA BASE DE DATOS
// ----------------------------------------------------------------------------------------------------------------


// AQUI ABAJO ES DONDE SE DEFINEN LAS VARIABLE DEL BUCLE Y EL ARRAY QUE VAMOS A UTILIZAR
// --------------------------------------------------------------------------------------------------------

                          $query="SELECT  `latitud_ps`,`longitud_ps`,`id_preparacionSuelo` FROM `r0_r1`WHERE Idlotecultivo=$fila_2[0] ";
                          $resource_3=mysqli_query($conexion,$query);

                          echo "<div id='$contenedor_puntos' >";
                          while($fila_3=mysqli_fetch_row($resource_3)){

  // AQUI ABAJO DEFINO LAS VARIABLE QUE VOY A UTILIZAR EN LOS SCRIPT C 
                            $punto="punto" . $fila_3[2];

                            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                            <label><input type='checkbox' onclick='ocultar_punto($punto, $fila_3[2])' id='punto$fila_3[2]' checked>punto $fila_3[2]</label>
                            <br>
                            <script>

                            </script>




                            ";

                          }
// ----------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------


                          echo "
                          </div>
                          </div>";
                        }

                        echo "</div>";
                      }

                      echo "</div>";

                    }

                    ?>
                  </div>
           </div>


            <!-- <div class="row-fluid"> -->

 <!--  <div class="span12">
  <h4 id="title">PAJONALES</h4> -->
  <!-- <div id="map" class="map"></div> -->
  <div id="popup" class="ol-popup">
    <a href="#" id="popup-closer" class="ol-popup-closer"></a>
    <div id="popup-content"></div>
  </div>


  <!--  </div> -->


  <div class="container">
    <div class="row">
      <!-- <h2>Bootstrap Open Layers Map Demo</h2> -->
      <div class="col-xs-12">

        <div id="map"  ></div>

      </div>
    </div>
  </div>
  <!-- </div> -->

  <style>
  .ocultos{
    display: none;
  }

  .map{
    z-index: 12;
    position: absolute;
    width: 100%;
    height: 100%;
  }

</style>
<script src="../resources/common.js"></script>
<script src="../resources/prism/prism.min.js"></script>
<script src="loader.js?id=kml"></script>

<script src="../../../assets/js/jquery-3.2.1.min.js"></script>

<script src="../../../assets/js/essential-plugins.js"></script>   

<script src="../../../assets/js/bootstrap.min.js"></script> 

<script src="../../../assets/js/main.js"></script>

<script type="text/javascript">$('body').removeClass("sidebar-mini").addClass("sidebar-collapse");</script>


<script>
  // OpenLayers 3 - Test with mapserver for B-CGMS - Julien Minet - July 2016. 

// Definition of OpenLayers controls
var scaleLine = new ol.control.ScaleLine()

// Map creation
var olmap = new ol.Map({
   target: document.getElementById('map'),  // instead of "target: 'map' " because of the cursor pointer
   
   controls: ol.control.defaults({scaleLine: false}).extend([scaleLine]),  // Add the scaleline control
 });

// Add default layers
var osmLayer = new ol.layer.Tile({
 source: new ol.source.OSM()
});
olmap.addLayer(osmLayer);
</script>

<?php

}
else
{
  echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../../index.php?Acceso Denegado'</script>";
}
?>

</body>
<script>

  var nombre_tabla="r0_r1";
</script>
<?php 


// ---------------------------------------------------------------------------------------------------------

// AQUI ABAJO ES PARA TRAER EL KML DE LA FINCA
// ---------------------------------------------------------------------------------------------------------
echo "<script>

var contador_posicion_vectores=0;
var vectores=[];
</script>";
$query="SELECT `Idhacienda`, `kml` FROM `hacienda`";
$resource=mysqli_query($conexion,$query);

while ($fila=mysqli_fetch_row($resource)) {
  $vector="vector_finca" . $fila[0];
  // AQUI ABAJO DEFINO LAS VARIABLE QUE VOY A UTILIZAR EN LOS SCRIPT C 
  echo "<script>

  var kml='../../kml/$fila[1]';

  var $vector = new ol.layer.Vector({
    source: new ol.source.Vector({
      url: kml,
      name:$fila[0],
      format: new ol.format.KML(),
    })
  });

  var contador_vector=$fila[0];


// AQUI ABAJO ES PARA VER LA VISIBILIDAD DE LOS VECTORES
// $vector.setVisible(true);


// AQUI ABAJO REALIZO EL ALGORITMO PARA LOS vectores agregar un poligono al final

  vector_final=vectores.push($vector)
  contador_posicion_vectores++;
// vectores=[rasterLayer,vector1,vector2, vectorLayer];
  </script>";
  ?>


  <?php 

// ----------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------
  // AQUI ABAJO SE TRAE TODO LOS LOTES DE ESA FINCA
  echo "<script>
  var contador_posicion_vectores_lote=0;

  </script>";
  $query="SELECT `Idlote`, `kml` FROM `lote` WHERE `IdHacienda`=$fila[0]";
  $resource_1=mysqli_query($conexion,$query);

  while ($fila_1=mysqli_fetch_row($resource_1)) {
    $vector="vector_lote" . $fila_1[0];
  // AQUI ABAJO DEFINO LAS VARIABLE QUE VOY A UTILIZAR EN LOS SCRIPT C 
    echo "<script>

    var kml='../../kml/$fila_1[1]';

    var $vector = new ol.layer.Vector({
      source: new ol.source.Vector({
        url: kml,
        format: new ol.format.KML()

      })
    });

    var contador_vector=$fila_1[0];


// AQUI ABAJO ES PARA VER LA VISIBILIDAD DE LOS VECTORES
// 


// AQUI ABAJO REALIZO EL ALGORITMO PARA LOS vectores agregar un poligono al final

    vector_final=vectores.push($vector)
    contador_posicion_vectores_lote++;
// vectores=[rasterLayer,vector1,vector2, vectorLayer];
    </script>";

// -----------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------

  // AQUI ABAJO SE TRAE TODOS cultivos de ese lote
    echo "<script>
    var contador_posicion_vectores_lotecultivo=0;

    </script>";
    $query="SELECT `Idlotecultivo`,`kml` FROM `lotecultivo` WHERE `Idlote`=$fila_1[0]";
    $resource_2=mysqli_query($conexion,$query);

    while ($fila_2=mysqli_fetch_row($resource_2)) {
      $vector="vector_lotecultivo" . $fila_2[0];
  // AQUI ABAJO DEFINO LAS VARIABLE QUE VOY A UTILIZAR EN LOS SCRIPT C 
      echo "<script>
// Aqui almaceno la direccion del kml
      var kml='../../kml/$fila_2[1]';

      var $vector = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: kml,
          format: new ol.format.KML()

        })
      });

      var contador_vector=$fila_2[0];


// AQUI ABAJO ES PARA VER LA VISIBILIDAD DE LOS VECTORES
// $vector.setVisible(true);


// AQUI ABAJO REALIZO EL ALGORITMO PARA LOS vectores agregar un poligono al final

      vector_final_1=vectores.push($vector)
      contador_posicion_vectores_lotecultivo++;
// vectores=[rasterLayer,vector1,vector2, vectorLayer];


      </script>";




// AQUI ABAJO SON LOS PUNTOS DE ESE LOTECULTIVO
// -----------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------


// AQUI ABAJO ESTOY TRALLENDO LO PUNTOS DESDE LA BASE DE DATOS Y UTILIZARLOS PONINEDOLOS EN LA BASE DE DATOS
// ----------------------------------------------------------------------------------------------------------------


// AQUI ABAJO ES DONDE SE DEFINEN LAS VARIABLE DEL BUCLE Y EL ARRAY QUE VAMOS A UTILIZAR
// --------------------------------------------------------------------------------------------------------
      echo "<script>

      var contador_posicion=0;
      var puntos=[];

      </script>";
      $query="SELECT  `latitud_ps`,`longitud_ps`,`id_preparacionSuelo` FROM `r0_r1` ";
      $resource_3=mysqli_query($conexion,$query);

      while($fila_3=mysqli_fetch_row($resource_3)){

  // AQUI ABAJO DEFINO LAS VARIABLE QUE VOY A UTILIZAR EN LOS SCRIPT C 
        $punto="punto" . $fila_3[2];
        echo "<script>

        var longitud=$fila_3[1]
        var latitud=$fila_3[0];


        var $punto= new ol.Feature({
         geometry: new ol.geom.Point(ol.proj.fromLonLat([longitud,latitud])),  
         name:$fila_3[2],
       });


       var iconStyle = new ol.style.Style({
        image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
          src: 'https://mt.googleapis.com/vt/icon/name=icons/onion/123-red-dot.png'
        }))
      });

      $punto.setStyle(iconStyle);
      var contador=$fila_3[2];

// $punto.setVisible(false);


// AQUI ABAJO REALIZO EL ALGORITMO PARA LOS PUNTOS

      puntos[contador_posicion]=$punto;

      contador_posicion++;

      </script>";

    }
// ----------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------



  }


}
}




?>
<script>

//   var contenedor=document.getElementById("#" + id_contenedor);
//   alert(contenedor);
function seleccionar_todo(id_contenedor,id){
  var id_contenedor=id_contenedor.id;

  var vector1=document.getElementById('vector_lote' + id).checked;

  var checactivado=$("#" + id_contenedor + " :checkbox");

// alert(checactivado.length);




if (vector1==true ) {
  for (var i = checactivado.length - 1; i >= 0; i--) {
    if (checactivado[i].checked==false) {
      checactivado[i].click();

    }
  }

}else{
// AQUI ABAJO ES CUANDO DESACTIVO EL CHEBOX}}
for (var i = checactivado.length - 1; i >= 0; i--) {
  if (checactivado[i].checked==true) {
    checactivado[i].click();

  }
}




}



}


function seleccionar_todo_finca(id_contenedor,id){
  var id_contenedor=id_contenedor.id;

  var vector1=document.getElementById('vector_finca' + id).checked;

  var checactivado=$("#" + id_contenedor + " :checkbox");

// alert(checactivado.length);




if (vector1==true ) {
  for (var i = checactivado.length - 1; i >= 0; i--) {
    if (checactivado[i].checked==false) {
      checactivado[i].click();

    }
  }

}else{
// AQUI ABAJO ES CUANDO DESACTIVO EL CHEBOX}}
for (var i = checactivado.length - 1; i >= 0; i--) {
  if (checactivado[i].checked==true) {
    checactivado[i].click();

  }
}




}



}


function seleccionar_todos_puntos(id_contenedor,id){
  var id_contenedor=id_contenedor.id;

  var vector1=document.getElementById('vector_lotecultivo' + id).checked;

  var checactivado=$("#" + id_contenedor + " :checkbox");

// alert(checactivado.length);




if (vector1==true ) {
  for (var i = checactivado.length - 1; i >= 0; i--) {
    if (checactivado[i].checked==false) {
      checactivado[i].click();

    }
  }

}else{
// AQUI ABAJO ES CUANDO DESACTIVO EL CHEBOX}}
for (var i = checactivado.length - 1; i >= 0; i--) {
  if (checactivado[i].checked==true) {
    checactivado[i].click();

  }
}




}



}



function ocultar_cultivos(array) {
  for (var i = array.length - 1; i >= 0; i--) {
    ocultar_cultivo(array[i]);
  }
}


// AQUI ABAJO ES PARA DESACTIVAR LOS CHEBOX
// ----------------------------------------------------------------------------------------------------------------------------------


function ocultar_finca(vector, id){


  var vector1=document.getElementById('vector_finca' + id).checked;

  if (vector1==true){
    vector.setVisible(true);
    vector1=false;
  }else{
    vector.setVisible(false);
    vector1=true;
  }

}



function ocultar_lote(vector,id){

  var vector1=document.getElementById('vector_lote' + id).checked;

  if (vector1==true){
    vector.setVisible(true);
    vector1=false;
  }else{
    vector.setVisible(false);
    vector1=true;
  }

}


function ocultar_cultivo(vector,id){

  var vector1=document.getElementById('vector_lotecultivo' + id).checked;

  if (vector1==true){
    vector.setVisible(true);
    vector1=false;
  }else{
    vector.setVisible(false);
    vector1=true;
  }

}


function ocultar_punto(vector,id){

  var vector1=document.getElementById('punto' + id).checked;

  if (vector1==true){
    vector.setVisible(true);
    vector1=false;
  }else{
    vector.setVisible(false);
    vector1=true;
  }

}

// --------------------------------------------------------------------------------------------------------------------------------------------


// TIPO DE COORDENADAS 

var projection = ol.proj.get('EPSG:3857');



// LA VARIABLE PUNTOS ES DONDE ESTAN TODOS LOS PUNTOS
var vectorSource = new ol.source.Vector({
  features:puntos 
});


// LA VARIBALE vectorLayer ES PARA INCORPORARLA EN EL MAPA 
var vectorLayer = new ol.layer.Vector({
  source: vectorSource
});


// raster es el tipo de mapa en imagerySet el parametro 'Aerial' es el tipo de mapa como dibujo satelital con calles
var rasterLayer = new ol.layer.Tile({
  source: new ol.source.BingMaps({
    imagerySet: 'Aerial',
    key: 'As1HiMj1PvLPlqc_gtM7AqZfBL8ZL3VrjaS3zIb22Uvb9WKhuJObROC-qUpa81U5'
  })
});


// vectores=[rasterLayer,vector1,vector2, vectorLayer];
// AQUI LO QUE HAGO ES PONER EL ULTIMOELEMENTO DEL ARRAY DEBE QUEDAR COMO ARRIBA
vector_final=vectores.unshift(rasterLayer);
vector_final=vectores.push(vectorLayer);
   // AQUI TERMINA LO DE LOS PUNTOS
  // -------------------------------------------------------------------------------------------------------------------
  // AQUI ABAJO SE EL MAPA LAYERS ES COMO LO QUE VA INCLUIDO EN EL MAPA
  // TARGET ES EL LUGAR DONDE SE VA A MOSTRAR EL MAPA, CENTER ES DONDE SE VA A MOSTRAR ED UN INICIO Y ZOOM ES LA ALTITUD
  var map = new ol.Map({
    layers: vectores,
    target: document.getElementById('map'),
        // este control es para lo de ALTITUD
        controls: ol.control.defaults().extend([
          new ol.control.FullScreen(),
          new ol.control.ScaleLine({
            units: 'degrees'
          })]),
        view: new ol.View({
          center: [-8329247.32, 529551.84],

          projection: projection,
          zoom: 14
        })
      });

// AQUI ABAJO ES PARA EL CONTROL DE ZOOM LA BARRA LATERAL IZQUIERA
zoomslider = new ol.control.ZoomSlider();
map.addControl(zoomslider);


      // AQUI ABAJO ES LO DEL POUP Y EJECUTAR LA FUNCION CUANDO LE DA CLICK AL PUNTO ASI PUEDO REAKUZAR FUNCIONES O TODO LO QUE YOQUIERA
// -----------------------------------------------------------------------------------------------------------------------

var container = document.getElementById('popup');
var content = document.getElementById('popup-content');
var closer = document.getElementById('popup-closer');





closer.onclick = function() {

 document.getElementById('popup').style.display='block';

};


var element = document.getElementById('popup');

var popup = new ol.Overlay({
  element: element,
  positioning: 'bottom-center',
  stopEvent: false,
  offset: [0, -50]
});
map.addOverlay(popup);

      // display popup on click
      map.on('singleclick', function(evt) {
        var feature = map.forEachFeatureAtPixel(evt.pixel,
          function(feature) {
            return feature;
          });
        if (feature) {

          var coordinates = feature.getGeometry().getCoordinates();
          popup.setPosition(coordinates);


          var id_punto=feature.get('name');

          document.getElementById('popup').style.display='block';
          $('#popup-content').load('mostrar_punto.php',{id_punto:id_punto,nombre_tabla});



        } else {
          $(element).popover('destroy');
        }
      });

      // change mouse cursor when over marker
      map.on('pointermove', function(e) {
        if (e.dragging) {
          $(element).popover('destroy');
          return;
        }
        var pixel = map.getEventPixel(e.originalEvent);
        var hit = map.hasFeatureAtPixel(pixel);
        map.getTarget().style.cursor = hit ? 'pointer' : '';
      });
      // ----------------------------------------------------------------------------------



    </script>


    </html>



