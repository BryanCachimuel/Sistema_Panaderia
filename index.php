<?php 
    require_once "./conexion/Conexion.php";
    require_once "./persistencia/Crud.php";

    $crud = new Crud("panaderia");
    $lista = $crud->get();

    var_dump($lista);

?>