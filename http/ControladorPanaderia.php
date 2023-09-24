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

        
    }
?>