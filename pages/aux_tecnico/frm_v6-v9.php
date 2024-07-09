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
    <h1>V6 - V9</h1>
</div>
    <div id="pagina_completa">
        <div class="bg-white-primary" id="Innovacion">
            <div class="container">
                <form action="reg/reg_5.php" method="post">

                    <div row="row">
                        <div class="col-md-4">
                            <label for="finca1">Finca:</label>
                            <div id="">
                                <select name="finca1" onclick='mostrar_lote1()' id="finca1"  class="finca1 form-control" required/>
                                    <option value="Selecciona" selected disabled>Seleccione</option>
                                    <?php

                                        $query="SELECT * FROM hacienda ORDER BY Nombre";
                                        $resource=mysqli_query($conexion,$query);
                                        while ($fila=mysqli_fetch_row($resource)) 
                                        {
                                            echo "<option   value='$fila[0]' >$fila[1]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Lote:</label>
                            <div id="contenedor_lote1">
                                <select  class="form-control cultivos" name="lote1" id="lote1" required/>
                                    <option value="Selecctiona" selected disabled>Seleccione</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Cultivo:</label>
                            <div id="contenedor_cultivo">
                                <select  class="form-control" name="" id="" required/>
                                    <option value="Selecctiona" selected disabled>Seleccione</option>
                                </select>
                            </div>
                        </div>
                    </div>
<!-- ---------------------------------------------------------- -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4 class="text-center">Diligencie las Coordenadas:</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="latitud_ps">Latitud:</label>
                                <input type="text" name="latitud_ps" class="form-control" id="latitud_ps" maxlength="10" onkeypress="return Coorla(event);" onkeyup="Orilatitud(this);" required/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="orientacionLat">Orientación:</label>
                                <input type="text" name="orientacionLat" class="form-control" id="orientacionLat" readonly="readonly">
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
                                <input type="text" name="longitud_ps" class="form-control" id="longitud_ps" maxlength="10" onkeypress="return Coorlo(event);" onkeyup="Orilongitud(this);" required/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="orientacionLon">Orientación:</label>
                                <input type="text" name="orientacionLon" class="form-control" id="orientacionLon" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4 class="text-center">1. Actividades</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="macollas_ps">Macollas/m²:</label>
                                <input type="text" name="macollas_ps" class="form-control" id="macollas_ps" required/>
                                <label style="font-style: italic;">Est. Crec R0 ==>300 a 500 macollas</label>
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fecha_ps">Fecha:</label>
                                                <input type="date" name="fecha_ps" class="form-control" id="fecha_ps" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Spodoptera:</label>
                                                <input type="text" name="Spodoptera_ps" class="form-control" id="Spodoptera_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;"><=10% de daño</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Grillotalpa:</label>
                                                <input type="text" name="Grillotalpa_ps" class="form-control" id="Grillotalpa_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;"><=10% de daño</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Blissus_ps">Blissus:</label>
                                                <input type="text" name="Blissus_ps" class="form-control" id="Blissus_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;"><=10% de daño</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="GusanoAlambre_ps">Gusano Alambre:</label>
                                                <input type="text" name="GusanoAlambre_ps" class="form-control" id="GusanoAlambre_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;"><=10% de daño</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fecha_ps">Mocis:</label>
                                                <input type="text" name="Mocis_ps" class="form-control" id="Mocis_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">< de 5 larvas/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">spodoptera:</label>
                                                <input type="text" name="Spodoptera_ps_comedor" class="form-control" id="Spodoptera_ps_comedor" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">< de 5 larvas/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Panoquina:</label>
                                                <input type="text" name="Panoquina_ps" class="form-control" id="Panoquina_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">< de 5 larvas/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Blissus_ps">Platinota :</label>
                                                <input type="text" name="Platinota_ps" class="form-control" id="Platinota_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">< de 5 larvas/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Tipotidae">Tipotidae:</label>
                                                <input type="text" name="Tipotidae" class="form-control" id="Tipotidae" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">< de 5 larvas/m2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="diatrea_ps">Diatrea :</label>
                                                <input type="text" name="diatrea_ps" class="form-control" id="diatrea_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;"><=3%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Rupella:</label>
                                                <input type="text" name="Rupella_ps" class="form-control" id="Rupella_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;"><=3%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Chinches:</label>
                                                <input type="text" name="Chinches_ps" class="form-control" id="Chinches_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">< 20 insectos en 10 pases dobles de jama</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Sogata">Sogata:</label>
                                                <input type="text" name="Sogata" class="form-control" id="Sogata" onkeypress='return soloNumeros(event)'>
                                                 <label style="font-style: italic;font-weight: normal;color: #009b55;">< 20 insectos en 10 pases dobles de jama</label>
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
                                                <input type="text" name="Helmintosporium_ps" class="form-control" id="Helmintosporium_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Cercospa:</label>
                                                <input type="text" name="Cercospa_ps" class="form-control" id="Cercospa_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Piricularia:</label>
                                                <input type="text" name="Piricularia_ps" class="form-control" id="Piricularia_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Rizhoctorinia">Rizhoctorinia:</label>
                                                <input type="text" name="Rizhoctorinia" class="form-control" id="Rizhoctorinia" onkeypress='return soloNumeros(event)'>
                                                 <label style="font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Gaeumanonomices">Gaeumanonomices:</label>
                                                <input type="text" name="Gaeumanonomices" class="form-control" id="Gaeumanonomices" onkeypress='return soloNumeros(event)'>
                                                 <label style="font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>      <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Sarocladium">Sarocladium:</label>
                                                <input type="text" name="Sarocladium" class="form-control" id="Sarocladium" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>          
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fecha_ps">Pseudomona fuscovagine :</label>
                                                <input type="text" name="Pseudomona_fuscovagine_ps" class="form-control" id="Pseudomona_fuscovagine_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Burkholderia glumae :</label>
                                                <input type="text" name="Burkholderia_glumae_ps" class="form-control" id="Burkholderia_glumae_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">Incidencia 10%  Severidad 10%</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">En la Espiga :</label>
                                                <input type="text" name="En_la_Espiga_ps" class="form-control" id="En_la_Espiga_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">< 10% de gramo manchado </label>
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
                                                <input type="text" name="Arroz_Rojo_ps" class="form-control" id="Arroz_Rojo_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1  plantulas/m2</label>
                                            </div>
                                        </div>
                        
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Liendrepuerco:</label>
                                                <input type="text" name="Liendrepuerco_ps" class="form-control" id="Liendrepuerco_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>

                                             <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Caminadora:</label>
                                                <input type="text" name="Caminadora_ps" class="form-control" id="Caminadora_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>

                                             <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Falsa Caminadora:</label>
                                                <input type="text" name="Falsa_Caminadora_ps" class="form-control" id="Falsa_Caminadora_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>

                                             <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Paja Peluda:</label>
                                                <input type="text" name="Paja_Peluda_ps" class="form-control" id="Paja_Peluda_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                              <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fecha_ps">Paja Mona:</label>
                                                <input type="text" name="Paja_Mona_ps" class="form-control" id="Paja_Mona_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Guardarocio:</label>
                                                <input type="text" name="Guardarocio_ps" class="form-control" id="Guardarocio_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Piñita:</label>
                                                <input type="text" name="Pinita_ps" class="form-control" id="Pinita_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Suelda con suelda:</label>
                                                <input type="text" name="Suelda_con_suelda_ps" class="form-control" id="Suelda_con_suelda_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Verdolaga :</label>
                                                <input type="text" name="Verdolaga_ps" class="form-control" id="Verdolaga_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Bledo :</label>
                                                <input type="text" name="Bledo_ps" class="form-control" id="Bledo_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Batatilla:</label>
                                                <input type="text" name="Batatilla_ps" class="form-control" id="Batatilla_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Spodoptera_ps">Boton Blanco:</label>
                                                <input type="text" name="Boton_Blanco_ps" class="form-control" id="Boton_Blanco_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Clavito de Agua :</label>
                                                <input type="text" name="Clavito_de_Agua_ps" class="form-control" id="Clavito_de_Agua_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Cortadera :</label>
                                                <input type="text" name="Cortadera_ps" class="form-control" id="Cortadera_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Grillotalpa_ps">Coquito :</label>
                                                <input type="text" name="Coquito_ps" class="form-control" id="Coquito_ps" onkeypress='return soloNumeros(event)'>
                                                <label style="font-style: italic;font-weight: normal;color: #009b55;">1 planta/m2</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
        <?php
        include'include/footer.php';
        include'include/scripts2.php';
        }
        else
        {
            echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../index.php?Acceso Denegado'</script>";
        }
    ?>
</body>
</html>