<?php 
    /*require_once "./bin/conexion/Conexion.php";
    require_once "./bin/persistencia/Crud.php";
    require_once "./bin/persistencia/modelos/ModeloGenerico.php";
    require_once "./bin/persistencia/modelos/Panaderia.php";
    require_once "./bin/http/ControladorPanaderia.php";
    require_once "./bin/constantes/EMensajes.php";
    require_once "./bin/http/Encapsulamiento.php";*/

    require_once './src/Roots.php';
    require_once PATH_SRC.'autoloader/Autoloader.php';

    Autoloader::registrar();
    
   $controladorPanaderia = new ControladorPanaderia();
    $respuesta = $controladorPanaderia->insertarPanaderia([
        "producto" => "tortas heladas",
        "descripcion" => "torta de arina con frutas",
        "cantidad" => 10,
        "valor_unidad" => 17.00
    ]);

    echo "</br>";
    var_dump($respuesta);
    echo "</br>";



    echo "</br>";

    echo "<pre>";
    $listado = $controladorPanaderia->listarPanaderia();
    var_dump($listado);
    echo "</pre>";

    echo "</br>";

    
    /*echo "<pre>";
    $panaderiaId = $controladorPanaderia->buscarPanaderiaPorId(2);
    var_dump($panaderiaId);
    echo "</pre>";

    echo "</br>";

    echo "<pre>";
    $actualizarpanaderia = $controladorPanaderia->actualizarPanaderia([
        "idPanaderia" => 6,
        "producto" => "Avena Polaca",
        "descripcion" => "avena natural, azucas y leche",
        "cantidad" => 25,
        "valor_unidad" => 1.05
    ]);
    var_dump($actualizarpanaderia);
    echo "</pre>";

    echo "</br>";
    $borrarpanaderia = $controladorPanaderia->eliminarPanaderia(3);
    var_dump($borrarpanaderia);*/
   
?>