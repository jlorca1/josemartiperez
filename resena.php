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
        
        <h1 style="margin-top: 20px">Reseña Histórica</h1>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <img class="img-fluid rounded" src="public/images/resena.jpg" alt="">

                <hr>

                <!-- Date/Time -->
                <p>Publicado el 2 de julio</p>

                <hr>

                    
                    
                    <p>Nuestra institución surge en Junio de 2006 en el sector de San Juan, Coquimbo.
                        Bajo la mirada de Martí Pérez. En ese entonces, teníamos 1 directivo, 8 docentes, 1
                        administrativo y 160 alumnos organizados en los niveles preescolar y primer ciclo básico.</p>
                        <p>En este intenso proceso como institución han existido varios avances relevantes,
                        como por ejemplo: la construcción del segundo piso hoy ocupado por el 2° ciclo básico
                        (Enero – 2007), el establecimiento de la Biblio-CRA (Agosto – 2007), la incorporación de
                        la Educación de Adultos (Marzo – 2008), la creación del Proyecto de Integración Escolar
                        (Marzo – 2009), la realización del convenio Ley 20.248 de Subvención Escolar
                        Preferencial SEP (Junio – 2011) y la implementación del Laboratorio de Enlaces
                        (Diciembre – 2013).</p>
                        <p>La institución sigue creciendo y proyectándose mediante el Programa de
                        Convivencia Escolar, los campeonatos extraescolares y las salidas pedagógicas.</p>

                

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
