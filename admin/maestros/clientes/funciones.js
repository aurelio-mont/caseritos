$(function(){
    $('.data-table').dataTable({//INICIO DATE-TABLE
        ajax: 'procesos.php?acc=tabla',
        "responsive": true,
        "lengthMenu": [
            [5,10, 20, 30, -1],
            [5,10, 20, 30, "Todos"] // change per page values here
        ],

        pageLength: 5,
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "searching": true,
        "ordering": false,
        // "info": false,
        "autoWidth": false,
        // "bPaginate": false,
        "columns": [
                { "class": "text-right text-uppercase" },
                { "class": "text-uppercase" },
                { "class": "text-uppercase" },
                { "class": "text-uppercase" },
                { "class": "text-uppercase" },
                { "class": "text-center text-uppercase" },
            ],
    });//FIN DATA-TABLE
});

function insertar() {
    var tipoDocumento   = $('#tipoDocumento').val();
    var numeroDocumento = $('#numeroDocumento').val();
    var primerNombre    = $('#primerNombre').val();
    var segundoNombre   = $('#segundoNombre').val();
    var primerApellido  = $('#primerApellido').val();
    var segundoApellido = $('#segundoApellido').val();
    var telefono        = $('#telefono').val();
    var direccion       = $('#direccion').val();
    var fecha           = $('#fecha').val();
    var email           = $('#email').val();
    var departamento    = $('#departamento').val();
    var ciudad          = $('#ciudad').val();
    var genero          = $('#genero').val();

    $.post('procesos.php?acc=insertar',{
        tipoDocumento   : tipoDocumento,
        numeroDocumento : numeroDocumento,
        primerNombre    : primerNombre,
        segundoNombre   : segundoNombre,
        primerApellido  : primerApellido,
        segundoApellido : segundoApellido,
        telefono        : telefono,
        direccion       : direccion,
        fecha           : fecha,
        email           : email,
        departamento    : departamento,
        ciudad          : ciudad,
        genero          : genero,
    },function(data) {
        toastr.success("Cliente Creado con exito");
        $('data-table').DataTable().ajax.url( 'procesos.php?acc=tabla' ).load();
    });



}
