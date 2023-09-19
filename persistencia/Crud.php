<?php
    class Crud {
        protected $tabla;
        protected $conexion;
        protected $wheres = "";
        protected $sql = null;

        public function __construct($tabla = null) {
            $this->conexion = (new Conexion())->conectar();
            $this->tabla = $tabla;
        }

        public function mostrarRegistros() {
            try {
                $this->sql = "SELECT * FROM {$this->tabla}{$this->wheres}";
                $sth = $this->conexion->prepare($this->sql);
                $sth->execute();
                return $sth->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                echo $e->getTraceAsString();
            }
        }

        public function registrar($obj){
            try {
                $campos = implode("`, `", array_keys($obj)); /* con el implode se imprime de la siguiente forma -> 'nombre', 'apellido', 'edad' */
                $valores = ":" . implode(", :", array_keys($obj)); /* con el implode y array_keys se obtienen los keys del objeto y se imprime así -> :nombre, :apellido, :edad */
                $this->sql = "INSERT INTO {$this->tabla} (`{$campos}`) VALUES ({$valores})";
                $this->ejecutar($obj);
                $id = $this->conexion->lastInsertId();
                return $id;
            } catch (Exception $e) {
                echo $e->getTraceAsString();
            }
        }

        public function actualizar($obj){
            try {
                $campos = "";
                foreach($obj as $llave => $valor){
                    $campos .= "`$llave`=:$llave,";
                }
                $campos = rtrim($campos, ","); // elimina la ultima coma que se ingrese por los valores que se ingrese
                $this->sql = "UPDATE {$this->tabla} SET {$campos} {$this->wheres}";
                $filasAfectadas = $this->ejecutar($obj);
                return $filasAfectadas;
            } catch (Exception $e) {
                echo $e->getTraceAsString();
            }
        }

      

        private function ejecutar($obj=null){
            $sth = $this->conexion->prepare($this->sql);
            if($obj !== null){
                foreach($obj as $llave => $valor){
                    if(empty($valor)){
                        $valor = null;
                    }
                    $sth->bindValue(":$llave", $valor);
                    //$sth->bindValue(":$llave", $valor);
                }
            }
            $sth->execute();
            $this->reiniciarValores();
            return $sth->rowCount();
        }

        private function reiniciarValores(){
            $this->wheres = "";
            $this->sql = null;
        }
    }
?>