<?php
    class ControladorPanaderia {
        
        function __construct() {
            
        }

        public function insertarPanaderia($panaderia) {
            $panaderiaModel = new Panaderia();
            $id = $panaderiaModel->insert($panaderia);
            return [
                "codigo" => (($id > 0) ? 1 : -1),
                "mensaje" => ($id > 0) ? "Se ha insertado un producto de la panaderia" : "No se a podido insertar el producto de la panaderia",
                "datos" => $id
            ];
        }

        public function listarPanaderia() {
            $panaderiaModel = new Panaderia();
            $lista = $panaderiaModel->mostrarRegistros();
            return [
                "codigo" => ((count($lista) > 0) ? 1 : -1),
                "mensaje" => ((count($lista) > 0) ? "Se ha consultado los registros correctamente" : "No hay registros") ,
                "datos" => $lista
            ];
        }

        public function actualizarPanaderia($panaderia) {
            $panaderiaModel = new Panaderia();
            $actualizados = $panaderiaModel->where("id","=",$panaderia["idPanaderia"])->update($panaderia);
            return [
                "codigo" => (($actualizados > 0) ? 1 : -1),
                "mensaje" => ($actualizados > 0) ? "Se ha actualizado un producto de la panaderia" : "No se a podido actualizar el producto de la panaderia",
                "datos" => $actualizados
            ];
        }

        public function eliminarPanaderia($idPanaderia) {
            $panaderiaModel = new Panaderia();
            $eliminados = $panaderiaModel->where("id","=",$idPanaderia)->eliminar();
            return [
                "codigo" => (($eliminados > 0) ? 1 : -1),
                "mensaje" => ($eliminados > 0) ? "Se ha eliminado un producto de la panaderia" : "No se a podido eliminar el producto de la panaderia",
                "datos" => $eliminados
            ];
        }

        public function buscarPanaderiaPorId($idPanaderia) {
            $panaderiaModel = new Panaderia();
            $panaderia = $panaderiaModel->where("id","=",$idPanaderia)->mostrarRegistrosUnicos();
            return [
                "codigo" => (($panaderia != null) ? 1 : -1),
                "mensaje" => ($panaderia != null) ? "Se ha consultado un producto de la panaderia" : "No se a podido econtrar el producto de la panaderia",
                "datos" => $panaderia
            ];
        }
    }
?>