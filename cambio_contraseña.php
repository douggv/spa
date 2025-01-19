
<?php
    include "mensaje.php";
    ?>

<?php
if(isset($_SESSION["recuperacion"])) {
    $email = $_SESSION["email_recuperacion"];
    echo "$email";
} else {
    header("Location: login.php");
    echo"Error";
}
include "nav.php";
?>

<div  class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="background-color: #ffd3e2; margin-top: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <h2 class="text-center" style="color: black;">Recuperar contraseña</h2>
                    <form class="text-center" action="app/controllers_clientes/login/cambio_contraseña.php" method="POST">
                    <div class="mb-3">
                            <label for="contraseña" class="form-label" style="color: black;">Contraseña</label>
                            <input require name = "contraseña" 
                            placeholder="Ingresa la Contraseña" 
                            minlength="3"
                            maxlength="20"
                            type="password" class="form-control" id="contraseña" style="border-color: #FFC0CB;">
                        </div>
                        <div class="mb-3">
                            <label for="contraseña" class="form-label" style="color: black;">Confirmar Contraseña</label>
                            <input require name = "contraseña_verificacion" type="password" 
                            placeholder="Ingresa la Contraseña de nuevo" 
                            minlength="3"
                            maxlength="20"
                            class="form-control" id="contraseña" style="border-color: #FFC0CB;">
                        </div>                        
                        <input hidden type="text" name="email" value="<?php echo $email; ?>">
                        <button type="submit" class="btn btn-primary" style="background-color:#FF69B4; border-color: #FF69B4;">Guardar Contraseña</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>