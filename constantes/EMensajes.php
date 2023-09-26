<?php

    class EMensajes {
        const CORRECTO = "CORRECTO";
        const INSERCION_EXITOSA = "INSERCION_EXITOSA";
        const ACTUALIZACION_EXITOSA = "ACTUALIZACION_EXITOSA";
        const ELIMINACION_EXITOSA = "ELIMINACION_EXITOSA";
        const ERROR = "ERROR";

        public static function obtenerMensaje($codigo){
            switch($codigo){
                case EMensajes::CORRECTO:
                    return new Encapsulamiento(1, "Se ha realizadp la operación de manera correcta");
                
                case EMensajes::INSERCION_EXITOSA:
                    return new Encapsulamiento(1, "Se ha insertado el registro con éxito");

                case EMensajes::ACTUALIZACION_EXITOSA:
                    return new Encapsulamiento(1, "Se ha actualizado el registro con éxito");

                case EMensajes::ELIMINACION_EXITOSA:
                    return new Encapsulamiento(1, "Se ha eliminado el registro con éxito");

                case EMensajes::ERROR:
                    return new Encapsulamiento(1, "Se ha producido un error al realizar la operación");
            }
        }
    }

?>