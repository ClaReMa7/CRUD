<?php
    spl_autoload_register(function($clase){

        $archivo = str_replace("\\","/",$clase);
        $archivo = __DIR__ . "/".$clase. ".php"; //obtiene el directorio en el que se encuentra el archivo actual
        

        if(is_file($archivo)){
            require_once $archivo;
        } 
    }); // spl_autoload_register: funcion que carga las clases automaticamente
    
?>    