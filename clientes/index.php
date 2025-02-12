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
    <?php include '../admin/layout/mensaje.php'; ?>   

    </body>
    <section class="banner">
            <img width="100%" src="../assets/img/imagen1.jfif" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 style="font-size : 40px;" class="text-white">Ruiller Beauty!</h1>
                        <p style ="font-size : 30px;" class="text-white">Relájate y renueva tu espíritu en un entorno de tranquilidad y bienestar</p>
                    </div>
                </div>
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