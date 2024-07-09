<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="icon" type="image/png" href="assets/img/Logo_Pajonales.png"/>
    <title>Pajonales</title>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload="load()">
  <div id="pagina_completa">
    <div class="bg-white-primary" id="Innovacion">
      <div class="container">
        <div class="row">
         <div class="logo"><img src="assets/img/Logo_Pajonales.png" alt="Logo Pajonales" class="Logo_Login"></div>
          

          <form action="assets/conexion/sesion.php" id="formulario_login" method="post">
            <div class="col-md-6 col-md-offset-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="usuario_ps" class="form-control-label">Usuario</label>
                  <div class=" input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user-circle"></i></span>
                    <input type="text" name="usuario_ps" id="usuario_ps" class="form-control" aria-describedby="basic-addon1" onkeyup="this.value=this.value.toUpperCase()">
                  </div>  
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="password_ps" class="form-control-label">Cosntraseña</label>
                  <div class=" input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-expeditedssl"></i></span>
                    <input type="password" name="password_ps" id="password_ps" class="form-control" aria-describedby="basic-addon1">
                  </div>  
                </div>
              </div>
      
                   
              <div class="col-md-12"><div id="contenedor_login"></div></div>    
              <div class="col-md-12 box">

                <button class="action-button shadow animate blue" value="Ingresar" onclick="login()" type="button"><i class=" fa fa-sign-in"></i> Ingresar</button>
                
              </div>
                   
            </div>   
          </form>
        </div>
      </div>
    </div>
  </div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>

<script src="assets/js/essential-plugins.js"></script>   

<script src="assets/js/bootstrap.min.js"></script> 

<script src="assets/js/main.js"></script>

<!-- <script src="../../../assets/js/bootstrap-datepicker.js"></script> 

<script src="../../../assets/js/bootstrap-datepicker.es.min.js"></script> 

<script src="../../../assets/js/sweetalert2.min.js"></script> -->

<!-- <script type="text/javascript">$('body').removeClass("sidebar-mini").addClass("sidebar-collapse");</script> -->

<script>
function login() {

    var usuario_ps=document.getElementById("usuario_ps").value;

    var password_ps=document.getElementById("password_ps").value;

    $("#contenedor_login").load("assets/conexion/login.php",{usuario_ps:usuario_ps,password_ps:password_ps}); 
    // alert("kpkp");
  }
</script>  



  <footer>
    <h5>Software De Georeferenciacion</h5>
    <p>© 2017 Pajonales, todos los derechos reservados.</p>
      <div class="footer-icons">
          <i class="footer-ico fa fa-facebook"></i>
          <i class="footer-ico fa fa-twitter"></i>
          <i class="footer-ico fa fa-youtube"></i>
      </div>
  </footer>      
</body>
</html>


