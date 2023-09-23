<?php
    class ModeloGenerico extends Crud {

        private $className;
        private $excluir = ["className", "tabla", "conexion", "wheres", "sql", "excluir"];

        function __construct($tabla, $propiedades = null) {
            parent::__construct($tabla);
            
            if(empty($propiedades)){
                return;
            }

            foreach($propiedades as $llaves => $valor){
                $this->{$llaves} = $valor;
            }
        }

        protected function obtenerAtributos() {
            $variables = get_class_vars($this->className);
            $atributos = [];
            $max = count($variables);
            foreach($variables as $llave => $valor){
                if(!in_array($llave, $this->excluir)){
                    $atributos[] = $llave;
                }
            }
            return $atributos;
        }

        protected function parsear($obj = null) {
            try {
                $atributos = $this->obtenerAtributos();
                $objetoFinal = [];
                // Obtener el objeto desde el modelo
                if($obj == null){
                    foreach ($atributos as $indice => $llave) {
                       if(isset($this->{$llave})){
                            $objetoFinal[$llave] = $this->{$llave};
                       }
                    }
                    return $objetoFinal;
                }

                // corregir el objeto que recibimos con los atributos del modelo
                foreach ($atributos as $indice => $llave) {
                    if(isset($obj[$llave])){
                        $objetoFinal[$llave] = $obj[$llave];
                    }
                }
                return $objetoFinal;
            } catch (Exception $e) {
                throw new Exception("Error en ". $this->className . ".parsear() =>".$e->getMessage());
            }
        }

        public function fill($obj){
            try {
                $atributos = $this->obtenerAtributos();
                foreach ($atributos as $indice => $llave) {
                    if(isset($obj[$llave])){
                        $this->{$llave} = $obj[$llave];
                    }
                }
            } catch (Exception $e) {
                throw new Exception("Error en ". $this->className . ".fill() =>".$e->getMessage());
            }
        }

        public function insert($obj = null) {
            $obj = $this->parsear($obj);
            return parent::registrar($obj);
        }

        public function update($obj = null) {
            $obj = $this->update($obj);
            return parent::actualizar($obj);
        }
    }
?>