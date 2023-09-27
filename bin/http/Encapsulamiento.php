<?php

    class Encapsulamiento {

        public $codigo;
        public $mensaje;
        public $datos;

        function __construct($codigo = null, $mensaje = null, $datos = null) {
            // obtener la respuesta por defecto por código
            if(isset($codigo) && empty($mensaje)){
                $respuesta = EMensajes::obtenerMensaje($codigo);
                $this->codigo = $respuesta->codigo;
                $this->mensaje = $respuesta->mensaje;
                $this->datos = $respuesta->datos;
                return;
            }

            if(is_string($codigo)){
                $temp = EMensajes::obtenerMensaje($codigo);
                $codigo = $temp->codigo;
            }

            $this->codigo = $codigo;
            $this->mensaje = $mensaje;
            $this->datos = $datos;
        }

        public function json($obj = null){
            header('Content-Type: application/json');
            if(is_array($obj) || is_object($obj)){
                return json_encode($obj);
            }
            return json_encode($this);
        }

        function getCodigo(){
            return $this->codigo;
        }

        function getMensaje(){
            return $this->mensaje;
        }

        function getDatos(){
            return $this->datos;
        }

        function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        function setMensaje($mensaje){
            $this->mensaje = $mensaje;
        }

        function setDatos($datos){
            $this->datos = $datos;
        }

    }

?>