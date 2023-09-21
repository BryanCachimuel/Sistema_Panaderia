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

       
    }
?>