
    
    <script src="diseño/js/jquery.min.js"></script>
    <script language="javascript" src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
    <script src="diseño/js/bootstrap.min.js"></script>
    <script src="diseño/js/jquery.dataTables.min.js"></script>
    
   
    <script language="javascript" src="public/datatables/buttons.colVis.min.js"></script>
    <script language="javascript" src="public/datatables/buttons.html5.min.js"></script>
    <script language="javascript" src="public/datatables/dataTables.buttons.min.js"></script>
    <script language="javascript" src="public/datatables/jszip.min.js"></script>
    <script language="javascript" src="public/datatables/pdfmake.min.js"></script>
    <script language="javascript" src="public/datatables/vfs_fonts.js"></script>
    <script language="javascript" src="public/js/app.js"></script>
    <script language="javascript" src="public/js/jquery.PrintArea.js"></script>
    <script language="javascript" src="public/js/JsBarcode.all.min.js"></script>

    <script language="javascript" src="diseño/js/jquery.validate.js"></script>
    <!--
    <script language="javascript" src="public/componentes/bootstrap/js/alert.js"></script>
    <script language="javascript" src="public/componentes/bootstrap/js/modal.js"></script>-->
        <!-- NUEVOS SCRIPTS DE LA NUEVA PLANTILLA-->
        
        <script src="public/js/jquery.nanoscroller.min.js"></script>
        <script src="public/js/demo.js"></script> 
        <script src="public/js/moment.min.js"></script>    
        <script src="public/js/daterangepicker.js"></script>
        <script src="public/js/scripts.js"></script>
        <script src="public/js/pace.min.js"></script>
        <!--
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>-->
        
        <!-- fin de los scripts de la plantilla -->
<script language="javascript">
       
$('#tbllistado').DataTable({
            "lengthMenu": [ 5, 50, 1000, 10000, 1000000],//mostramos el menú de registros a revisar
            "aProcessing": true,//Activamos el procesamiento del datatables
            "aServerSide": true,//Paginación y filtrado realizados por el servidor
            dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
            buttons: [                
                        
                    ],
                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
  
</script>
  </body>
</html>


