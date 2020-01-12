<?php 
require ("../../sistem/nav.php");
require ("../../sistem/link.php");
require ("../../sistem/pie.php");
require ("../../sistem/config.php");
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Colegio José Martí Pérez - Coquimbo</title>

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
        
        <h1 style="margin-top: 20px">Geleria de fotografias</h1>
       <hr>
            <div class="row">

                    <!-- inicio Album 1-->
                    <div class="col-lg-6 portfolio-item">
                      <div class="card h-100">
                        <!-- aqui va el enlace a la carpeta del album -->
                        <a href="<?php echo base_url();?>public/gallery/colegio/">
                                <!-- Aqui se coloca el thumbnail del album, la imagen debe ser de 700x400-->
                                <img class="card-img-top" src="<?php echo base_url();?>public/gallery/colegio/thumbnail.jpg" alt="">
                            </a>
                        <div class="card-body">
                          <h4 class="card-title">
                            <!-- aqui va el enlace a la carpeta del album PERO CON EL TITULO-->
                            <a href="<?php echo base_url();?>public/gallery/colegio/">Nuestro Colegio</a>
                          </h4>
                          <!-- aqui va la descripcion del album -->
                          <p class="card-text">Es un establecimiento que se caracteriza por desarrollar una labor intensamente formadora hacia nuestra comunidad martiana.</p>
                        </div>
                      </div>
                    </div>
                    <!-- fin Album 1-->

                  </div>



    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <?php  
        pie_pag();
            ?>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
