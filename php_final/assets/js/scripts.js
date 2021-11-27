$(document).ready(function() {
    $('#usuarios').DataTable({ //Inicializa el datatable
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
function abreModal(modal){
    console.log("abre modal")
    $("#"+modal).show();
}

$("#btnEliminarUsuario").click(()=>{
    //Elimino el usuario 
    $.post( "funciones/funciones_usuarios.php", ( ) => {
      
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

} );