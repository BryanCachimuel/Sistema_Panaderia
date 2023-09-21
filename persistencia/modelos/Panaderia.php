<?php
    class Panaderia extends ModeloGenerico{
        protected $id;
        protected $producto;
        protected $descripcion;
        protected $cantidad;
        protected $valor_unidad;
        protected $fecha_elaboracion;

        public function __construct($propiedad = null) {
            
        }
    }
?>