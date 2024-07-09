<script src="librerias/jquery.min.js"></script> 
<script src="plugins/sweetalert-master/dist/sweetalert.min.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script language="javascript" type="text/javascript" src="js/owl.carousel.min.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.easing.min.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
<script language="javascript" type="text/javascript" src="js/misc.js"></script>
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  -->
<script src="estilos/bootstrap/js/bootstrap.min.js"></script>
<script>
  function login() {
    var usuario=document.getElementById("usuario_ps").value;

    var password=document.getElementById("password_ps").value;
    $("#contenedor_login").load("login.php",{usuario_ps:usuario,password_ps:password}); 
  }
</script>
<!--*****  VALIDACION ORIENTACIÓN COORDENADAS  *****-->
<!--************************************************-->
