<?php

$sql = "SELECT *, services.nombre as servicio_nombre,
        usuarios.nombre as usuario_nombre,
        reservas.id as id_reserva FROM reservas 
        INNER JOIN usuarios ON reservas.id_usuario = usuarios.id 
        INNER JOIN services ON reservas.id_servicio = services.id 
        WHERE reservas.estado = 'pendiente'";

        $query = $pdo->prepare($sql);
        $query->execute();
        $reservas = $query->fetchAll(PDO::FETCH_ASSOC);

?>


