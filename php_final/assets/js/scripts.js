$(document).ready(function() {

    /**
     * Usuarios
     */
    $('#usuarios').DataTable({ //Inicializa el datatable
        "columnDefs": [
            {
                "targets": [ 6 ],
                "visible": false,
                "searchable": false
            },],
        dom: 'Bfrtip',
        "language": {
            "url":  "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" // Idioma
        },
        "buttons": [
            {
                text: 'Nuevo Usuario',
                action: function (e, node, config){
                    //llamar modal usuario
                $('#usuarioModal').modal('show');
                }
            }
        ]
    
    });


$("#btnEliminarUsuario").click(()=>{
    //Elimino el usuario 
   
    let data = {
        nombre:$('#nombre').val(),
        email: $('#email').val(),
        id: $('#id').val(),
        perfilid: $('#perfilid').val(),
        tipo:'borrar',
 
    }
    $.ajax({
        type: "POST",
        url: "funciones/funciones_usuarios.php",
        data: data,
        success:  window.location.reload()
      });
});

$("#cpassword").keyup(()=>{
    //verifico las passwors si son iguales
    let pass = $("#password").val();
    let pass2 = $("#cpassword").val();
        if(pass != pass2){
            $("#lblpass").show();
            habilitarFormUsuario(true)
        }else{
            console.log("igusles")
            $("#lblpass").hide( "slow");
            habilitarFormUsuario(false)
        }
})

 let habilitarFormUsuario = (estado)=>{
    $("#btnGuardarUsuario").prop('disabled', estado);
 }

 $(document).on("click", ".btnEdit", function() {
    $('#nombre').val($(this).data('nombre'));
    $('#email').val($(this).data('email'));
    $('#id').val($(this).data('id'));
    $('#perfilid').val($(this).data('perfilid'));
    $('#tipo').val('editar');
    $("#checkCambioPass").prop( "checked", false );
    $("#password").prop( "disabled", true );
    $("#cpassword").prop( "disabled", true );
    $('#usuarioModal').modal('show');
 });

 $(document).on("change", "#checkCambioPass",  (e) => {
    if(!$('#checkCambioPass').is(':checked')){

        $("#password").prop( "disabled", true );
        $("#cpassword").prop( "disabled", true );
    }else{
        $("#password").prop( "disabled", false );
        $("#cpassword").prop( "disabled", false );
    }
 });


 /**
  *  Perfiles
  */
  $('#perfiles').DataTable({ //Inicializa el datatable 
    dom: 'Bfrtip',
    "language": {
        "url":  "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" // Idioma
    },
    "buttons": [
        {
            text: 'Nuevo Perfil',
            action: function (e, node, config){
                //llamar modal usuario
            $('#perfilModal').modal('show');
            }
        }
    ]

    });
    $(document).on("click", ".btnEditPerfil", function() {
        $('#nombre').val($(this).data('nombre'));
        $('#id').val($(this).data('id'));
        $('#tipo').val('editar');
        $('#perfilModal').modal('show');
     });
    

     $("#btnEliminarPerfil").click(()=>{
        //Elimino el perfil 
       
        let data = {
            nombre:$('#nombre').val(),
            id: $('#id').val(),
            tipo:'borrar',
     
        }
        $.ajax({
            type: "POST",
            url: "funciones/funciones_perfiles.php",
            data: data,
            success:  window.location.reload()
          });
    });

} );