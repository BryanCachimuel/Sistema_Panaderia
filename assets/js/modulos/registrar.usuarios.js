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
};
$(vista.init);