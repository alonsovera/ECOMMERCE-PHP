﻿$.extend(true, $.fn.dataTable.defaults, {
    processing: true,
    "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todo"]],
    language: {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Muestra _START_ al _END_ de _TOTAL_ registros",
        "sInfoEmpty": "",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "select": {
            "rows": {
                _: "Has seleccionado %d filas",
                0: "",
                1: "Has seleccionado %d filas"
            }
        },
        "sSearch": "",
        "searchPlaceholder": "Ingrese busqueda",
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
    "dom": "<'row'<'col-xs-6 toolbar'l><'col-xs-6 text-right'f>>" +
          "<'row'<'col-sm-12'<'table-responsive'tr>>>" +
          "<'row'<'col-sm-5'i><'col-sm-7'p>>",
    "autoWidth": false
    //"initComplete": function (settings, json) {
    //    console.log(json);
    //}
});
try {
    $.fn.dataTable.moment('DD-MM-YYYY');
} catch (err) { }

$('body').on('click', 'table.dataTable tbody tr', function () {
    
    var table = $(this).parents("tbody");
    if ($(this).hasClass('rowSelected')) {
        $(this).removeClass('rowSelected');
    }
    else {
        table.find('tr.rowSelected').removeClass('rowSelected');
        $(this).addClass('rowSelected');
    }
});