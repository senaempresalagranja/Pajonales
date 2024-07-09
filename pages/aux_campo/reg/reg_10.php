<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{
	include '../../conexion.php';
	
	$usuario=($_SESSION['ADMINISTRADOR']);	
	date_default_timezone_set("America/Bogota");
	$fecha=date("Y-m-d H:i:s",time());
		
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
					'$_REQUEST[Spodoptera_ps]',
					'$_REQUEST[Grillotalpa_ps]',
					'$_REQUEST[Blissus_ps]',
					'$_REQUEST[GusanoAlambre_ps]',
					'$_REQUEST[Mocis_ps]',
					'$_REQUEST[Spodoptera_ps_comedor]',
					'$_REQUEST[Panoquina_ps]',
					'$_REQUEST[Platinota_ps]',
					'$_REQUEST[Tipotidae]',
					'$_REQUEST[diatrea_ps]',
					'$_REQUEST[Rupella_ps]',
					'$_REQUEST[Chinches_ps]',
					'$_REQUEST[Sogata]',
					'$_REQUEST[Helmintosporium_ps]',
					'$_REQUEST[Cercospa_ps]',
					'$_REQUEST[Piricularia_ps]',
					'$_REQUEST[Rizhoctorinia]',
					'$_REQUEST[Gaeumanonomices]',
					'$_REQUEST[Sarocladium]',
					'$_REQUEST[Pseudomona_fuscovagine_ps]',
					'$_REQUEST[Burkholderia_glumae_ps]',
					'$_REQUEST[En_la_Espiga_ps]',
					'$_REQUEST[Arroz_Rojo_ps]',
					'$_REQUEST[Liendrepuerco_ps]',
					'$_REQUEST[Caminadora_ps]',
					'$_REQUEST[Falsa_Caminadora_ps]',
					'$_REQUEST[Paja_Peluda_ps]',
					'$_REQUEST[Paja_Mona_ps]',
					'$_REQUEST[Guardarocio_ps]',
					'$_REQUEST[Pinita_ps]',
					'$_REQUEST[Suelda_con_suelda_ps]',
					'$_REQUEST[Verdolaga_ps]',	
					'$_REQUEST[Bledo_ps]',
					'$_REQUEST[Batatilla_ps]',
					'$_REQUEST[Boton_Blanco_ps]',
					'$_REQUEST[Clavito_de_Agua_ps]',
					'$_REQUEST[Cortadera_ps]',
					'$_REQUEST[Coquito_ps]',
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


