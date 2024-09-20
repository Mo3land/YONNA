<?php
include 'conexion.php';



if (isset($_POST['login'])) {
    $username = $conecta->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // Consultar el usuario
    $query = "SELECT * FROM `usuario` WHERE `USERNAME` = '$username'";
    $resultado = $conecta->query($query);

    if ($resultado && $resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        // Verificar la contraseña
        if (password_verify($password, $usuario['PASSWORD_US'])) {
            session_start();
            $_SESSION['usuario_id'] = $usuario['ID_USUARIO'];
            header("Location: catalogo.php");
            exit();
        } else {
            echo "<h3 class='text-danger'>Contraseña incorrecta</h3>";
        }
    } else {
        echo "<h3 class='text-danger'>El usuario no existe</h3>";
    }
}
