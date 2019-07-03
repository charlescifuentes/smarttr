$(document).ready(function () {

    // Mostrar los detalles del cliente en un modal
    $('.btn-view').on('click', function (e) {
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
});