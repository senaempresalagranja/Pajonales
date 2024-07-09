<?php 

include 'include/conexion.php';
$finca=$_POST["finca"];



$query="SELECT * FROM lote WHERE Idhacienda=$finca ORDER BY NumeroLote";
$resource=mysqli_query($conexion,$query);

echo "<select name='lote' id='lote' class='lote form-control'>";
echo "<option value='Selecciona'  >Selecciona</option>";

while($fila=mysqli_fetch_row($resource)){

echo "<option value='$fila[0]'  onclick='mostrar_cultivo()' >$fila[1]</option>";



	

}

echo "</select>";


 ?>