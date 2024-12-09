<?php include '../../app/config.php';?>    
<?php include '../../admin/layout/parte1.php';?>
<?php include '../../admin/layout/mensaje.php';?>
<?php include '../../app/controllers/auditorias/index.php';?>

<div class="container-fluid">
  
    <div class="row">
        <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">Hisotrial de Reportes</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-responsive table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Mensaje</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $contador = 0;
                                foreach ($auditorias as $auditoria) {  
                                    $contador++; 
                                    
                                    ?>
                                    <tr>
                                        <td><?php echo $contador; ?></td>
                                        <td><?php echo $auditoria['mensaje']; ?></td>
                                        <td><?php echo $auditoria['fecha_creacion']; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ auditorias",
                "infoEmpty": "Mostrando 0 a 0 de 0 auditorias",
                "infoFiltered": "(Filtrado de _MAX_ total auditorias)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ auditorias",
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
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
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