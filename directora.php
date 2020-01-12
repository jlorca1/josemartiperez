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

    <title>Colegio José Martí Pérez - Coquimbo</title>

    <!-- Bootstrap core CSS -->
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
        <h1 class="mt-4 mb-3">Dirección</h1>

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                
                <div class="card h-80">
                    <a href="#"><img class="card-img-top" src="public/images/dire.jpeg" alt=""></a>
                    <div class="card-body">
                        
                        <p class="card-text">Liderando nuestra institución se encuentra nuestra Directora Sra. Ginia Andrea
                        Saavedra Espinosa, que cuenta con el título profesional de Profesora de Estado en
                        Educación Diferencial -con especialización en Lenguaje y Desarrollo- y Licenciada en
                        Educación de la Universidad de La Serena, Región de Coquimbo. Cuenta el diplomado en
                        Dirección y Liderazgo de la de la Pontificia Universidad Católica de Santiago.</p>
                        <p>Sobre la educación: “El proceso educativo se concibe por medio de la construcción de
                        aprendizaje significativo, donde el estudiante es personaje activo, reflexivo, vinculándose
                        en forma afectiva y experiencial con el conocimiento, por medio de la tecnología”</p>

                        <p>Profesora Ginia Saavedra Espinosa<br>
                        Directora Colegio José Martí Peréz.</p>
                    </div>
                </div>
            
            </div>

            <!-- Sidebar Widgets Column -->
            <?php gatget();  ?>

            </div>

        
        <!-- /.row -->

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
