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
        <h1 class="mt-4 mb-3">Decálogo Martiano</h1>

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image 
                <img class="img-fluid rounded" src="public/images/presentacion.jpg" alt="">-->

                <hr>

                <!-- Date/Time -->
                <p>Publicado el 2 de julio</p>

                <hr>

                <!-- Post Content -->
                        <p><strong> 1.</strong> Un martiano siente que la capacidad de amar es el verdadero pergamino de
                        nobleza de los hombres.</p>
                        <p><strong>2.</strong> Un martiano cree que la dicha es de los que crean, y no de los que destruyen.</p>
                        <p><strong>3.</strong> Un martiano sabe que la conciliación es la garantía de la paz.</p>
                        <p><strong>4.</strong> Un martiano demuestra su cultura expresándose , cuidando su persona y su
                        entorno.</p>
                        <p><strong>5.</strong> Un martiano sabe que el amor es el sentimiento que siempre permanece joven,
                        aun en los corazones viejos.</p>
                        <p><strong>6.</strong> Un martiano sabe que la educación comienza con la vida, y no acaba sino con
                        la muerte.</p>
                        <p><strong>7.</strong> Un martiano reconoce que el destino no es cuestión de suerte, es una
                        cuestión de elección. No es algo que se espere, es algo por alcanzar.</p>
                        <p><strong>8.</strong> Un martiano sabe que para llegar a la meta se necesitan cuatros pasos:
                        Planifica con cuidado, organizar con fe, proceder con seguridad y proseguir
                        con constancia.</p>
                        <p><strong>9.</strong> Un martiano tiene conciencia que todo acto humano se origina en una o más
                        de estas causas: oportunidad, personalidad, impulso, habito, anhelo, pasión.</p>
                        <p><strong>10.</strong> Un martiano esta consiente que no tiene importancia donde nació y cómo vivió.
                        Es lo que ha hecho y donde haya estado lo que debiera ser de interés.</p>

                

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
