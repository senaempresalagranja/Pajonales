
<?php
include "conexion.php";
$password=$_POST['password_ps'];
$usuario=$_POST['usuario_ps'];

$res=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario_ps='$usuario'")	or die(mysqli_error());
$reg=mysqli_fetch_row($res);
if ($reg==true) {
	echo "<script>


var formulario_login=document.getElementById('formulario_login').submit();
	</script>";
}else{

	echo "Usuario o Contraseña Invalido";
}
	
?>