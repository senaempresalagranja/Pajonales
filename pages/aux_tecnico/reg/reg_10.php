<?php
session_start();
if (isset($_SESSION['AUXILIAR TECNICO']))
{
	include '../../conexion.php';
	
	$usuario=($_SESSION['AUXILIAR TECNICO']);	
	date_default_timezone_set("America/Bogota");
	$fecha=date("Y-m-d H:i:s",time());

	$Spodoptera_ps=$_REQUEST['Spodoptera_ps'];
	$Grillotalpa_ps=$_REQUEST['Grillotalpa_ps'];
	$Blissus_ps=$_REQUEST['Blissus_ps'];
	$GusanoAlambre_ps=$_REQUEST['GusanoAlambre_ps'];
	$Mocis_ps=$_REQUEST['Mocis_ps'];
	$Spodoptera_ps_comedor=$_REQUEST['Spodoptera_ps_comedor'];
	$Panoquina_ps=$_REQUEST['Panoquina_ps'];
	$Platinota_ps=$_REQUEST['Platinota_ps'];
	$Tipotidae=$_REQUEST['Tipotidae'];
	$diatrea_ps=$_REQUEST['diatrea_ps'];
	$Rupella_ps=$_REQUEST['Rupella_ps'];
	$Chinches_ps=$_REQUEST['Chinches_ps'];
	$Sogata=$_REQUEST['Sogata'];
	$Helmintosporium_ps=$_REQUEST['Helmintosporium_ps'];
	$Cercospa_ps=$_REQUEST['Cercospa_ps'];
	$Piricularia_ps=$_REQUEST['Piricularia_ps'];
	$Rizhoctorinia=$_REQUEST['Rizhoctorinia'];
	$Gaeumanonomices=$_REQUEST['Gaeumanonomices'];
	$Sarocladium=$_REQUEST['Sarocladium'];
	$Pseudomona_fuscovagine_ps=$_REQUEST['Pseudomona_fuscovagine_ps'];
	$Burkholderia_glumae_ps=$_REQUEST['Burkholderia_glumae_ps'];
	$En_la_Espiga_ps=$_REQUEST['En_la_Espiga_ps'];
	$Arroz_Rojo_ps=$_REQUEST['Arroz_Rojo_ps'];
	$Liendrepuerco_ps=$_REQUEST['Liendrepuerco_ps'];
	$Caminadora_ps=$_REQUEST['Caminadora_ps'];
	$Falsa_Caminadora_ps=$_REQUEST['Falsa_Caminadora_ps'];
	$Paja_Peluda_ps=$_REQUEST['Paja_Peluda_ps'];
	$Paja_Mona_ps=$_REQUEST['Paja_Mona_ps'];
	$Guardarocio_ps=$_REQUEST['Guardarocio_ps'];
	$Pinita_ps=$_REQUEST['Pinita_ps'];
	$Suelda_con_suelda_ps=$_REQUEST['Suelda_con_suelda_ps'];
	$Verdolaga_ps=$_REQUEST['Verdolaga_ps'];	
	$Bledo_ps=$_REQUEST['Bledo_ps'];
	$Batatilla_ps=$_REQUEST['Batatilla_ps'];
	$Boton_Blanco_ps=$_REQUEST['Boton_Blanco_ps'];
	$Clavito_de_Agua_ps=$_REQUEST['Clavito_de_Agua_ps'];
	$Cortadera_ps=$_REQUEST['Cortadera_ps'];
	$Coquito_ps=$_REQUEST['Coquito_ps'];


	if ($_REQUEST['Spodoptera_ps']== ""): $Spodoptera_ps="N/A"; endif;
	if ($_REQUEST['Grillotalpa_ps']== ""): $Grillotalpa_ps="N/A"; endif;
	if ($_REQUEST['Blissus_ps']== ""): $Blissus_ps="N/A"; endif;
	if ($_REQUEST['GusanoAlambre_ps']== ""): $GusanoAlambre_ps="N/A"; endif;
	if ($_REQUEST['Mocis_ps']== ""): $Mocis_ps="N/A"; endif;
	if ($_REQUEST['Spodoptera_ps_comedor']== ""): $Spodoptera_ps_comedor="N/A"; endif;
	if ($_REQUEST['Panoquina_ps']== ""): $Panoquina_ps="N/A"; endif;
	if ($_REQUEST['Platinota_ps']== ""): $Platinota_ps="N/A"; endif;
	if ($_REQUEST['Tipotidae']== ""): $Tipotidae="N/A"; endif;
	if ($_REQUEST['diatrea_ps']== ""): $diatrea_ps="N/A"; endif;
	if ($_REQUEST['Rupella_ps']== ""): $Rupella_ps="N/A"; endif;
	if ($_REQUEST['Chinches_ps']== ""): $Chinches_ps="N/A"; endif;
	if ($_REQUEST['Sogata']== ""): $Sogata="N/A"; endif;
	if ($_REQUEST['Helmintosporium_ps']== ""): $Helmintosporium_ps="N/A"; endif;
	if ($_REQUEST['Cercospa_ps']== ""): $Cercospa_ps="N/A"; endif;
	if ($_REQUEST['Piricularia_ps']== ""): $Piricularia_ps="N/A"; endif;
	if ($_REQUEST['Rizhoctorinia']== ""): $Rizhoctorinia="N/A"; endif;
	if ($_REQUEST['Gaeumanonomices']== ""): $Gaeumanonomices="N/A"; endif;
	if ($_REQUEST['Sarocladium']== ""): $Sarocladium="N/A"; endif;
	if ($_REQUEST['Pseudomona_fuscovagine_ps']== ""): $Pseudomona_fuscovagine_ps="N/A"; endif;
	if ($_REQUEST['Burkholderia_glumae_ps']== ""): $Burkholderia_glumae_ps="N/A"; endif;
	if ($_REQUEST['En_la_Espiga_ps']== ""): $En_la_Espiga_ps="N/A"; endif;
	if ($_REQUEST['Arroz_Rojo_ps']== ""): $Arroz_Rojo_ps="N/A"; endif;
	if ($_REQUEST['Liendrepuerco_ps']== ""): $Liendrepuerco_ps="N/A"; endif;
	if ($_REQUEST['Caminadora_ps']== ""): $Caminadora_ps="N/A"; endif;
	if ($_REQUEST['Falsa_Caminadora_ps']== ""): $Falsa_Caminadora_ps="N/A"; endif;
	if ($_REQUEST['Paja_Peluda_ps']== ""): $Paja_Peluda_ps="N/A"; endif;
	if ($_REQUEST['Paja_Mona_ps']== ""): $Paja_Mona_ps="N/A"; endif;
	if ($_REQUEST['Guardarocio_ps']== ""): $Guardarocio_ps="N/A"; endif;
	if ($_REQUEST['Pinita_ps']== ""): $Pinita_ps="N/A"; endif;
	if ($_REQUEST['Suelda_con_suelda_ps']== ""): $Suelda_con_suelda_ps="N/A"; endif;
	if ($_REQUEST['Verdolaga_ps']== ""): $Verdolaga_ps="N/A"; endif;	
	if ($_REQUEST['Bledo_ps']== ""): $Bledo_ps="N/A"; endif;
	if ($_REQUEST['Batatilla_ps']== ""): $Batatilla_ps="N/A"; endif;
	if ($_REQUEST['Boton_Blanco_ps']== ""): $Boton_Blanco_ps="N/A"; endif;
	if ($_REQUEST['Clavito_de_Agua_ps']== ""): $Clavito_de_Agua_ps="N/A"; endif;
	if ($_REQUEST['Cortadera_ps']== ""): $Cortadera_ps="N/A"; endif;
	if ($_REQUEST['Coquito_ps']== ""): $Coquito_ps="N/A"; endif;
		
		$consulta=mysqli_query($conexion,"INSERT INTO r9 (Idlotecultivo,latitud_ps,orientacionLat,longitud_ps,orientacionLon,numGranosPanicula_ps,peso_ps,vaneamiento_ps,fecha_ps,Spodoptera_ps, Grillotalpa_ps,Blissus_ps,GusanoAlambre_ps,Mocis_ps,Spodoptera_ps_comedor,Panoquina_ps,Platinota_ps,Tipotidae,diatrea_ps,Rupella_ps,Chinches_ps,Sogata,Helmintosporium_ps,Cercospa_ps,Piricularia_ps,Rizhoctorinia,Gaeumanonomices,Sarocladium,Pseudomona_fuscovagine_ps,Burkholderia_glumae_ps,En_la_Espiga_ps,Arroz_Rojo_ps,Liendrepuerco_ps,Caminadora_ps,Falsa_Caminadora_ps,Paja_Peluda_ps,Paja_Mona_ps,Guardarocio_ps,Pinita_ps,Suelda_con_suelda_ps,Verdolaga_ps,Bledo_ps,Batatilla_ps,Boton_Blanco_ps,Clavito_de_Agua_ps,Cortadera_ps,Coquito_ps,fechaRegistro,id_usuario)
					VALUES (
					'$_REQUEST[id_lotecultivo]',
					'$_REQUEST[latitud_ps]',
					'$_REQUEST[orientacionLat]',
					'$_REQUEST[longitud_ps]',
					'$_REQUEST[orientacionLon]',
					'$_REQUEST[numGranosPanicula_ps]',
					'$_REQUEST[peso_ps]',
					'$_REQUEST[vaneamiento_ps]',
					'$_REQUEST[fecha_ps]',
					
					'$Spodoptera_ps',
					'$Grillotalpa_ps',
					'$Blissus_ps',
					'$GusanoAlambre_ps',
					'$Mocis_ps',
					'$Spodoptera_ps_comedor',
					'$Panoquina_ps',
					'$Platinota_ps',
					'$Tipotidae',
					'$diatrea_ps',
					'$Rupella_ps',
					'$Chinches_ps',
					'$Sogata',
					'$Helmintosporium_ps',
					'$Cercospa_ps',
					'$Piricularia_ps',
					'$Rizhoctorinia',
					'$Gaeumanonomices',
					'$Sarocladium',
					'$Pseudomona_fuscovagine_ps',
					'$Burkholderia_glumae_ps',
					'$En_la_Espiga_ps',
					'$Arroz_Rojo_ps',
					'$Liendrepuerco_ps',
					'$Caminadora_ps',
					'$Falsa_Caminadora_ps',
					'$Paja_Peluda_ps',
					'$Paja_Mona_ps',
					'$Guardarocio_ps',
					'$Pinita_ps',
					'$Suelda_con_suelda_ps',
					'$Verdolaga_ps',	
					'$Bledo_ps',
					'$Batatilla_ps',
					'$Boton_Blanco_ps',
					'$Clavito_de_Agua_ps',
					'$Cortadera_ps',
					'$Coquito_ps',
					'$fecha',
					'$usuario')")

				or die ("Problemas en el select ".mysqli_error());
				echo "<script type='text/javascript'>alert('Actividad Registrada');location='../frm_r9.php'</script>";
}
else
{
  echo "<script type='text/javascript'>alert('Parece que su Sesion ha finalizado, por favor Inicie Sesion');location='../index.php?Acceso Denegado'</script>";
}		
?>


