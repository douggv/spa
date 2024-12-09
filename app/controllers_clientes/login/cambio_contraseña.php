<?php
include '../../config.php';
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$contraseña_verificacion = $_POST['contraseña_verificacion'];

if($contraseña == $contraseña_verificacion){

    $hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);

    $sql = "update usuarios set contrasena = :hashed_password where email = :email";

    $query = $pdo->prepare($sql);
    $query->bindParam(":hashed_password", $hashed_password, PDO::PARAM_STR);
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->execute()) {
        
        session_start();
        
        // Mensaje de Alerta
        $_SESSION['mensaje2'] = "Contraseña Cambiada Correctamente";
        $_SESSION['icono2'] = "success";
        
        // Envio de  Email

        $_SESSION["tituloEmail"] = "Rullier Spa";
        $_SESSION["mensajeEmail"] = "Cambio de Contraseña Exitoso";
        $_SESSION["emailEnviar"] = $email;
        unset($_SESSION["recuperacion"]);
        unset($_SESSION["email_recuperacion"]);
        header("Location: ".$URL."/login.php");
        
    }else{
        
        session_start();
        $_SESSION['mensaje2'] = "Error al Cambiar la Contraseña";
        $_SESSION['icono2'] = "error";
        header("Location: ".$URL."/login.php"); 
    }
    
}else {
session_start();
$_SESSION['mensaje2'] = "Las contraseñas no coinciden";
$_SESSION['icono2'] = "error";
header("Location: ".$URL."/cambio_contraseña.php");        
}

?>