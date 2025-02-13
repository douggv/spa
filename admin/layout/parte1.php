<?php
    include("validacion.php");

            

?>
<?php // echo $id_usuario_sesion;
// echo $email_sesion;
// echo $cargo_usuario_sesion;
// echo $nombre_usuario_sesion;
?>
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= APP_NAME ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery-3.6.4.min.js"></script>
    <link rel="shortcut icon" href="https://www.bing.com/images/search?view=detailV2&ccid=5HB95Ung&id=4C53BF609809F7B4598C3D66F3B32D5C7FFB7D1B&thid=OIP.5HB95UngsoHs5A8lvPapCgHaHa&mediaurl=https%3a%2f%2fimage.freepik.com%2fvetores-gratis%2fdog-cat-logo-template-veterinaria_56473-120.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.e4707de549e0b281ece40f25bcf6a90a%3frik%3dG337f1wts%252fNmPQ%26pid%3dImgRaw%26r%3d0&exph=626&expw=626&q=logo+veterinaria&simid=608012154139074715&FORM=IRPRST&ck=5E7DC5537EBA3202D7C3BD863F3354FD&selectedIndex=0&itb=0" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href=" <?= $URL ?>/public/template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="<?= $URL ?>/public/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo $URL ?>admin/style.css">
    <!-- jQuery -->
    <script src="<?= $URL ?>/public/template/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= $URL ?>/public/template/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= $URL ?>/public/template/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= $URL ?>/public/template/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- FullCalendar -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
    
</head>
<body  class="hold-transition sidebar-mini">
    <div  class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= $URL ?>/admin" class="nav-link"><?= APP_NAME ?></a>
        </li>

        </ul>


        <ul class="navbar-nav ml-auto">

        
    </nav>

    <aside class="main-sidebar sidebar-rosado elevation-4">

        <a href="<?= $URL ?>/admin" class="brand-link">
        <img src="<?= $URL ?>/assets/img/logo2.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= APP_NAME ?></span>
        </a>

        <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            
            <div class="info text-center">
                <?php ?></span> 
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item ">
                <a style = "background-color: #c8a2c8" href="#" class="nav-link active ">
                <i class="bi bi-calendar-week"></i>
                <p>
                    Validacion de Reservas
                    <i class="bi bi-arrow-bar-down"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= $URL ?>/admin/reservas" class="nav-link ">
                    
                    <p>Reservas Pendientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $URL ?>/admin/reservas/lista_de_reservas.php" class="nav-link">
                    
                    <p>Reservas Aceptadas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $URL ?>/admin/reservas/lista_de_reservas_negadas.php" class="nav-link">
                    
                    <p>Reservas Negadas</p>
                    </a>
                </li>
            </ul>
                            
            </li>
            <li class="nav-item ">
                <a style = "background-color:#f28eb2" href="<?= $URL ?>/admin/agendas" class="nav-link active ">
                <i class="bi bi-calendar-week"></i>
                <p> Agendas</p>
                </a>
                
            </li>
            <li class="nav-item ">
                <a style = "background-color:#f28eb2" href="<?= $URL ?>/admin/usuarios" class="nav-link active ">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Usuarios

                </p>
                </a>
                
            </li>
                        
            <li  class="nav-item "  ">
                <a style = "background-color: #c8a2c8" href="<?= $URL ?>/admin/servicios" class="nav-link active ">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Servicios

                </p>
                </a>
                
            </li>        
            <li class="nav-item ">
                <a style = "background-color:#f28eb2" href="<?= $URL ?>/admin/reportes" class="nav-link active ">
                <i class="bi bi-archive"></i>
                <p>
                    Historial

                </p>
                </a>
                
            </li> 
            <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="<?= $URL ?>/admin/layout/Guia de usuario - Gerente.pdf" download="Guia de usuario - Gerente.pdf">

                <i class="bi bi-file-pdf"></i>
                <p>
                    Guía de Usuario

                </p>

            </a>

                
            </li> 
                
            </li>
            <li class="nav-item "  ">
                <a href="<?= $URL ?>/app/controllers/login/cerrar_sesion.php" class="nav-link active bg-danger">
                <i class="nav-icon fas fa-door-open"></i>
                <p>
                    Cerrar Sesión

                </p>
                </a>
                </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <div class="content">

<style>
.main-sidebar {
  background-color: #FFC5C5; /* Color carne claro */
}

.main-sidebar .nav-link {
    color: #333;
}

.main-sidebar .nav-link:hover {
  background-color: #FFB6C1; /* Color carne más oscuro */
}

.main-sidebar .nav-link.active {
  background-color: #FFA07A; /* Color carne más oscuro */
}
</style>