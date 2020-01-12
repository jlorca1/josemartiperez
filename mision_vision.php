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
        <br>
        <h1 style="">Visión de futuro</h1>
        <hr>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                

                    
                    <img class="img-fluid rounded img-thumbnail" src="public/images/colegio-1.jpg" alt="" width="200" style="float: right;">
                    <p>La misión del colegio José Martí Pérez, es entregar una educación de
                    calidad, atendiendo la diversidad de sus alumnos, por medio de una
                    enseñanza; dinámica, constructiva, articulada con la tecnología y cimentada
                    en valores como; responsabilidad, superación y amor. De manera que los
                    alumnos al egresar de la enseñanza básica hayan logrado la preparación
                    académica, personal y social, que les permita integrarse a la enseñanza
                    media y en la sociedad exitosamente de acuerdo a sus aspiraciones.</p>
                    <h3>Misión</h3>
                    <p>La misión del colegio José Martí Pérez, es entregar una educación de
                    calidad, atendiendo la diversidad de sus alumnos, por medio de una
                    enseñanza; dinámica, constructiva, articulada con la tecnología y cimentada
                    en valores como; responsabilidad, superación y amor. De manera que los
                    alumnos al egresar de la enseñanza básica hayan logrado la preparación
                    académica, personal y social, que les permita integrarse a la enseñanza
                    media y en la sociedad exitosamente de acuerdo a sus aspiraciones</p>

                

                <hr>

                
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
