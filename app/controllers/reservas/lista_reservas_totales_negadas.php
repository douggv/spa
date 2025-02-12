<?php

$sql = "SELECT *, 
        services.nombre as servicio_nombre, 
        reservas.id as id_reserva,
        usuarios.id as id_usuario,
        usuarios.nombre as usuario_nombre FROM reservas 
        INNER JOIN usuarios ON reservas.id_usuario = id_usuario 
        INNER JOIN services ON reservas.id_servicio = services.id 
        WHERE reservas.estado = 'negado'";

        $query = $pdo->prepare($sql);
        $query->execute();
        $reservas = $query->fetchAll(PDO::FETCH_ASSOC);

?>

