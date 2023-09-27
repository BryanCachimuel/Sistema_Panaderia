<?php

    class EMensajes {
        const LISTADO_EXITOSO = "LISTADO_EXITOSO";
        const INSERCION_EXITOSA = "INSERCION_EXITOSA";
        const ERROR_INSERSION = "ERROR_INSERSION";
        const ACTUALIZACION_EXITOSA = "ACTUALIZACION_EXITOSA";
        const ERROR_ACTUALIZACION = "ERROR_ACTUALIZACION";
        const ELIMINACION_EXITOSA = "ELIMINACION_EXITOSA";
        const ERROR_ELIMINACION = "ERROR_ELIMINACION";
        const BUSQUEDA_ID_EXITOSA = "BUSQUEDA_ID_EXITOSA";
        const ERROR_BUSQUEDA_ID = "ERROR_BUSQUEDA_ID";
        const ERROR_LISTAR = "ERROR_LISTAR";
        const NO_HAY_REGISTROS = "NO_HAY_REGISTROS";
        const ERROR_CONEXION_BD = "ERROR_CONEXION_BD";

        public static function obtenerMensaje($codigo){
            switch($codigo){
                case EMensajes::LISTADO_EXITOSO:
                    return new Encapsulamiento(1, "Se ha realizado el listado de los registros de una forma exitosa");
                
                case EMensajes::INSERCION_EXITOSA:
                    return new Encapsulamiento(1, "Se ha insertado el registro con éxito");

                case EMensajes::ACTUALIZACION_EXITOSA:
                    return new Encapsulamiento(1, "Se ha actualizado el registro con éxito");

                case EMensajes::ELIMINACION_EXITOSA:
                    return new Encapsulamiento(1, "Se ha eliminado el registro con éxito");
                
                case EMensajes::BUSQUEDA_ID_EXITOSA:
                    return new Encapsulamiento(1, "Se ha encontrado el registro por id de forma éxitosa");    

                case EMensajes::ERROR_INSERSION:
                    return new Encapsulamiento(-1, "Se ha producido un error al insertar un registro");
                
                case EMensajes::ERROR_ACTUALIZACION:
                    return new Encapsulamiento(-1, "Se ha producido un error al actualizar un registro");
                
                case EMensajes::ERROR_ELIMINACION:
                    return new Encapsulamiento(-1, "Se ha producido un error al eliminar un registro");
                
                case EMensajes::ERROR_BUSQUEDA_ID:
                    return new Encapsulamiento(-1, "Se ha producido un error al buscar un registro por su Id");

                case EMensajes::ERROR_LISTAR:
                    return new Encapsulamiento(-1, "Se ha producido un error al listar los registros");
                
                case EMensajes::NO_HAY_REGISTROS:
                    return new Encapsulamiento(0, "No existen registros");

                case EMensajes::ERROR_CONEXION_BD:
                    return new Encapsulamiento(-1, "Error al conectar con la base de datos");
            }
        }
    }

?>