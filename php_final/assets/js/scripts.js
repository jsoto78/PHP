$(document).ready(function () {

    /**
     * Usuarios
     */
    $('#usuarios').DataTable({ //Inicializa el datatable
        dom: 'Bfrtip',
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" // Idioma
        },
        "buttons": [
            {
                text: 'Nuevo Usuario',
                action: function (e, node, config) {
                    //llamar modal usuario
                    $('#usuarioModal').modal('show');
                },
                className: 'btn btn-info'
            } 
        ],
        "columnDefs": [
            {
                "targets": [6],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [7],
                "visible": false,
                "searchable": false
            },
        ]

    });

    $("#btnEliminarUsuario").click(() => {
        //Elimino el usuario 

        let data = {
            nombre: $('#nombre').val(),
            email: $('#email').val(),
            id: $('#id').val(),
            perfilid: $('#perfilid').val(),
            tipo: 'borrar',

        }
        $.ajax({
            type: "POST",
            url: "funciones/funciones_usuarios.php",
            data: data,
            success: window.location.reload()
        });
    });

    $("#cpassword").keyup(() => {
        //verifico las passwors si son iguales
        let pass = $("#password").val();
        let pass2 = $("#cpassword").val();
        if (pass != pass2) {
            $("#lblpass").show();
            habilitarFormUsuario(true)
        } else {
            console.log("igusles")
            $("#lblpass").hide("slow");
            habilitarFormUsuario(false)
        }
    })

    let habilitarFormUsuario = (estado) => {
        $("#btnGuardarUsuario").prop('disabled', estado);
    }
    $(document).on("click", ".btnEdit", function () {
        $('#nombre').val($(this).data('nombre'));
        $('#email').val($(this).data('email'));
        $('#id').val($(this).data('id'));
        $('#perfilid').val($(this).data('perfilid'));
        $('#sedeid').val($(this).data('sedeid'));
        $('#tipo').val('editar');
        $("#checkCambioPass").prop("checked", false);
        $("#password").prop("disabled", true);
        $("#cpassword").prop("disabled", true);
        $('#usuarioModal').modal('show');
    });

    $(document).on("change", "#checkCambioPass", (e) => {
        if (!$('#checkCambioPass').is(':checked')) {

            $("#password").prop("disabled", true);
            $("#cpassword").prop("disabled", true);
        } else {
            $("#password").prop("disabled", false);
            $("#cpassword").prop("disabled", false);
        }
    });

    //validar form
    var forms = document.querySelectorAll('.con-validacion'); //Busco el formulario
    Array.prototype.slice.call(forms) 
    .forEach(function (form) { //valido todos los campos del form.
        form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.classList.add('was-validated')
        }, false)
    });




    /**
     *  Perfiles
     */
    $('#perfiles').DataTable({ //Inicializa el datatable 
        dom: 'Bfrtip',
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" // Idioma
        },
        "buttons": [
            {
                text: 'Nuevo Perfil',
                action: function (e, node, config) {
                    //llamar modal usuario
                    $('#perfilModal').modal('show');
                },
                className: 'btn btn-info'
            }
        ]

    });
    $(document).on("click", ".btnEditPerfil", function () {
        $('#nombre').val($(this).data('nombre'));
        $('#id').val($(this).data('id'));
        $('#tipo').val('editar');
        $('#perfilModal').modal('show');
    });

    $("#btnEliminarPerfil").click(() => {
        //Elimino el perfil 
        let data = { //armo la data
            nombre: $('#nombre').val(),
            id: $('#id').val(),
            tipo: 'borrar',

        }
        $.ajax({ //hago el post
            type: "POST",
            url: "funciones/funciones_perfiles.php",
            data: data,
            success: window.location.reload() //recargo la pag.
        });
    });

    /**
     *  Medios de Pago
     */

    $('#mediospago').DataTable({ //Inicializa el datatable 
        dom: 'Bfrtip',
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" // Idioma
        },
        "buttons": [
            {
                text: 'Nuevo Medio de Pago',
                action: function (e, node, config) {
                    //llamar modal usuario
                    $('#medioPagolModal').modal('show');
                },
                className: 'btn btn-info'
            }
        ]

    });
    $(document).on("click", ".btnEditMedioPago", function () {
        $('#nombre').val($(this).data('nombre'));
        $('#id').val($(this).data('id'));
        $('#tipo').val('editar');
        $('#medioPagolModal').modal('show');
    });

    $("#btnEliminarMedioPago").click(() => {
        //Elimino el medio de pago 
        let data = { //armo la data
            nombre: $('#nombre').val(),
            id: $('#id').val(),
            tipo: 'borrar',

        }
        $.ajax({ //hago el post
            type: "POST",
            url: "funciones/funciones_mpago.php",
            data: data,
            success: window.location.reload() //recargo la pag.
        });
    });


    /**
       *  derivadores
       */

    $('#derivadores').DataTable({ //Inicializa el datatable 
        dom: 'Bfrtip',
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" // Idioma
        },
        "buttons": [
            {
                text: 'Nuevo Derivador',
                action: function (e, node, config) {
                    //llamar modal usuario
                    $('#derivadorModal').modal('show');
                },
                className: 'btn btn-info'
            }
        ]

    });
    $(document).on("click", ".btnEditDerivador", function () {
        $('#nombre').val($(this).data('nombre'));
        $('#id').val($(this).data('id'));
        $('#tipo').val('editar');
        $('#derivadorModal').modal('show');
    });

    $("#btnEliminarDerivador").click(() => {
        //Elimino el derivador 
        let data = { //armo la data
            nombre: $('#nombre').val(),
            id: $('#id').val(),
            tipo: 'borrar',

        }
        $.ajax({ //hago el post
            type: "POST",
            url: "funciones/funciones_derivadores.php",
            data: data,
            success: window.location.reload() //recargo la pag.
        });
    });
    /**
     * transac
     */

    $("#paciente_hc").change(function(){
        let hc = $(this).val();
        $.ajax({ //hago el post
            type: "GET",
            url: "https://gorostiaga.centrolerner.com.ar:8300/api/v4/getPaciente/"+hc,
            beforeSend: function (xhr) {
                xhr.setRequestHeader ("Authorization", "Basic anNvdG9AbTIyYXBwcy5jb206U2FudGkzMDA5");
            },
            success: llenarPaciente,
            error: function(err){
                console.log(JSON.stringify(err));
            }
        });
    });
    let llenarPaciente = function (data){  
        console.log(data)
        $("#paciente_nombre").val(data.Nombres + ' ' + data.Apellido);
        $("#paciente_nombre").prop('readonly',true);  
    }

/**Movimientos */
        $('#movimientos').DataTable({ //Inicializa el datatable 
                dom: 'Bfrtip',
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" // Idioma
                },

            });
        $('#btnlimpiar').click(function(){
            location.replace("./movimientos.php");
        })
});