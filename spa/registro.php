<?php

include "nav.php";
?>

<?php
    include "mensaje.php"
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="background-color: #ffd3e2; margin-top: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <h2 class="text-center" style="color: black;">Regístrate</h2>
                    <form class="text-center" action="app/controllers_clientes/login/registrarse.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label" style="color: black;">Nombre</label>
                            <input require name = "nombre" type="text" 
                            placeholder="Ingresa el nombre " required
                                        pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$"
                                        title="Solo letras"
                                        minlength="3"
                                        maxlength="40"
                            class="form-control" id="nombre" style="border-color: #FFC0CB;">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color: black;">Apellido</label>
                            <input require name = "apellido" type="text" 
                            placeholder="Ingresa el apellido" required
                                        pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$"
                                        title="Solo letras"
                                        minlength="3"
                                        maxlength="40"
                            class="form-control" id="apellido" style="border-color: #FFC0CB;">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label" style="color: black;">Teléfono</label>
                            <input  name = "telefono" type="tel" class="form-control" id="telefono" 
                            placeholder=" Ingresa el numero de telefono" 
                            minlength ="10"
                            maxlength = "17"
                            style="border-color: #FFC0CB;">
                        </div>
                        <div class="mb-3">
                            <label for="cedula" class="form-label" style="color: black;">Cédula</label>
                            <input require name = "cedula" type="text" class="form-control" id="cedula"
                            placeholder="Ingresa la cedula" 
                                        title="Solo Numeros"
                                        pattern="[0-9]*"
                                        minlength ="7"
                                        maxlength = "8" style="border-color: #FFC0CB;">
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label" style="color: black;">Correo electrónico</label>
                            <input require name = "email" type="email" class="form-control" id="correo" 
                            placeholder="Ingresa el correo electronico"
                            aria-describedby="emailHelp" style="border-color: #FFC0CB;">
                        </div>
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
                        <button type="submit" class="btn btn-primary" style="background-color:#FF69B4; border-color:#FF69B4 ">Regístrate</button>
                    </form>
                    <p class="text-center" style="color: black;">¿Ya tienes cuenta? <a href="<?= $URL ?>/login.php" style="color: black;">Inicia sesión aquí</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>