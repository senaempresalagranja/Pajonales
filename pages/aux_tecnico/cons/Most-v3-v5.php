<?php 

include '../../../assets/conexion/conexion.php';


session_start();
$usuario=($_SESSION['ADMINISTRADOR']); 
$fechainiciomacollamiento_ps=$_POST["fechainiciomacollamiento_ps"];
$NumeroLote=$_POST["NumeroLote"];




$query="SELECT `id_preparacionSuelo`, hacienda.Nombre, lote.NumeroLote, cultivo.NombreCultivo, tipo_cultivo.Nombre,  `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `fechainiciomacollamiento_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario` FROM `v3_v5` 
INNER JOIN lotecultivo ON lotecultivo.Idlotecultivo = v3_v5.Idlotecultivo
INNER JOIN lote ON lote.Idlote = lotecultivo.Idlote
INNER JOIN hacienda ON hacienda.Idhacienda = lote.IdHacienda
INNER JOIN cultivo on cultivo.idcultivo = lotecultivo.idcultivo
INNER JOIN tipo_cultivo ON tipo_cultivo.Idtipo_cultivo = cultivo.Idtipo_cultivo 
  WHERE fechainiciomacollamiento_ps LIKE '%$fechainiciomacollamiento_ps%'

AND lote.NumeroLote LIKE '%$NumeroLote%'



  ";


// $conexion->set_charset('utf8');
  
$resource=mysqli_query($conexion,$query);


while ($fila=mysqli_fetch_row($resource)) {
 ?>
  


<tr> 

<td class='col-xs-2'><?php echo $fila[1] ?></td>
<td class='col-xs-2'><?php echo $fila[2] ?></td>
<td class='col-xs-2'><?php echo $fila[3] ?></td>
<td class='col-xs-2'><?php echo $fila[4] ?></td>

<td class='col-xs-2'><?php echo $fila[9] ?></td>


                        


                          <td class='col-xs-1'>
                           <form style='float:left' action='most/Mostrar_v3-v5.php' method='post'>  
                              <input type='hidden' name='id' value=' <?php echo $fila[0] ?>'>
                              <button class='boton-ver' type='submit' value='ver mas'><i class='fa fa-eye'></i></button>
                           </form>
                           
                          </td>

                          

                           </tr>




  <?php 
}
   ?>

