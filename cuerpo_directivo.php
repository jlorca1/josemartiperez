<?php 
require ("sistem/nav.php");
require ("sistem/link.php");
require ("sistem/pie.php");
require ("sistem/config.php");
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cuerpo Directivo</title>

    <?php  
        link_css();
    ?>

</head>

<body>

    <!-- Navigation -->
    <?php  
        nav();
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Cuerpo Directivo</h1>

        

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-80">
                    <a href="#"><img class="card-img-top" src="public/images/directivo.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Directora</a></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-80">
                    <a href="#"><img class="card-img-top" src="public/images/directivo.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Jefe unidad tecnica pedagogica</a></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-80">
                    <a href="#"><img class="card-img-top" src="public/images/directivo.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Inspector general</a></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-80">
                    <a href="#"><img class="card-img-top" src="public/images/directivo.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Orientadora</a></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-80">
                    <a href="#"><img class="card-img-top" src="public/images/directivo.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Evaluador</a></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <?php  
        pie_pag();
            ?>
        <!-- /.container -->
    </footer>

   <?php  
        link_js();
            ?>

</body>

</html>
