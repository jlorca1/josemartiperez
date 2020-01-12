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

    <title>Horario de Clases 1° ciclo</title>

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
        
        <h1 style="margin-top: 20px">Horario de Clases 1° ciclo</h1>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                

                <hr>

                <!-- Date/Time -->
                <p>Publicado el 5 de Septiembre</p>

                <hr>

                    <img class="img-fluid rounded" src="public/images/horario1C_a.png" alt="">
                    <img class="img-fluid rounded" src="public/images/horario1C_b.png" alt="">

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
