<?php
    require_once "../../config/app.php";
	require_once "../views/include/session_start.php";
	require_once "../../autoload.php";
	
    use app\controllers\userController;

    if(isset($_POST['modulo_usuario'])){


		$insUsuario = new userController();
        // Si el modulo es registrar, se llama al metodo registrarUsuarioControlador
		if($_POST['modulo_usuario'] == "registrar"){
			echo $insUsuario -> registrarUsuarioControlador();
		}

		if($_POST['modulo_usuario']=="eliminar"){
			echo $insUsuario->eliminarUsuarioControlador();
		}
		
		if($_POST['modulo_usuario']=="actualizar"){
			echo $insUsuario->actualizarUsuarioControlador();
		}

		
	}else{
		session_destroy();
		header("Location: ".APP_URL."login/");

	}