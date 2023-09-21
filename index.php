<?php 
    require_once "./conexion/Conexion.php";
    require_once "./persistencia/Crud.php";

    $crud = new Crud("panaderia"); 

    /*$id = $crud->registrar([
            "producto" => "empanadas",
            "descripcion" => "arina de maíz con platano maduro",
            "cantidad" => 50,
            "valor_unidad" => 0.25,
            "fecha_elaboracion" => date("Y-m-d H:i:s")
        ]);
    echo "El id insertado es: ". $id;*/

    $filasAfectadas = $crud->where("id", "=", 3)->actualizar([
        "producto" => "caña",
        "descripcion" => "arina de trigo con chocolate",
        "valor_unidad" => 0.35
    ]);

    $eliminar = $crud->where("id", "=", 1)->eliminar();

    echo "FILAS AFECTADAS: " . $filasAfectadas . "Eliminadas: " . $eliminar;
    
    echo "<br/>";

    $lista = $crud->mostrarRegistros();
    echo "<pre>";
    var_dump($lista);
    echo "</pre>";
?>