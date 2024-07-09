<script src="../librerias/jquery.min.js"></script> 
<script src="../plugins/sweetalert-master/dist/sweetalert.min.js"></script>
<script language="javascript" type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script language="javascript" type="text/javascript" src="../js/owl.carousel.min.js"></script>
<script language="javascript" type="text/javascript" src="../js/jquery.easing.min.js"></script>
<script language="javascript" type="text/javascript" src="../js/jquery.lwtCountdown-1.0.js"></script>
<script language="javascript" type="text/javascript" src="../js/misc.js"></script>
<script src="../estilos/bootstrap/js/bootstrap.min.js"></script>
<!--*****  VALIDACION LOGIN  *****-->
<!--******************************-->
<script>
  function login() 
  {
    var usuario=document.getElementById("usuario_ps").value;
    var password=document.getElementById("password_ps").value;
    $("#contenedor_login").load("login.php",
      {
        usuario:usuario,password:password
      }); 
  }
</script>
<!--*****  VALIDACION ORIENTACIÓN COORDENADAS  *****-->
<!--************************************************-->
<script>
  function Orilatitud(orientacionLat){
    if (orientacionLat.value<0) 
    {
        document.getElementById("orientacionLat").value='SUR';
    }
    else if (orientacionLat.value=="") 
    {
      document.getElementById("orientacionLat").value='';
    }
    else 
    {
        document.getElementById("orientacionLat").value='NORTE';
    }
  }
  function Orilongitud(orientacionLon){

      if (orientacionLon.value<0) 
    {
        document.getElementById("orientacionLon").value='OESTE';
    }
    else if (orientacionLon.value=="") 
    {
      document.getElementById("orientacionLon").value='';
    }
    else 
    {
        document.getElementById("orientacionLon").value='ESTE';
    }
  }
</script>
<!--*****  VALIDACION PUNTOS Y GUIONES COORDENADAS  *****-->
<!--*****************************************************-->
<script>
    function Coorla(e)
    {
      var teclaPulsada=window.event ? window.event.keyCode:e.which;
      var valor=document.getElementById("latitud_ps").value;
      if(teclaPulsada==45 && valor.indexOf("-")==-1)
      {
          document.getElementById("latitud_ps").value="-"+valor;  
      }
      if((teclaPulsada==13) || (teclaPulsada==46 && valor.indexOf(".")==-1))
      {
        return true;
      }
      if (teclaPulsada==08 && valor.indexOf(" ")==-1)
      {
        return true;
      }
      return /\d/.test(String.fromCharCode(teclaPulsada));
    }

    function Coorlo(e) 
    {
      var teclaPulsada=window.event ? window.event.keyCode:e.which;
      var valor=document.getElementById("longitud_ps").value;
      if(teclaPulsada==45 && valor.indexOf("-")==-1 )
        {
            document.getElementById("longitud_ps").value="-"+valor;
        }
        if(teclaPulsada==13 || (teclaPulsada==46 && valor.indexOf(".")==-1))
        {
            return true;
        }
        if (teclaPulsada==08 && valor.indexOf(" ")==-1)
        {
          return true;
        }
        return /\d/.test(String.fromCharCode(teclaPulsada));
    }
</script>
<!--*****  VALIDACION SOLO NÚMEROS *****-->
<!--************************************-->
<script type="text/javascript">
  function soloNumeros(e)
  {
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57 || key == 08 || key == 09 || key == 46)
  }  
</script>