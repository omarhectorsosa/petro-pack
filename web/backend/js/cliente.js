/**
 * Created by ososa on 17/03/2017.
 */
var datatable; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {

    editor = new $.fn.dataTable.Editor( {
        ajax: "/backend/cliente/actions",
        table: "#cliente_table",
        idSrc:  'id',
        fields: [
            {label:'Nro Documento' , name:'dni'},
            {label:'Nombre' , name:'nombre'},
            {label:'Direccion' , name:'direccion'},
            {label:'Email' , name:'email'}

        ]
    });

    datatable = $('#cliente_table').DataTable({
        dom: "Bfrtip",
        ajax: "/backend/cliente/all",
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
            {data:"dni"},
            {data:"nombre"},
            {data:"direccion"},
            {data:"email"}
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
    $('#mytable').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
    } );

    editor.on( 'postSubmit', function ( e, json, data, action ) {
        datatable.ajax.reload();
    })

} );