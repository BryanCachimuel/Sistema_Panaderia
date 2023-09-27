<?php
    class ControladorPanaderia {
        
        function __construct() {
            
        }

        public function insertarPanaderia($panaderia) {
            $panaderiaModel = new Panaderia();
            $id = $panaderiaModel->insert($panaderia);
            $v = ($id > 0);
            $respuesta = new Encapsulamiento($v ? EMensajes::INSERCION_EXITOSA : EMensajes::ERROR_INSERSION);
            $respuesta->setDatos($id);
            return $respuesta;
        }

        public function listarPanaderia() {
            $panaderiaModel = new Panaderia();
            $lista = $panaderiaModel->mostrarRegistros();
            $v = count($lista);
            $respuesta = new Encapsulamiento($v ? EMensajes::LISTADO_EXITOSO : EMensajes::ERROR_LISTAR);
            $respuesta->setDatos($lista);
            return $respuesta;
        }

        public function actualizarPanaderia($panaderia) {
            $panaderiaModel = new Panaderia();
            $actualizados = $panaderiaModel->where("id","=",$panaderia["idPanaderia"])->update($panaderia);
            $v = ($actualizados > 0);
            $respuesta = new Encapsulamiento($v ? EMensajes::ACTUALIZACION_EXITOSA : EMensajes::ERROR_ACTUALIZACION);
            $respuesta->setDatos($actualizados);
            return $respuesta;
        }

        public function eliminarPanaderia($idPanaderia) {
            $panaderiaModel = new Panaderia();
            $eliminados = $panaderiaModel->where("id","=",$idPanaderia)->eliminar();
            $v = ($eliminados > 0);
            $respuesta = new Encapsulamiento($v ? EMensajes::ELIMINACION_EXITOSA : EMensajes::ERROR_ELIMINACION);
            $respuesta->setDatos($eliminados);
            return $respuesta;
        }

        public function buscarPanaderiaPorId($idPanaderia) {
            $panaderiaModel = new Panaderia();
            $panaderia = $panaderiaModel->where("id","=",$idPanaderia)->mostrarRegistrosUnicos();
            $v = ($panaderia != null);
            $respuesta = new Encapsulamiento($v ? EMensajes::BUSQUEDA_ID_EXITOSA : EMensajes::ERROR_BUSQUEDA_ID);
            $respuesta->setDatos($panaderia);
        }
    }
?>