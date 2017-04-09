/**
 * Created by ososa on 17/03/2017.
 */


$(document).ready(function() {

    $("#add_item").click(function() {
        add_item();
    });

    $("#save_item").click(function() {
        save_item();
    });

    /*editor = new $.fn.dataTable.Editor( {
        ajax: "/pp-backend/venta/actions",
        table: "#cliente_table",
        idSrc:  'id',
        fields: [
            {label:'Cliente' , name:'cliente_id'},
        ]
    });

    datatable = $('#venta_table').DataTable({
        dom: "Bfrtip",
        ajax: "/backend/venta/all",
        columns: [
            {
                data: null,
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
            },
            {data:"id"},
            {data:"cliente_id"},
            {data:"deuda"},
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
    $('#venta_table').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
    } );

    editor.on( 'postSubmit', function ( e, json, data, action ) {
        datatable.ajax.reload();
    })*/

} );

function add_item(){

    var row = "";
    var data =	new FormData();
    var url = "/app_dev.php/backend/item/add";
    var data =	new FormData();

    id_venta         = $("#id_venta").val();
    id_cliente		 = $("#cliente_select option:selected").val();
    id_producto      = $("#producto_select option:selected").val();
    cantidad         = $("#cantidad").val();
    descuento        = $("#descuento option:selected").val();
    id_item_venta    = 1 ;

    data.append('id_producto' ,id_producto);
    data.append('id_cliente'  ,id_cliente);
    data.append('cantidad'    ,cantidad);
    data.append('descuento'   ,descuento);
    data.append('id_venta'    ,id_venta);

    $.ajax({
        url:url,
        type:'POST',
        contentType:false,
        dataType:'json',
        data:data,
        processData:false,
        beforeSend: function() {
        },
        cache:false,
        success:function(result){
            $('#items_table').html(result.items_venta);
            $('#id_venta').attr('value',result.id_venta);
        }
    });

}

function save_item() {

    var row = "";
    var data =	new FormData();
    var url = "/backend/item/add";

    var data =	new FormData();

    id_cliente		 = $("#cliente_select_edit option:selected").val();
    id_producto      = $("#producto_select_edit option:selected").val();
    cantidad         = $("#cantidad_edit").val();
    descuento        = $("#descuento_edit option:selected").val();
    id_item_venta    = 1 ;

    data.append('id_producto' ,id_producto);
    data.append('id_cliente'  ,id_cliente);
    data.append('cantidad'    ,cantidad);
    data.append('descuento'   ,descuento);

    $.ajax({
        url:url,
        type:'POST',
        contentType:false,
        dataType:'json',
        data:data,
        processData:false,
        beforeSend: function() {
        },
        cache:false,
        success:function(result){
            row+='<tr id="'+id_item_venta+'">';
            row+="<td>"+result.cod_producto+"</td>";
            row+="<td>"+cantidad+"</td>";
            row+="<td>"+result.descripcion_producto+"</td>";
            row+="<td>"+result.presentacion_producto+"</td>";
            row+="<td>"+result.precio_unidad+"</td>";
            row+="<td>"+result.total+"</td>";
            row+='<td><span class="label label-success">'+descuento+'%</span></td>';
            row+='<td><a href="#" data-toggle="modal" data-target="#editItem"   class="btn btn-primary" data-id="'+id_item_venta+'"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
            row+='<a href="#" data-toggle="modal" data-target="#removeItem"  class="btn btn-danger" data-id="'+id_item_venta+'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>'
            row+="</tr>";
            $('#items_table tr[id='+id_item_venta+']').remove();
            $('#items_table').append(row);
        }
    });

}

function remove_item(id_item_venta){
    $('#items_table tr[id='+id_item_venta+']').remove();
    alert(id_item_venta);
}

