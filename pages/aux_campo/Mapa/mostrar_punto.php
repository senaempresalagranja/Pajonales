<?php 


if (isset($_POST["id_punto"])) {
$id_punto=$_POST["id_punto"];
$nombre_tabla=$_POST["nombre_tabla"];
   $hosting="localhost";
   $usua="root";
   $contraseña="";
   $bs="pajonales";

   $conexion=mysqli_connect($hosting,$usua,$contraseña,$bs) or die("error en $conexion");
$query="SELECT  lote.NumeroLote,cultivo.NombreCultivo, `latitud_ps`,`orientacionLat`, `longitud_ps`,`orientacionLon`, `fechainicioPrimordio_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`,fechaRegistro, usuarios.nombre_ps FROM $nombre_tabla INNER JOIN lotecultivo ON $nombre_tabla.Idlotecultivo=lotecultivo.Idlotecultivo INNER JOIN lote ON lotecultivo.Idlote=lote.Idlote INNER JOIN cultivo ON lotecultivo.idcultivo=cultivo.idcultivo INNER JOIN usuarios ON $nombre_tabla.`id_usuario`=usuarios.id_usuario WHERE `id_preparacionSuelo`=$id_punto";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);


 ?>
	


<h3>FASE <?php echo $nombre_tabla ?></h3>
<p class="help-block"><?php echo $fila[47] ?></p>
<p class="help-block">Fecha Registro: <?php echo $fila[46] ?> </p>
<p class="help-block"><?php echo $fila[0] . "--" . $fila[1] ?></p>
<table class="table table-bordered">
	<tr>
		<td>Latitud</td>
		<td><code><?php echo $fila[2] . " " . $fila[3]  ?></code></td>
	</tr>
	<tr>
		<td>Longitud</td>
		<td><code><?php echo $fila[4] . " " .$fila[5]  ?></code></td>
	</tr>
	<tr>
		<td>Fecha Primordio</td>
		<td><?php echo $fila[6] ?></td>
	</tr>
	<tr>
		<td>Fecha PS</td>
		<td><?php echo $fila[7] ?></td>
	</tr>
	<tr>
		<td>Espodoctera PS</td>
		<td><?php echo $fila[8] ?></td>
	</tr>
	<tr>
		<td>Grillotalpa</td>
		<td><?php echo $fila[9] ?></td>
	</tr>
	<tr>
		<td>Blissus PS</td>
		<td><?php echo $fila[10] ?></td>
	</tr>
	<tr>
		<td>Gusano Alambre PS</td>
		<td><?php echo $fila[11] ?></td>
	</tr>
	<tr>
		<td>Mocis PS</td>
		<td><?php echo $fila[12] ?></td>
	</tr>
	<tr>
		<td>Sodoptera PS comedor</td>
		<td><?php echo $fila[13] ?></td>
	</tr>
	<tr>
		<td>Panoquina PS</td>
		<td><?php echo $fila[14] ?></td>
	</tr>
	<tr>
		<td>Platinota PS</td>
		<td><?php echo $fila[15] ?></td>
	</tr>
	<tr>
		<td>TipoTidae PS</td>
		<td><?php echo $fila[16] ?></td>
	</tr>
	<tr>
		<td>Diatrea PS</td>
		<td><?php echo $fila[17] ?></td>
	</tr>
	<tr>
		<td>Rupella PS</td>
		<td><?php echo $fila[18] ?></td>
	</tr>
	<tr>
		<td>Chinches PS</td>
		<td><?php echo $fila[19] ?></td>
	</tr>
	<tr>
		<td>Sogata PS</td>
		<td><?php echo $fila[20] ?></td>
	</tr>
	<tr>
		<td>Helmintosporium PS</td>
		<td><?php echo $fila[21] ?></td>
	</tr>
	<tr>
		<td>Cercospa PS</td>
		<td><?php echo $fila[22] ?></td>
	</tr>
	<tr>
		<td>Piricularia PS</td>
		<td><?php echo $fila[23] ?></td>
	</tr>
	<tr>
		<td>Rizhoctorinia</td>
		<td><?php echo $fila[24] ?></td>
	</tr>
	<tr>
		<td>Gaeumanonomices</td>
		<td><?php echo $fila[25] ?></td>
	</tr>
	<tr>
		<td>Sarocladium</td>
		<td><?php echo $fila[26] ?></td>
	</tr>
	<tr>
		<td>Pseudomona fuscovagine PS</td>
		<td><?php echo $fila[27] ?></td>
	</tr>
	<tr>
		<td>Burkholderia glumae</td>
		<td><?php echo $fila[28] ?></td>
	</tr>
	<tr>
		<td>En la Espiga PS</td>
		<td><?php echo $fila[29] ?></td>
	</tr>
	<tr>
		<td>Arroz Rojo PS</td>
		<td><?php echo $fila[30] ?></td>
	</tr>
	<tr>
		<td>Liendrepuerco PS</td>
		<td><?php echo $fila[31] ?></td>
	</tr>
	<tr>
		<td>Caminadora PS</td>
		<td><?php echo $fila[32] ?></td>
	</tr>
	<tr>
		<td>Falsa Caminadora PS</td>
		<td><?php echo $fila[33] ?></td>
	</tr>
	<tr>
		<td>Paja Peluda PS</td>
		<td><?php echo $fila[34] ?></td>
	</tr>
	<tr>
		<td>Paja Mona PS</td>
		<td><?php echo $fila[35] ?></td>
	</tr>
	<tr>
		<td>Guardarocio PS</td>
		<td><?php echo $fila[36] ?></td>
	</tr>
	<tr>
		<td>Pinita</td>
		<td><?php echo $fila[37] ?></td>
	</tr>
	<tr>
		<td>Suelda con suelda PS</td>
		<td><?php echo $fila[38] ?></td>
	</tr>
	<tr>
		<td>Verdolaga</td>
		<td><?php echo $fila[39] ?></td>
	</tr>
	<tr>
		<td>Bledo PS</td>
		<td><?php echo $fila[40] ?></td>
	</tr>
	<tr>
		<td>Batatilla</td>
		<td><?php echo $fila[41] ?></td>
	</tr>
	<tr>
		<td>Boton Blanco</td>
		<td><?php echo $fila[42] ?></td>
	</tr>
	<tr>
		<td>Clavito de Agua</td>
		<td><?php echo $fila[43] ?></td>
	</tr>
	<tr>
		<td>Cortadera</td>
		<td><?php echo $fila[44] ?></td>
	</tr>
	<tr>
		<td>Coquito</td>
		<td><?php echo $fila[45] ?></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td></td><td></td>
	</tr>
</table>
<?php
}else{

echo "<script>


 document.getElementById('popup').style.display='none';
</script>";

}


 ?>

