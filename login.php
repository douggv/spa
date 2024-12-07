<?php
include "nav.php";
?>
<?php
    include "mensaje.php";
?>
<?php
    include "app/controllers/correo/enviarCorreo.php";
?>

<div  class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="background-color: #ffd3e2; margin-top: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <h2 class="text-center" style="color: black;">Iniciar sesión</h2>
                    <form class="text-center" action="app/controllers/login/controller_login.php" method="GET">
                        <div class="mb-3">
                            <label for="correo" class="form-label" style="color: black;">Correo Electronico</label>
                            <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" style="border-color: #FFC0CB;">
                        </div>
                        <div class="mb-3">
                            <label for="tipoUsuario" class="form-label" style="color: black;">Tipo de usuario</label>
                            <select name="rol" class="form-select" id="tipoUsuario" style="">
                                <option value="cliente">Cliente</option>
                                <option value="empresa">Empresa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label" style="color: black;">Contraseña</label>
                            <input name="contrasena" type="password" class="form-control" id="contrasena" style="border-color: #FFC0CB;">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color:#FF69B4; border-color: #FF69B4;">Iniciar sesión</button>
                    </form>
                    <p class="text-center" style="color: black;">¿Ya tienes cuenta? <a href="<?= $URL ?>/registro.php" style="color: black;">Regístrate aquí</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>