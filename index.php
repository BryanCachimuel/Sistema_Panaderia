<?php 
    require_once "./conexion/Conexion.php";
    require_once "./persistencia/Crud.php";
    require_once "./persistencia/modelos/ModeloGenerico.php";
    require_once "./persistencia/modelos/Panaderia.php";
    require_once "./http/ControladorPanaderia.php";

    $controladorPanaderia = new ControladorPanaderia();
    /*$respuesta = $controladorPanaderia->insertarPanaderia([
        "producto" => "leche",
        "descripcion" => "leche semidescremada",
        "cantidad" => 25,
        "valor_unidad" => 1.05
    ]);

    echo "</br>";
    var_dump($respuesta);
    echo "</br>";*/



    echo "</br>";

    echo "<pre>";
    $listado = $controladorPanaderia->listarPanaderia();
    var_dump($listado);
    echo "</pre>";

    echo "</br>";

    
    echo "<pre>";
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
    var_dump($borrarpanaderia);
   
?>