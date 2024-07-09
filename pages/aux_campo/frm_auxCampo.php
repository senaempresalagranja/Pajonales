<?php
session_start();
if (isset($_SESSION['AUXILIAR CAMPO']))
{ 
  include 'include/conexion.php';
  $usuario=($_SESSION['AUXILIAR CAMPO']);
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
    <h1>CRONOGRAMA DE ACTIVIDADES DE CULTIVOS (AUXILIAR CAMPO)</h1>
</div>
    <div id="pagina_completa">

        <div class="bg-white-primary" id="Innovacion">
            <div class="container">                   
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
                                        echo "<option value='$fila[0]'>$fila[1]</option>";
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
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="Subcentro">VARIEDAD:</label>
                            <input type="text" name="subcentro_pp" class="form-control" id="Subcentro" required/>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="Subcentro">FECHA:</label>
                            <input type="text" name="subcentro_pp" class="form-control" id="Subcentro" required/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="sdfsdf">ACTIVIDAD:</label>
                            <select name="presentacion_pp" class="form-control" required/>
                                <option selected disabled>::.SELECCIONE.::</option>
                                <option value='Rome'>Rome</option>
                                <option value='Rastra'>Rastra</option>
                                <option value='Arado Cincel'>Arado Cincel</option>
                                <option value='Nivelación Land Plane'>Nivelación Land Plane</option>
                                <option value='Aplicación de Enmiendas'>Aplicación de Enmiendas</option>
                                <option value='Caballoneo - Embalconado'>Caballoneo - Embalconado</option>
                                <option value='Limpieza Canales y drenajes'>Limpieza Canales y drenajes</option>
                                <option value='Rondas de arboles en linderos'>Rondas de arboles en linderos</option>
                                <option value='Riegos para quemas'>Riegos para quemas</option>
                                <option value='Control Malezas (Quemas)'>Control Malezas (Quemas)</option>
                                <option value='Siembra'>Siembra</option>
                                <option value='Riegos'>Riegos</option>
                                <option value='Fertilización al momento Siembras'>Fertilización al momento Siembras</option>
                                <option value='Control Malezas (Pre-emergencias)'>Control Malezas (Pre-emergencias)</option>
                                <option value='Fertilización 1 Post'>Fertilización 1 Post</option>
                                <option value='Control Malezas (Sello)'>Control Malezas (Sello)</option>
                                <option value='Fertilización 2 Post'>Fertilización 2 Post</option>
                                <option value='Aplicación de fertilizantes Foliar'>Aplicación de fertilizantes Foliar</option>
                                <option value='Control Malezas (Selectivos)'>Control Malezas (Selectivos)</option>
                                <option value='Contol Malezas dirigidas'>Contol Malezas dirigidas</option>
                                <option value='Fertilización 3 Post'>Fertilización 3 Post</option>
                                <option value='Deshierbas'>Deshierbas</option>
                                <option value='Fertilización 4 Post'>Fertilización 4 Post</option>
                                <option value='Fertilización 5 Post'>Fertilización 5 Post</option>
                                <option value='Aplicación insecticidas'>Aplicación insecticidas</option>
                                <option value='Aplicación fungicidas'>Aplicación fungicidas</option>
                                <option value='Aplicación Reguladores de crecimiento'>Aplicación Reguladores de crecimiento</option>
                                <option value='Capada de Algodón'>Capada de Algodón</option>
                                <option value='Cosechas'>Cosechas</option>
                                <option value='Raspigueos'>Raspigueos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="sdfsdf">Etapa Aplicación/Control:</label>
                            <select name="presentacion_pp" class="form-control" required/>
                                <option selected disabled>::.SELECCIONE.::</option>
                                <option value='Rto 1,1 Horas/Ha Max 2 Pases'>Rto 1,1 Horas/Ha Max 2 Pases</option>
                                <option value='Rto 0,7 Horas/Ha Max 2 Pases'>Rto 0,7 Horas/Ha Max 2 Pases</option>
                                <option value='Rto 1,1 Horas/Ha Max 2 Pases'>Rto 1,1 Horas/Ha Max 2 Pases</option>
                                <option value='Rto 1,0 Horas/Ha Max 2 Pases'>Rto 1,0 Horas/Ha Max 2 Pases</option>
                                <option value='Incorporado con última rastra'>Incorporado con última rastra</option>
                                <option value='Diferencia entre curvas 5-10 cms'>Diferencia entre curvas 5-10 cms</option>
                                <option value='Colmatado 10 cms y maleza sin espigar'>Colmatado 10 cms y maleza sin espigar</option>
                                <option value='3 metros hacia adentro del lote'>3 metros hacia adentro del lote</option>
                                <option value='Capacidad de campo'>Capacidad de campo</option>
                                <option value='Máximo 4 macollas'>Máximo 4 macollas</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12 box">

                <button class="action-button shadow animate blue" type='submit' id="btn_ProdProceso"><i class=" "></i> Registrar</button>
                <div id="contenedor_login"></div>
              </div>
                    </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .buttons{
            padding: 20px ;
            border: none  ;
            border-radius: 20px;
            margin: 15px;
            transition: all 0.5s ease;
            background-color: #ff9800; 
            font-weight:  bold;
            color: #fff;
        }
            .buttons:hover{
                box-shadow: 2px 2px 5px 3px #cecece ;
                border: solid 1px #333;
            }
    </style>
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