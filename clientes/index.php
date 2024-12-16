<?php
include '../app/config.php';

?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= APP_NAME ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="<?php echo $URL; ?>/public/css/home.css">
        <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
        <link href="<?php echo $URL; ?>/public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="<?php echo $URL; ?>/public/js/jquery-3.6.4.min.js"></script>

        
    </head>
    <body>
    <?php include 'layout/nav.php';?>
        

    </body>
    <section class="banner">
            <img width="100%" src="../assets/img/imagen1.jfif" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 style="font-size : 40px;" class="text-white">Ruiller!</h1>
                        <p style ="font-size : 30px;" class="text-white">Relájate y renueva tu espíritu en un entorno de tranquilidad y bienestar</p>
                    </div>
                </div>
            </div>
        </section>
        
        
    

    <section class="direccion mt-5">
        <div class="container">
            <h2 class="text-center mb-5 text-success" >Nuestra ubicación</h2>
            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15682.335363660924!2d-71.68022006750103!3d10.689374965538416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e89995f0536d7c1%3A0x23dd7e8e4c5437f3!2sCEDIVETCA!5e0!3m2!1ses!2sve!4v1721080814859!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    
    <footer class="container-fluid">
        
    </footer >
    </body>
    <style>
        .banner {
            position: relative;
        }

        .banner img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            filter: blur(2px);
            -webkit-filter: blur(2px);
        }

        .banner .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .banner h1, .banner p {
            font: bold 40px 'Open Sans', sans-serif;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</html>