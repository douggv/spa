<?php 
include '../../app/config.php';

?>
<?php include '../../admin/layout/mensaje.php'; ?>  

<?php include '../layout/cabecera.php';?>
<?php include '../layout/nav.php';?>
<?php include '../../app/controllers_clientes/notificaciones/listado_notificaciones.php"'; ?>
<?php $sql = "SELECT * FROM notificaciones where id_usuario_fk = '$id_usuario_sesion' ";
$query = $pdo->prepare($sql);
$query->execute();
$notificaciones = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Notificaciones</h3>
      </div>
    </div>

    <div class="row mt-5">
      <?php foreach ($notificaciones as $notificacion) : ?>
        <div class="col-md-4 mb-4">
          <div class="card notification-card" data-id="<?php echo $notificacion['id']; ?>"> <div class="card-body">
              <h5 class="card-title"><?php echo $notificacion['mensaje']; ?></h5>
              <div class="btn-group">
                <form action="eliminar_notificacion.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $notificacion['id']; ?>">
                    <button type="submit" class="btn btn-sm btn-danger delete-notification">Eliminar</button>
                </form>
            </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<style>
    .notification-card {
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  transition: all 0.3s ease;
}

.notification-card:hover {
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  transform: translateY(-5px);
}

.btn-group {
  margin-top: 10px;
}

.btn {
  border-radius: 20px;
  padding: 8px 16px;
}
</style>

<script>

</script>