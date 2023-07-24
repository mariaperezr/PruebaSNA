<?php

include_once "Conexion.php";

class mdlUsuario {





// Función para iniciar sesión
public static function mdlIniciarSesion($correo, $password) {
    try {
        $consulta = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE correo_electronico = :correo");
        $consulta->bindParam(":correo", $correo);
        $consulta->execute();
        $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($password, $usuario['contrasena'])) {
            // La contraseña coincide, el usuario existe
            return $usuario;
        } else {
            // El usuario o contraseña son incorrectos
            return false;
        }
    } catch (Exception $error) {
        return false;
    }
}

}