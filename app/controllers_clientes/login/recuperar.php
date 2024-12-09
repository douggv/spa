<?php
    include '../../config.php';
    $email = $_POST["email"];
    $sql="SELECT * FROM usuarios WHERE email = ?";
    $query = $pdo->prepare($sql);
    $query->bindParam(1, $email, PDO::PARAM_STR);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    $contador = 0;
    foreach ($usuarios as $usuario) {
        $nombre = $usuario["nombre"];
        $contador++;
    }
    if($contador > 0){
        // Generar código aleatorio de 6 dígitos
        $codigo = rand(000000, 999999);
        session_start();
        $_SESSION["tituloEmail"] = "Rullier Spa Recuperacion De Contraseña";
        $_SESSION["emailEnviar"] = $email;
        $_SESSION["mensajeEmail"] = "Hola " . $nombre . " Este correo se ha generado para recuperar su contraseña en Rullier Spa. Este es el código de verificación: " . $codigo;
        include "../../app/controllers/correo/enviarCorreo.php";
        $sql = "UPDATE usuarios SET codigo = ? WHERE email = ?";
        $query = $pdo->prepare($sql);
        $query->bindParam(1, $codigo, PDO::PARAM_STR);
        $query->bindParam(2, $email, PDO::PARAM_STR);
        $query->execute();
        
        
        
        header("Location: ".$URL."/codigo_recuperacion.php");

    }else{

        // No hay usuarios con ese correo electrónico
        session_start();
        $_SESSION["mensaje2"] = "El correo no se encuentra registrado";
        $_SESSION["icono2"] = "error";
        header("Location: ".$URL."/login.php");
    };
?>