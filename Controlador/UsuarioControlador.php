<?php

include_once "../Modelo/UsuarioModelo.php";

class CtrUsuario {

    public function ctrIniciarSesion($correo, $password) {
        // Lógica para implementar el inicio de sesión
        $usuario = MdlUsuario::mdlIniciarSesion($correo, $password);
        if ($usuario) {
            // Inicio de sesión exitoso, guardar información del usuario en la sesión
            session_start();
            $_SESSION['loggedin'] = true; // Variable que indica que el usuario ha iniciado sesión
            $_SESSION['idUsuario'] = $usuario['id_usuario']; // Solo almacenar el ID del usuario en la sesión
            // Aquí puedes guardar más información del usuario en la sesión si lo necesitas
            echo json_encode("ok");
        } else {
            echo json_encode("Usuario o contraseña incorrectos");
        }
    }
}

// Verificar si se ha enviado el formulario de inicio de sesión
if (isset($_POST["correo"], $_POST["password"])) {
    $objUsuario = new CtrUsuario();
    $objUsuario->ctrIniciarSesion($_POST["correo"], $_POST["password"]);
}