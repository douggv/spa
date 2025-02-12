<?php 
include '../../config.php';

$id_servicio = $_POST['id_servicio_fk'];
$id_usuario = $_POST['id_usuario_fk'];
$fecha_cita = $_POST['fecha'];
$hora_cita = $_POST['hora'];
$forma_pago = $_POST['forma_pago'];
$referencia = $_POST['referencia'];
$estado = $_POST['estado'];
$nombre_pago = $_POST['nombre_pago'];
$title = $_POST['title'];
$start = $_POST['fecha'];
$end = $_POST['fecha'];


    // Insertar nueva reserva

    $sql = "INSERT INTO reservas (id_servicio, id_usuario, fecha_cita, hora_cita, forma_pago, referencia, estado, nombre_pago, title, start, end) VALUES (:id_servicio, :id_usuario, :fecha_cita, :hora_cita, :forma_pago, :referencia, :estado, :nombre_pago, :title, :start, :end)";
    $query = $pdo->prepare($sql);
    $query->bindParam(':id_servicio', $id_servicio);
    $query->bindParam(':id_usuario', $id_usuario);
    $query->bindParam(':fecha_cita', $fecha_cita);
    $query->bindParam(':hora_cita', $hora_cita);
    $query->bindParam(':forma_pago', $forma_pago);
    $query->bindParam(':referencia', $referencia);
    $query->bindParam(':estado', $estado);
    $query->bindParam(':nombre_pago', $nombre_pago);
    $query->bindParam(':title', $title);
    $query->bindParam(':start', $start);
    $query->bindParam(':end', $end);
    $query->execute();
    

    
    if ($query->rowCount() > 0) {
        session_start();
        // Mensaje de Alerta
        $_SESSION['mensaje'] = "Reserva Agendada Correctamente";
        $_SESSION['icono'] = "success";   
        header("Location: ".$URL."/clientes/index.php");
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error ";
        $_SESSION['icono'] = "error";
        header("Location: ".$URL."/clientes/index.php"); 
    }

?>
