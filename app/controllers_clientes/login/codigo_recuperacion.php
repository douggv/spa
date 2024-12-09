<?php
    include ("../../config.php");

    $email = $_POST["email"];
    $codigo = $_POST["codigo"];

    $sql = "SELECT * FROM usuarios WHERE email = ? AND codigo = ?";
    $query = $pdo->prepare($sql);
    $query->bindParam(1, $email, PDO::PARAM_STR);
    $query->bindParam(2, $codigo, PDO::PARAM_INT);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    $contador = 0;
    foreach ($usuarios as $usuario) {
        $contador++;
    }
    if($contador > 0){
        session_start();
        $_SESSION['recuperacion'] = "true";
        $_SESSION["email_recuperacion"] = $email;
        $_SESSION["mensaje2"] = "Codigo de verificacion correcto ahora puede cambiar su contraseña";
        $_SESSION["icono2"] = "success";

        header("Location: ".$URL."/cambio_contraseña.php");
    
    } else {
        session_start();
        $_SESSION["mensaje2"] = "El Codigo de verificacion es incorrecto, intente nuevamente";
        $_SESSION["icono2"] = "error";
        header("Location: ".$URL."/codigo_recuperacion.php");
    }

?>  