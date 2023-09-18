<?php
class Conexion {

    private $conexion;
    private $configuracion = [
        "driver" => "mysql",
        "host" => "localhost",
        "database" => "crud_panaderia",
        "port" => "3306",
        "username" => "root",
        "password" => "",
        "charset" => "utf8mb4"
    ];

    public function __construct() {}

    public function conectar() {
        try {
            $CONTROLADOR = $this->configuracion["driver"];
            $SERVIDOR = $this->configuracion["host"];
            $BASE_DATOS = $this->configuracion["database"];
            $PUERTO = $this->configuracion["port"];
            $USUARIO = $this->configuracion["username"];
            $CLAVE = $this->configuracion["password"];
            $CODIFICACION = $this->configuracion["charset"];

            $url = "{$CONTROLADOR}:host={$SERVIDOR}:{$PUERTO};"
                    . "dbname={$BASE_DATOS};charset={$CODIFICACION}";
            
            //Realizandp la conexión hacia la base de datos
            $this->conexion = new PDO($url, $USUARIO, $CLAVE);
            echo "Conectado hacia la base de Datos";
            return $this->conexion;
        } catch (Exception $e) {
            echo "No se a podido conectar hacia la base de datos";
            echo $e->getTraceAsString();
        }
    }
}

?>
