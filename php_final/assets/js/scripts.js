$(document).ready(function() {
    $('#usuarios').DataTable({
        dom: 'Bfrtip',
        "language": {
            "url":  "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        },
        "buttons": [
            {
                text: 'Nuevo Usuario',
                action: function ( e, dt, node, config ) {
                    alert( 'Button activated' ); //llamar modal usuario
                }
            }
        ]
    
    });
} );