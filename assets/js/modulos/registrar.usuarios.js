var vista = {
    controles: {
        formUsuario: $('#formUsuario'),
    },
    init: function () {
        vista.eventos();
    },
    eventos: function () {
        vista.controles.formUsuario.on('submit', vista.callbacks.eventos.accionesFormRegistro.ejecutar);
    },
    callbacks: {
        eventos: {
            accionesFormRegistro: {
                ejecutar: function (evento) {
                    __app.detenerEvento(evento);
                    var form = vista.controles.formUsuario;
                    var obj = form.getFormData();
                    console.log(obj);
                    vista.peticiones.registrarUsuario(obj);
                }
            }
        },  
    },
};
$(vista.init);