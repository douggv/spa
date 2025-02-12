<?php

include "nav.php";
?>


        <section class="banner">
            <img width="100%" src="assets/img/imagen1.jfif" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 style="font-size : 40px;" class="text-white">Rullier Beauty!</h1>
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

