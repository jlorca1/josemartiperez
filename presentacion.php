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
        <h1 class="mt-4 mb-3">Presentación de Nuestro colegio</h1>

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="public/images/presentacion.jpg" alt="">

                <hr>

                <!-- Date/Time -->
                <p>Publicado el 2 de julio</p>

                <hr>

                <!-- Post Content -->
                    <p>El Colegio José Martí Pérez es un establecimiento educacional subvencionado
                    particular, dependiente de la Sociedad Educacional Magia S.A. Se encuentra ubicado en
                    el sector San Juan, comuna de Coquimbo, Chile. Este imparte educación en los niveles
                    de pre-básica (prekinder y kínder), básica: primer ciclo (1° a 4°) y segundo ciclo (5° y 8°);
                    y educación de adultos. </p>
                    <p>Es un establecimiento que se caracteriza por desarrollar una labor intensamente
                    formadora hacia nuestra comunidad martiana. Bajo el alero de Martí Pérez sobre el valor
                    de enseñar “Hombres vivos, hombres independientes, hombres amantes, eso han de
                    formar los colegios…” Forjamos un espíritu basado en el cambio, en la transformación de
                    las personas hacia una sociedad integradora. Que quienes sean parte de nuestra
                    institución tengan un sello basado en el apoyo colectivo.</p>
                    <p>La familia es clave en el aprendizaje. Todo esfuerzo de la comunidad martiana
                    debe ir respaldada por el trabajo en el hogar, esto permite que nuestros estudiantes
                    puedan alcanzar sus metas en cuanto al desarrollo integral de la persona (emoción,
                    intelecto y físico).</p>

                

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
