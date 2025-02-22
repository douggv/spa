<?php
    include '../../app/config.php';
    $id_usuario = $_GET['id'];
    
    include '../../app/controllers/usuarios/datos_usuario.php';
    
    
?>   

<?php include '../../admin/layout/parte1.php';?>

<div class="container-fluid">
    <h1>Datos del Usuario  </h1>  
    <div class="row">
        <div class="col-md-6">
                    <div class="card card-outline card-danger">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">¿Desea borrar el usuario?</h3>
                    </div>
                    <div class="card-body">
                        
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre Completo</label>
                                        <input readonly value="<?php echo $nombre ?>" class ="form-control" type="text" class="form-control" name="nombre_completo"
                                        required
                                        pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$"
                                        title="Solo letras"
                                        minlength="3"
                                        maxlength="40">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Cedula</label>
                                        <input readonly value="<?php echo $cedula; ?>" class ="form-control" type="number" class="form-control" name="cedula"
                                        required

                                        title="Solo Numeros"
                                        minlength ="7"
                                        maxlength = "8">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Correo Electronico</label>
                                        <input readonly value="<?php echo $email; ?>" class ="form-control" type="email" class="form-control" name="email"
                                        required
                                        >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        <input readonly value="<?php echo $telefono; ?>" class ="form-control" type="text" class="form-control" name="telefono"

                                        minlength ="10"
                                        maxlength = "17">
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Cargo</label>
                                            <input readonly value="<?php echo $rol; ?>" class ="form-control" type="text" class="form-control" name="cargo"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                        <div class="form-group">
                                            <form action="<?php echo $URL; ?>/app/controllers/usuarios/borrar.php" method="post">
                                                <a href="index.php" class="btn btn-secondary">Cancelar</a>

                                                <input   name="id_usuario" type="hidden" value="<?php echo $id_usuario; ?>">
                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include '../../admin/layout/parte2.php';?>

