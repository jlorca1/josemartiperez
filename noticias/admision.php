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
        
        <h1 style="margin-top: 20px">Nuevo sistema de admisión escolar</h1>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <img class="img-fluid rounded" src="public/images/comunidad.jpg" alt="">

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-calendar" aria-hidden="true"></i> Publicado el 11 de septiembre de 2017, por Ricardo Ortiz</p>

                <hr>
                <p style="text-indent: 40px;">Este año entra en vigencia el nuevo proceso de admisión escolar. Este es uno los fundamentos de la <strong>Ley de Inclusión</strong>, que tiene como objetivo <em>“garantizar el fin de la selección en la admisión a todos los establecimientos subvencionados por el Estado, a través de un proceso centralizado, transparente y democrático”</em>. Debiendo postular aquellos y aquellas que deseen ingresar a un establecimiento que reciba financiamiento estatal. Abarcando los niveles: <strong>Prekinder, Kinder, 1° básico, 7° básico y 1° medio,</strong> y a partir del segundo año se incorporarán los cursos restantes.</p>
                <p style="text-indent: 40px;">En la región de Coquimbo se alinearán 614 establecimientos (entre municipales, de administración delegada y particulares subvencionados). La Coordinadora Nacional de Admisión Escolar, María Angélica Bosch señaló que <em>“hay una etapa principal en donde esperamos que todos aquellos apoderados que deban realizar el nuevo proceso, puedan postular, sin embargo existirá una segunda etapa complementaria destinada a aquellas familias que no alcanzaron o que deseen cambiar su postulación anterior”</em>. </p>
                     <p style="text-indent: 40px;">Para postular se deben seguir algunos pasos que facilitarán la postulación: 
                1)  Infórmese sobre los establecimientos,<br />
                2)  Complete el formulario con los datos del postulante, <br />
                3)  Agregue los establecimientos y ordene por preferencia,<br />
                4)  Espere los resultados (acepte o rechace),<br />
                5)  Matrícule.</p>
                    <p style="text-indent: 40px;">El proceso se realiza a través portal www.sistemadeadmisionescolar.cl. Entre las fechas importantes se pueden las siguientes:<br />
                -   Lunes 25/09 – Viernes 13/10: Proceso de postulación.<br />
                -   Lunes 20/11: Publicación de los resultados.<br />
                -   Viernes 24/11: Término del plazo para aceptar o rechazar los resultados.<br />
                -   Lunes 18/12: Se inicia el período de matrícula.</p>

                <p style="text-indent: 40px;">Para más información acérquese a nuestro establecimiento, o bien en la página anteriormente señalada.</p>

                

                    
                    
                    

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
