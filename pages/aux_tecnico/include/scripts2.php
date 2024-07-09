 <script>
        

function mostrar_lote1() {
    var finca=document.getElementById('finca1').value;


$("#contenedor_lote1").load("mostrar_lote1.php",{finca:finca})
}



function mostrar_cultivo() {


var lote1=document.getElementById('lote1').value;


$("#contenedor_cultivo").load("mostrar_cultivo.php",{lote1:lote1})

}
</script>

<script src="../../assets/js/jquery-3.2.1.min.js"></script>

<script src="../../assets/js/essential-plugins.js"></script>   

<script src="../../assets/js/bootstrap.min.js"></script> 

<script src="../../assets/js/main.js"></script>

<script src="../../assets/js/bootstrap-datepicker.js"></script> 

<script src="../../assets/js/bootstrap-datepicker.es.min.js"></script> 

<script src="../../assets/js/sweetalert2.min.js"></script>

<script type="text/javascript">$('body').removeClass("sidebar-mini").addClass("sidebar-collapse");</script>


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


