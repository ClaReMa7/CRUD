<?php

    require_once "./config/app.php";
    require_once "./autoload.php";

    /*---------- Iniciando sesion ----------*/
    require_once "./app/views/include/session_start.php";

    if(isset($_GET['views'])){
        $url = explode("/", $_GET['views']);
    }else{
        $url = ["login"];
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/include/head.php"; ?>
</head>
<body>
    <?php
        /* --------- Controlador para obtener vistas ---------*/
        use app\controllers\viewsController;
        use app\controllers\loginController;

        $insLogin = new loginController();

        /* Instanciamos el controlador de vistas para obtener la vista */
        $viewsController= new viewsController();
        $vista=$viewsController->obtenerVistasControlador($url[0]);

        /* Condicional para mostrar la vista correspondiente */
        if($vista == "login" || $vista == "404"){
            require_once "./app/views/content/".$vista."-view.php";
        }else{
            # Cerrar sesion #
            if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
                $insLogin->cerrarSesionControlador();
                exit();
            }

            require_once "./app/views/include/navbar.php";

            require_once $vista;
        }

        require_once "./app/views/include/script.php"; 
    ?>
</body>
</html>