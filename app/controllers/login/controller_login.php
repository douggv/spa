<?php
    include '../../config.php';
    $email = $_GET['correo'];
    $password = $_GET['contrasena'];
    $rol = $_GET['rol'];
    
    $sql = "SELECT * FROM usuarios WHERE email = ? AND rol = ? ";    
    $query = $pdo->prepare($sql);
    $query->bindParam(1, $email, PDO::PARAM_STR);
    $query->bindParam(2, $rol, PDO::PARAM_STR);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    $contador = 0;
    foreach ($usuarios as $usuario) {
        $passwod_tabla = $usuario['contrasena'];
        if (password_verify($password, $passwod_tabla)) {
            $contador = $contador + 1;
        }
    }
    
    if($contador > 0){
        if($rol == "cliente"){
            session_start();
            $_SESSION['mensaje2'] = "Inicio de sesion exitoso";
            $_SESSION['icono2'] = "success";
            session_start();
            $_SESSION['emailu'] = $email;
            
            header(header: "Location: ".$URL."/clientes/index.php");   
        }else{
            session_start();
            $_SESSION['mensaje2'] = "Inicio de sesion exitoso";
            $_SESSION['icono2'] = "success";
            session_start();
            $_SESSION['email'] = $email;
            header(header: "Location: ".$URL."/admin/index.php");
        }
            
    } else {
        session_start();
        $_SESSION['mensaje2'] = "Error al iniciar sesion, verifique sus credenciales";
        $_SESSION['icono2'] = "error";
        header('Location: '.$URL.'/login.php');
    }
?>