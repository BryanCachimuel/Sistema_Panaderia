var vista = {
    controles: {
        tbodyListaUsuarios: $('#tablaListaUsuarios tbody')
    },

    init: function(){
        vista.eventos();
        vista.peticiones.listarUsuarios();
    },

    eventos: function(){

    },

    callbacks: {
        eventos: {

        },

        peticiones: {
            listarUsuarios: {
                beforeSend: function(){
                    var tbody = vista.controles.tbodyListaUsuarios;
                    tbody.html(vista.utils.templates.consultando());
                },

                completo: function(respuesta){
                    var tbody = vista.controles.tbodyListaUsuarios;
                    var datos = __app.parsearRespuesta(respuesta);
                    if(datos && datos.length > 0){
                        tbody.html('');
                        for (var i = 0; i < datos.length; i++) {
                            var dato = datos[i];
                            tbody.append(vista.utils.templates.item(dato));
                        }
                    }else{
                        tbody.html(vista.utils.templates.noHayRegistros());
                    }
                }
            }
        }
    },
};

$(vista.init);