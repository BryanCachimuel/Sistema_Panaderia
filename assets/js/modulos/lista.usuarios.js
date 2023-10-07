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
};

$(vista.init);