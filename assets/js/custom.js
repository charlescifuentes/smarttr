$(document).ready(function () {
    
    $('#table_id').DataTable();

    var base_url = $('#base').val();

    // Mostrar los detalles del cliente en un modal
    $('.btn-view-customer').on('click', function (e) {
        e.preventDefault();
        
        var id = $(this).val();
        var base_url = $('#base').val();
        
        $.post(base_url + "ccustomers/view",
        {
            id: id
        },
        function (data){
            var cv = JSON.parse(data);
            $.each(cv, function(i, item){
                $('#customer-table tbody').append('<tr><th scope="row">ID:</th><td>' + item.customer_id + '</td></tr>');
                $('#customer-table tbody').append('<tr><th scope="row">NIT:</th><td>' + item.customer_nit + '</td></tr>');
                $('#customer-table tbody').append('<tr><th scope="row">Nombres:</th><td>' + item.customer_firstname + '</td></tr>');
                $('#customer-table tbody').append('<tr><th scope="row">Apellidos:</th><td>' + item.customer_lastname + '</td></tr>');
                $('#customer-table tbody').append('<tr><th scope="row">Dirección:</th><td>' + item.customer_address + '</td></tr>');
                $('#customer-table tbody').append('<tr><th scope="row">Teléfono:</th><td>' + item.customer_phone + '</td></tr>');
                $('#customer-table tbody').append('<tr><th scope="row">Email:</th><td>' + item.customer_email + '</td></tr>');
                $('#customer-table tbody').append('<tr><th scope="row">Ciudad:</th><td>' + item.customer_city + '</td></tr>');
                $('#customer-table tbody').append('<tr><th scope="row">Estado:</th><td>' + item.customer_status + '</td></tr>');
            });
            $('#customerModal').modal('show');
        });
    });

    $('#customerModal').on('hidden.bs.modal', function (e) {
        $('#customer-table tbody').empty();
    })

    $('.btn-delete').on('click', function (e) {
        e.preventDefault();
        var r = confirm("Desea desactivar este cliente?");

        if (r == true ) {
            var id = $(this).val();
            var base_url = $('#base').val();
            
            $.post(base_url + "ccustomers/delete",
            {
                id: id
            },
            function (data,status){
                location.reload();
            });
        }
        else {
        }
    });

    $("#nit_add").change(function() {
        $("#nit_duplicated").hide();
        $("#btn-enviar").attr("disabled", false);
        var nit = $(this).val();
        var base_url = $('#base').val();

        $.post(base_url + "ccustomers/check_nit", { nit: nit })
            .done(function(data) {
                var cv = JSON.parse(data);
                if(cv.customer_nit == nit) {
                    $("#nit_duplicated").show();
                    $("#nit_duplicated").text("Este NIT ya existe");
                    $("#btn-enviar").attr("disabled", true);
                }
            });
    });

    $("#nit_edit").change(function() {
        $("#nit_duplicated").hide();
        $("#btn-enviar").attr("disabled", false);
        var cnit = $("#customer_nit").val();
        var nit = $(this).val();
        var base_url = $('#base').val();

        if(cnit != nit) {
            $.post(base_url + "ccustomers/check_nit", { nit: nit })
            .done(function(data) {
                var cv = JSON.parse(data);
                if(cv.customer_nit == nit) {
                    $("#nit_duplicated").show();
                    $("#nit_duplicated").text("Este NIT ya existe");
                    $("#btn-enviar").attr("disabled", true);
                }
            });
        }
    });

    // Mostrar los detalles del usuario en un modal
    $('.btn-view-user').on('click', function (e) {
        e.preventDefault();
        
        var id = $(this).val();
        var base_url = $('#base').val();
        $.post(base_url + "cusers/view",
        {
            id: id
        },
        function (data){
            var cv = JSON.parse(data);
            $.each(cv, function(i, item){
                $('#user-table tbody').append('<tr><th scope="row">ID:</th><td>' + item.user_id + '</td></tr>');
                $('#user-table tbody').append('<tr><th scope="row">Usuario:</th><td>' + item.user_name + '</td></tr>');
                $('#user-table tbody').append('<tr><th scope="row">Nombres:</th><td>' + item.user_firstname + '</td></tr>');
                $('#user-table tbody').append('<tr><th scope="row">Apellidos:</th><td>' + item.user_lastname + '</td></tr>');
                $('#user-table tbody').append('<tr><th scope="row">Email:</th><td>' + item.user_email + '</td></tr>');
                $('#user-table tbody').append('<tr><th scope="row">Teléfono:</th><td>' + item.user_phone + '</td></tr>');
                $('#user-table tbody').append('<tr><th scope="row">Rol:</th><td>' + item.rol_name + '</td></tr>');
            });
            $('#userModal').modal('show');
        });
    });

    $('#userModal').on('hidden.bs.modal', function (e) {
        $('#user-table tbody').empty();
    })

    $('.btn-delete-user').on('click', function (e) {
        e.preventDefault();
        var r = confirm("Desea desactivar este usuario?");

        if (r == true ) {
            var id = $(this).val();
            var base_url = $('#base').val();
            
            $.post(base_url + "cusers/delete",
            {
                id: id
            },
            function (data,status){
                location.reload();
            });
        }
        else {
        }
    });

    $("#username_add").change(function() {
        $("#username_duplicated").hide();
        $("#btn-enviar").attr("disabled", false);
        var username = $(this).val();
        var base_url = $('#base').val();

        $.post(base_url + "cusers/check_username", { username: username })
            .done(function(data) {
                var cv = JSON.parse(data);
                if(cv.user_name == username) {
                    $("#username_duplicated").show();
                    $("#username_duplicated").text("Este nombre de usuaro ya existe");
                    $("#btn-enviar").attr("disabled", true);
                }
            });
    });

    $("#username_edit").change(function() {
        $("#username_duplicated").hide();
        $("#btn-enviar").attr("disabled", false);
        var cusername = $("#username").val();
        var username = $(this).val();
        var base_url = $('#base').val();

        if(cusername != username) {
            $.post(base_url + "cusers/check_username", { username: username })
            .done(function(data) {
                var cv = JSON.parse(data);
                if(cv.user_name == username) {
                    $("#username_duplicated").show();
                    $("#username_duplicated").text("Este NIT ya existe");
                    $("#btn-enviar").attr("disabled", true);
                }
            });
        }
    });

    // Mostrar los detalles de la orden de servicio en un modal
    $('.btn-view-ts').on('click', function (e) {
        e.preventDefault();
        
        var id = $(this).val();
        var base_url = $('#base').val();
        $.post(base_url + "ctechservices/view",
        {
            id: id
        },
        function (data){
            console.log(data);
            var cv = JSON.parse(data);
            $.each(cv, function(i, item){
                $('#ts-table tbody').append('<tr><th scope="row">ID:</th><td>' + item.ts_id + '</td></tr>');
                $('#ts-table tbody').append('<tr><th scope="row">Fecha:</th><td>' + convert_date(item.ts_date_start) + '</td></tr>');
                $('#ts-table tbody').append('<tr><th scope="row">Cliente:</th><td>' + item.customer_firstname + " " + item.customer_lastname + '</td></tr>');
                $('#ts-table tbody').append('<tr><th scope="row">Marca:</th><td>' + item.ts_watch_brand + '</td></tr>');
                $('#ts-table tbody').append('<tr><th scope="row">Taller:</th><td>' + item.ts_store_sender + '</td></tr>');
                $('#ts-table tbody').append('<tr><th scope="row">Problema:</th><td>' + item.ts_issue_desc + '</td></tr>');
                $('#ts-table tbody').append('<tr><th scope="row">Diagnóstico:</th><td>' + item.ts_diagnosis + '</td></tr>');
                $('#ts-table tbody').append('<tr><th scope="row">Observaciones:</th><td>' + item.ts_observation + '</td></tr>');
                $('#ts-table tbody').append('<tr><th scope="row">Estado:</th><td>' + item.status_name + '</td></tr>');
                $('#ts-table tbody').append('<tr><th scope="row">Fecha de entrega:</th><td>' + convert_date(item.ts_date_end) + '</td></tr>');
            });
            $('#tsModal').modal('show');
        });
    });

    $('#tsModal').on('hidden.bs.modal', function (e) {
        $('#ts-table tbody').empty();
    })

    function convert_date(str){
        var mydate = new Date(str);
        var dd = mydate.getDate()+1;
        var mm = mydate.getMonth()+1; //January is 0!
        var yyyy = mydate.getFullYear();
        if(dd<10) {
            dd='0'+dd
        }
        if(mm<10) {
            mm='0'+mm
        }
        return mydate = dd+'-'+mm+'-'+yyyy;
    }

    $('.btn-delete-status').on('click', function (e) {
        e.preventDefault();
        var r = confirm("Desea borrar este estado?");

        if (r == true ) {
            var id = $(this).val();
            var base_url = $('#base').val();
            
            $.post(base_url + "cstatus/delete", { id: id })
                .done(function(data) {
                    if (data == 1) {
                        location.reload();
                    }
                    else{
                    var vr = JSON.parse(data);
                        alert("No se puede eliminar este registro, ya tiene movimientos en Servicio Técnico");
                    }
                });
        }
        else {
        }
    });

    $("#customer").autocomplete({
        source: function(request, response) {
         // Fetch data
            $.ajax({
                url: base_url + "ctechservices/get_customers",
                type: 'POST',
                dataType: "json",
                data: {search: request.term},
                success: function( data ) {
                    response(data);
                  }
            });
        },
        minLenght:1,
        select: function (event, ui) {
            // Set selection
            $('#customer').val(ui.item.label).attr('readonly', true); // display the selected text
            $('#customer_id').val(ui.item.value); // save selected id to input
            return false;
        }
    });

    $('#edit_customer').on('click', function (e) {
        $('#customer').attr('readonly', false).val('');
    });
});