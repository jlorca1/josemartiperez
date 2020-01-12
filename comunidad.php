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
        
        <h1 style="margin-top: 20px">Comunidad Martiana</h1>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <img class="img-fluid rounded" src="public/images/comunidad.jpg" alt="">

                <hr>

                <!-- Date/Time -->
                <p>Publicado el 2 de julio</p>

                <hr>

                    
                    
                    

<p>La comunidad martiana que se caracteriza por fomentar el trabajo en equipo de
todos y todas quienes son parte de nuestra institución. De la cual son parte de esta:
directivas, docentes, asistentes de la educación, apoderados, alumnos y alumnas.</p>
<p>La matrícula alcanza 359 personas en la jornada diurna (Pre-kinder, Kinder y
Primero a Octavo básico) y 59 personas en la jornada nocturna (primer y segundo ciclo).</p>
<p>A su vez se divide en: la planta docente (2 directivos, 23 profesores de aula, 2
educadoras y 4 PIE) y los asistentes de la educación (2 psicólogos, 1 fonoaudióloga, 1
encargada CRA, 4 inspectoras, 3 administrativos, 1 encargado de multicopia, 3 asistentes
de aula, 2 auxiliares de servicio y 2 nocheros).</p>

                

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
