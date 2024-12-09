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
                    <form class="text-center" action="app/controllers_clientes/login/recuperar.php" method="POST">
                        <div class="mb-3">
                            <label for="correo" class="form-label" style="color: black;">Correo Electronico</label>
                            <input type="email" class="form-control" id="correo" name="email" aria-describedby="emailHelp" style="border-color: #FFC0CB;">
                        </div>                        
                        <button type="submit" class="btn btn-primary" style="background-color:#FF69B4; border-color: #FF69B4;">Recuperar contraseña</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>