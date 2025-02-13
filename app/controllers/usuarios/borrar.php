<?php
include '../../../app/config.php';
$id_usuario = $_POST['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id_usuario' ";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
if($result['rol'] == "empresa"){
    session_start();
        $_SESSION['mensaje'] = "Error al Borrar el Usuario porque es un Gerente";
        $_SESSION['icono'] = "error";
        header("Location: ".$URL."/admin/usuarios/index.php");
}else{
    try{
        $sentencia = $pdo->prepare("DELETE FROM usuarios WHERE id = :id_usuario");
        $sentencia->bindParam(':id_usuario', $id_usuario);

        if ($sentencia->execute()) {
            session_start();
            $_SESSION['mensaje'] = "Usuario Borrado Correctamente";
            $_SESSION['icono'] = "success";
            header("Location: ".$URL."/admin/usuarios/index.php");
            
        } else {
            session_start();
            $_SESSION['mensaje'] = "Error al Borrar el Usuario";
            $_SESSION['icono'] = "error";
            header("Location: ".$URL."/admin/usuarios/index.php");
            
    }
    } catch(Exception $e) {
        session_start();
        $_SESSION['mensaje'] = "No se puede eliminar el  usuario porque tiene citas pendientes";
        $_SESSION['icono'] = "error";
        header("Location: ".$URL."/admin/usuarios/index.php");
    }
}
?>