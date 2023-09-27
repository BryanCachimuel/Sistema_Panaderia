<?php

    class Autoloader {

        public static function registrar(){
            if(function_exists('__autoload')){
                spl_autoload_register('__autoload');
            }
            /* si da error en la versión poner 5.3.0 */
            if(version_compare(PHP_VERSION, '8.0.19') >= 0){
                spl_autoload_register(array('Autoloader','cargar'), true, true);
            }else{
                spl_autoload_register(array('Autoloader','cargar'));
            }
        }
        
        public static function cargar($clase){
            $nombreArchivo = $clase . '.php';
            $carpetas = require '';
        }
        
    }

?>