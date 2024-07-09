<?php 

include '../../../assets/conexion/conexion.php';


session_start();
$usuario=($_SESSION['ADMINISTRADOR']); 
$NumeroLote=$_POST["NumeroLote"];
$IdHacienda=$_POST["IdHacienda"];




$query="


SELECT `Idlote`, `NumeroLote`, hacienda.Nombre, `Ha` FROM `lote`

INNER JOIN hacienda ON hacienda.Idhacienda = lote.IdHacienda
  WHERE NumeroLote LIKE '%$NumeroLote%'

AND hacienda.Nombre LIKE '%$IdHacienda%'



  ";


// $conexion->set_charset('utf8');
  
$resource=mysqli_query($conexion,$query);


while ($fila=mysqli_fetch_row($resource)) {
 ?>
  


<tr> 

<td class='col-xs-2'><?php echo $fila[1] ?></td>
<td class='col-xs-2'><?php echo $fila[2] ?></td>

<td class='col-xs-2'><?php echo $fila[3] ?></td>



                        


                         
                          

                           </tr>




  <?php 
}
   ?>

