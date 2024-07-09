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
<!DOCTYPE <html>
<html lang="es">
<title>Pajonales</title>


    <meta charset="UTF-8">
    <meta name="description" content="Software De Georeferenciacion">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../../../assets/img/Logo_Pajonales.png"/>
    <link rel="stylesheet" href="../../../assets/css/components.css">
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
            <li class=""><a href="../Mapa/kml.php"><i class="fa fa-map"></i><span>Mapa</span></a></li>
            
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
                    <li><a href=""><i class="fa fa-"></i> Level Two</a></li>
                    <li><a href="#"><i class="fa fa-"></i><span> Level Two</span></a></li>

                  </ul>

                </li> -->
<div class="my-container">
    <h1>SIEMBRA S0</h1>
</div>
    <div id="pagina_completa">

        <div class="bg-white-primary" id="Innovacion">
            <div class="container">


            <?php 

include '../../../assets/conexion/conexion.php';


session_start();
$usuario=($_SESSION['ADMINISTRADOR']); 
$id=$_REQUEST['id'];


$query="SELECT `id_preparacionSuelo`, hacienda.Nombre, lote.NumeroLote, cultivo.NombreCultivo, tipo_cultivo.Nombre, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `fechasiembra_ps`, `profundidadsiembra_ps`, `variedad_ps`, `densidadsiembra_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario` FROM `siembra_s0` 
INNER JOIN lotecultivo ON lotecultivo.Idlotecultivo = siembra_s0.Idlotecultivo
INNER JOIN lote ON lote.Idlote = lotecultivo.Idlote
INNER JOIN hacienda ON hacienda.Idhacienda = lote.IdHacienda
INNER JOIN cultivo on cultivo.idcultivo = lotecultivo.idcultivo
INNER JOIN tipo_cultivo ON tipo_cultivo.Idtipo_cultivo = cultivo.Idtipo_cultivo 
  WHERE id_preparacionSuelo=$id";


// $conexion->set_charset('utf8');
  
$resource=mysqli_query($conexion,$query);


while ($fila=mysqli_fetch_row($resource)) {
 ?>

                
                    <div row="row">
                        <div class="col-md-3">
                            <label for="finca1">Finca:</label>
                            <p><?php echo $fila[1] ?></p>
                        </div>
                        <div class="col-md-3">
                            <label for="">Lote:</label>
                            <p><?php echo $fila[2] ?></p>
                        </div>
                        <div class="col-md-3">
                            <label for="">Cultivo:</label>
                            <p><?php echo $fila[3] ?></p>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="latitud_ps">Tipo Cultivo:</label>
                                <p><?php echo $fila[4] ?></p>
                            </div>
                        </div>
                    </div>
<!-- ---------------------------------------------------------- -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4 class="text-center">Coordenadas</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="latitud_ps">Latitud:</label>
                                <p><?php echo $fila[5] ?></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="orientacionLat">Orientación:</label>
                                <p><?php echo $fila[6] ?></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="hidden">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="longitud_ps">Longitud:</label>
                                <p><?php echo $fila[7] ?></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="orientacionLon">Orientación:</label>
                                <p><?php echo $fila[8] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4 class="text-center">1. Actividades</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fechasiembra_ps">Fecha de Siembra:</label>
                                <p><?php echo $fila[9] ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="profundidadsiembra_ps">Profundidad de siembra:</label>
                                <p><?php echo $fila[10] ?></p>
                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;"><=3 cm (Numérico)</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="variedad_ps">Variedad:</label>
                                <p><?php echo $fila[11] ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="densidadsiembra_ps">Densidad de Siembra:</label>
                                <p><?php echo $fila[12] ?></p>
                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">de 30 a 200 Kg/Ha (Numerico)</label>
                            </div>
                        </div>
                    </div>
<!-- ---------------------------------------------------------- -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h4 class="text-center panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">2. Insectos dañinos y benéficos
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fecha_ps">Fecha:</label>
                                                <p><?php echo $fila[13] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Spodoptera:</label>
                                                <p><?php echo $fila[14] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;"><=10% de daño</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Grillotalpa:</label>
                                                <p><?php echo $fila[15] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;"><=10% de daño</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Blissus_ps">Blissus:</label>
                                                <p><?php echo $fila[16] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;"><=10% de daño</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="GusanoAlambre_ps">Gusano Alambre:</label>
                                                <p><?php echo $fila[17] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;"><=10% de daño</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fecha_ps">Mocis:</label>
                                                <p><?php echo $fila[18] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">< de 5 larvas/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">spodoptera:</label>
                                                <p><?php echo $fila[19] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">< de 5 larvas/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Panoquina:</label>
                                                <p><?php echo $fila[20] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">< de 5 larvas/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Blissus_ps">Platinota :</label>
                                                <p><?php echo $fila[21] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">< de 5 larvas/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Tipotidae">Tipotidae:</label>
                                                <p><?php echo $fila[22] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">< de 5 larvas/m2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="diatrea_ps">Diatrea :</label>
                                                <p><?php echo $fila[23] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;"><=3%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Rupella:</label>
                                                <p><?php echo $fila[24] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;"><=3%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Chinches:</label>
                                                <p><?php echo $fila[25] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">< 20 insectos en 10 pases dobles de jama</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Sogata">Sogata:</label>
                                                <p><?php echo $fila[25] ?></p>
                                                 <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">< 20 insectos en 10 pases dobles de jama</label>
                                            </div>
                                        </div>              
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- ---------------------------------------------------------------- -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-md-12 col-lg-12">
                                        <h4 class="text-center panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">3. Enfermedades
                                            </a>
                                        </h4>
                                    </div>
                                </div>  
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fecha_ps">Helmintosporium :</label>
                                                <p><?php echo $fila[27] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Cercospa:</label>
                                                <p><?php echo $fila[28] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Piricularia:</label>
                                                <p><?php echo $fila[29] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Rizhoctorinia">Rizhoctorinia:</label>
                                                <p><?php echo $fila[30] ?></p>
                                                 <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Gaeumanonomices">Gaeumanonomices:</label>
                                                <p><?php echo $fila[31] ?></p>
                                                 <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>      <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Sarocladium">Sarocladium:</label>
                                                <p><?php echo $fila[32] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>          
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fecha_ps">Pseudomona fuscovagine :</label>
                                                <p><?php echo $fila[33] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Burkholderia glumae :</label>
                                                <p><?php echo $fila[34] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">En la Espiga :</label>
                                                <p><?php echo $fila[35] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">< 10% de gramo manchado </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- -------------------------------------------------------------------- -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h4 class="text-center panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">4. Malezas
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fecha_ps">Arroz Rojo:</label>
                                                <p><?php echo $fila[36] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1  plantulas/m2</label>
                                            </div>
                                        </div>
                        
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Liendrepuerco:</label>
                                                <p><?php echo $fila[37] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>

                                             <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Caminadora:</label>
                                                <p><?php echo $fila[38] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>

                                             <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Falsa Caminadora:</label>
                                                <p><?php echo $fila[39] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>

                                             <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Paja Peluda:</label>
                                                <p><?php echo $fila[40] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                              <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fecha_ps">Paja Mona:</label>
                                                <p><?php echo $fila[41] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Guardarocio:</label>
                                                <p><?php echo $fila[42] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Piñita:</label>
                                                <p><?php echo $fila[43] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Suelda con suelda:</label>
                                                <p><?php echo $fila[44] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Verdolaga :</label>
                                                <p><?php echo $fila[45] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Bledo :</label>
                                                <p><?php echo $fila[46] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Batatilla:</label>
                                                <p><?php echo $fila[47] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Boton Blanco:</label>
                                                <p><?php echo $fila[48] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Clavito de Agua :</label>
                                                <p><?php echo $fila[49] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Cortadera :</label>
                                                <p><?php echo $fila[50] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Coquito :</label>
                                                <p><?php echo $fila[51] ?></p>
                                                <label style="font-size: 12px; font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- -------------------------------------------------------------------- -->
             <!--        <div class="row">
                        <div class="col-md-12 box">

                <button class="action-button shadow animate blue" type='submit' id="btn_ProdProceso"><i class=" "></i> Registrar</button>
                <div id="contenedor_login"></div>
              </div>
                    </div> -->

            </div>
        </div>
    </div>


  <?php 
}
   ?>
   
    <style type="text/css">
        h4{
            color: #333333;
        }
        .buttons{
            padding: 20px;
            border: none;
            border-radius: 20px;
            margin: 15px;
            transition: all 0.5s ease;
            background-color: #ff9800; 
            font-weight:  bold;
            color: #fff;
        }
            .buttons:hover{
                box-shadow: 2px 2px 5px 3px #cecece;
                border: solid 1px #333;
            }
    </style>

    <script src="../../../assets/js/jquery-3.2.1.min.js"></script>

<script src="../../../assets/js/essential-plugins.js"></script>   

<script src="../../../assets/js/bootstrap.min.js"></script> 

<script src="../../../assets/js/main.js"></script>

<script type="text/javascript">$('body').removeClass("sidebar-mini").addClass("sidebar-collapse");</script>
        <?php

        }
        else
        {
            echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../../index.php?Acceso Denegado'</script>";
        }
    ?>
</body>
</html>