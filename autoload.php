<?php
    spl_autoload_register(function($clase){
        $archivo = __DIR__ . "/".$clase. ".php"; //obtiene el directorio en el que se encuentra el archivo actual
        $archivo = str_replace("\\","/",$archivo);

        if(is_file($archivo)){
            require_once $archivo;
        } 
    }); // spl_autoload_register: funcion que carga las clases automaticamente
    
?>    