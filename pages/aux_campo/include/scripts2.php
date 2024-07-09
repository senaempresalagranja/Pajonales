<script src="../../assets/js/jquery-3.2.1.min.js"></script>

<script src="../../assets/js/essential-plugins.js"></script>   

<script src="../../assets/js/bootstrap.min.js"></script> 

<script src="../../assets/js/main.js"></script>

<script src="../../assets/js/bootstrap-datepicker.js"></script> 

<script src="../../assets/js/bootstrap-datepicker.es.min.js"></script> 

<script src="../../assets/js/sweetalert2.min.js"></script>

<script type="text/javascript">$('body').removeClass("sidebar-mini").addClass("sidebar-collapse");</script>

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