<?php 
require ("../sistem/nav.php");
require ("../sistem/link.php");
require ("../sistem/pie.php");
require ("../sistem/config.php");
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Noticias">
    <meta name="author" content="Ricardo Ortiz">
    <meta name="keywords" content="Ley de Inclusión Postulación Estado">

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
        
        <h1 style="margin-top: 20px">Actividades para la prevención del acoso escolar</h1>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <img class="img-fluid rounded" src="public/images/comunidad.jpg" alt="">

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-calendar" aria-hidden="true"></i> Publicado el 23 de septiembre de 2017, por Ricardo Ortiz</p>

                <hr>
                <p style="text-indent: 40px;">La prevención del acoso escolar es fundamental en nuestro colegio. Se han desarrollado distintas actividades preventivas como charlas, afiches y actividades para padres. En esa línea, el colegio está impulsando, en conjunto con la ATE (Asistencia de Técnica Educativa) High Competence el taller “Actividad educativa para la prevención del acoso escolar”, que fomenta el estudio de distintas aristas de esta situación.</p>
                <p style="text-indent: 40px;">Han sido abordados temas como: las emociones que experimenta la persona acosada, cómo deberían actuar los alumnos y las alumnas, qué rol cumplen los padres, la labor de un profesor, entre otros. Esto se ha desarrollado por cada Profesor Jefe durante el mes de Septiembre en los horarios de la clase de Orientación.</p>
                     <p style="text-indent: 40px;">La comunidad martiana se mueve para prevenir el acoso escolar!</p>
                     
<p></p>

                

                <hr>

                
            </div>

            <!-- Sidebar Widgets Column -->
            <?php gatget();  ?>

            </div>

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
