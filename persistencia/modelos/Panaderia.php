<?php
    class Panaderia extends ModeloGenerico{
        protected $id;
        protected $producto;
        protected $descripcion;
        protected $cantidad;
        protected $valor_unidad;
        protected $fecha_elaboracion;

        public function __construct($propiedades = null) {
            parent::__construct("panaderia", Panaderia::class, $propiedades);
        }
        
        function getId() {
            return $this->id;
        }

        function getProducto(){
            return $this->producto;
        }

        function gesDescripcion(){
            return $this->descripcion;
        }

        function getCantidad() {
            return $this->cantidad;
        }

        function getValor_Unidad() {
            return $this->valor_unidad;
        }

        function getFecha_Elaboracion() {
            return $this->fecha_elaboracion;
        }

        function setId($id){
            $this->id = $id;
        }

        function setProducto($producto){
            $this->producto = $producto;
        }

        function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }

        function setValor_Unidad($valor_unidad){
            $this->valor_unidad = $valor_unidad;
        }

        function setFecha_Elaboracion($fecha_elaboracion){
            $this->fecha_elaboracion = $fecha_elaboracion;
        }
    }
?>