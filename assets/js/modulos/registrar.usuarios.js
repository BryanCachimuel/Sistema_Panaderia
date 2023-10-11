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
        peticiones: {
            beforeSend: function () {
                vista.controles.formUsuario.find('input,button').prop('disabled', true);
            },
            completo: function () {
                vista.controles.formUsuario.find('input,button').prop('disabled', false);
            },
            finalizado: function (respuesta) {
                if (__app.validarRespuesta(respuesta)) {
                    vista.controles.formUsuario.find('input').val('');
                    swal('Correcto', 'Se ha registrado correctamente el usuario', 'success');
                    return;
                }
                swal('Error', respuesta.mensaje, 'error');
            }
        }
    },
};
$(vista.init);