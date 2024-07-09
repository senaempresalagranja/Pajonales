<?php 

include '../../../assets/conexion/conexion.php';


session_start();
$usuario=($_SESSION['ADMINISTRADOR']); 
$NombreCultivo=$_POST["NombreCultivo"];
$Idtipo_cultivo=$_POST["Idtipo_cultivo"];




$query="SELECT `idcultivo`, `NombreCultivo`, tipo_cultivo.Nombre FROM `cultivo`


INNER JOIN tipo_cultivo ON tipo_cultivo.Idtipo_cultivo = cultivo.Idtipo_cultivo 
  WHERE NombreCultivo LIKE '%$NombreCultivo%'

AND tipo_cultivo.Nombre LIKE '%$Idtipo_cultivo%'



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

