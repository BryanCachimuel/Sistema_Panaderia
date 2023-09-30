<?php
    require "./src/Roots.php";
    require PATH_SRC.'autoloader/Autoloader.php';
    Autoloader::registrar();
    $rutas = scandir(PATH_ROUTES); /* lista los archivos que se encuentran en el directorio routes */
    
    foreach($rutas as $archivo){
        $rutaArchivo = realpath(PATH_ROUTES. $archivo);
        if(is_file($rutaArchivo)){
            require $rutaArchivo;
        }
    }

    Route::submit();
?>