<?php include '../../app/config.php';?>    
<?php include '../../admin/layout/parte1.php';?>
<?php include '../../admin/layout/mensaje.php';?>
<?php include '../../app/controllers/reservas/lista_reservas_totales_negadas.php';?> 
<div class="container-fluid">
<h1>Listado de Reservas</h1>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title"><b>Reservas Registradas</b></h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-responsive table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="text-align: center">Nro</th>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Fecha de cita</th>
                        <th>Hora de cita</th>
                        <th>Usuario</th>
                        <th>Método de pago</th>
                        <th>Realizado Por</th>
                        <th>Referencia</th>
                        <th>imagen</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                        <th>Razon</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $contador = 0;
                    foreach ($reservas as $reserva){
                        $contador = $contador + 1;
                        $id_reserva = $reserva['id'];
                        ?>
                        <tr>
                            <td><center><?= $contador; ?></center></td>
                            <td><center><?= $reserva['id_reserva']; ?></center></td>
                            <td> <?= $reserva['servicio_nombre']; ?></td>
                            <td> <?= $reserva['fecha_cita']; ?></td>
                            <td> <?= $reserva['hora_cita']; ?></td>
                            <td> <?= $reserva['usuario_nombre']; ?></td>
                            <td> <?= $reserva['forma_pago']; ?></td>
                            <td> <?= $reserva['nombre_pago']; ?></td>
                            <td> <?= $reserva['referencia']; ?></td>
                            <td> <img src="<?= $URL."/public/images/comprobantes/".$reserva['imagen']; ?>" width="100px" alt="ad"></td>
                            <td> <?= $reserva['estado']; ?></td>
                        

                            <td style="text-align: center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?= $URL ?>/app/controllers/reservas/aceptar_reserva.php?id=<?= $reserva['id_reserva'] ?>" class="btn btn-success">Aceptar</a>
                                    
                                    <form method="POST" action="<?= $URL ?>/app/controllers/reservas/notificacion_negada.php">
                                        <td hidden  ><input  type="" value = "<?= $reserva['id_reserva'] ?>" name="id_reserva" type="text"></td>


                                        <td hidden  ><input  type="" value = "<?= $reserva['id_usuario'] ?>" name="id_usuario_fk" type="text"></td>
                                        <td hidden ><input name = "fecha_cita" value = "<?= $reserva['fecha_cita']; ?>" type="text"></td>   
                                        <td hidden ><input name = "hora_cita" value = "<?= $reserva['hora_cita']; ?>" type="text"></td>   
                                        <td style="text-align: center">
                                            <input value= "" name="razon" type="text" class="form-control" >
                                            <input type="submit" value="Enviar notificación" class="btn btn-success">

                                        </td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                        </div>
                                    </form>                               
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>

                <br><br>


            </div>
        </div>
    </div>
</div>



</div>
<?php include '../../admin/layout/parte2.php';?>

<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Usuarios",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },

            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>


<style>
    .card-outline.card-primary {
      border-color: #FFC5C5; /* Tono de carne claro */
    }
    
    .card-outline.card-primary .card-header {
      background-color: #FFC5C5; /* Tono de carne claro */
      color: #333;
    }
    
    .card-outline.card-primary .card-title {
      color: #333;
    }
    
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #FFD7BE; /* Tono de carne claro y cálido */
    }
    
    .table-striped tbody tr:nth-of-type(even) {
      background-color: #FFF;
    }
    
    .table-striped tbody tr:hover {
      background-color: #FFC2C7; /* Tono de carne rosado claro */
    }
    
    .dataTables_wrapper .dataTables_length select {
      background-color: #FFC5C5; /* Tono de carne claro */
      color: #333;
    }
    
    .dataTables_wrapper .dataTables_filter input {
      background-color: #FFC5C5; /* Tono de carne claro */
      color: #333;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button {
      background-color: #FFC5C5; /* Tono de carne claro */
      color: #333;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
      background-color: #FFC2C7; /* Tono de carne rosado claro */
    }
    
    .dataTables_wrapper .dataTables_info {
      color: #333;
    }
    
    .dataTables_wrapper .dataTables_processing {
      background-color: #FFC5C5; /* Tono de carne claro */
      color: #333;
    }
    .dt-button {
      background-color: #FFC5C5; /* Tono de carne claro */
      color: #333;
    }
    
    .dt-button:hover {
      background-color: #FFC2C7; /* Tono de carne rosado claro */
    }
</style>