/**
 * Created by ososa on 17/03/2017.
 */
var datatable; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {

    editor = new $.fn.dataTable.Editor( {
        ajax: "/backend/producto/actions",
        table: "#producto_table",
        idSrc:  'id',
        fields: [
            {label:'Descripcion' , name:'descripcion'},
            {label:'Presentacion' , name:'presentacion'},
            {label:'Precion Unidad' , name:'precio_unidad'},
            {label:'Tipo' , name:'tipo'},
            {label:'Cantidad' , name:'cantidad'},
            {label:'Cod Producto' , name:'cod_producto'}
        ]
    });

    datatable = $('#producto_table').DataTable({
        dom: "Bfrtip",
        ajax: "/backend/producto/all",
        "columnDefs": [
            { "visible": false, "targets": 1 }
        ],
        columns: [
            {
                data: null,
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
            },
            {data:"id"},
            {data:"descripcion"},
            {data:"presentacion"},
            {data:"precio_unidad"},
            {data:"cantidad"},
            {data:"tipo"},
            {data:"cod_producto"}

        ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    });

    // Activate an inline edit on click of a table cell
    $('#producto_table').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
    } );

    editor.on( 'postSubmit', function ( e, json, data, action ) {
        datatable.ajax.reload();
    })

} );