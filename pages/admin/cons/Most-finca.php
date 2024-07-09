<?php 

include '../../../assets/conexion/conexion.php';


session_start();
$usuario=($_SESSION['ADMINISTRADOR']); 
$Nombre=$_POST["Nombre"];
$Idtipo_cultivo=$_POST["Idtipo_cultivo"];




$query="SELECT `Idhacienda`, `Nombre`, `Tamano`, `kml` FROM `hacienda`
  WHERE Nombre LIKE '%$Nombre%'



";


// $conexion->set_charset('utf8');
  
$resource=mysqli_query($conexion,$query);


while ($fila=mysqli_fetch_row($resource)) {
 ?>
  


<tr> 

<td class='col-xs-2'><?php echo $fila[1] ?></td>
<td class='col-xs-2'><?php echo $fila[2] ?></td>



                        


                         
                          

                           </tr>




  <?php 
}
   ?>

