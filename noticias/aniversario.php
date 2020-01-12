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
    <meta name="keywords" content="Aniversario – Alegría – Alianzas">

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
        
        <h1 style="margin-top: 20px">Aniversario en la comunidad martiana</h1>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <img class="img-fluid rounded" src="public/images/comunidad.jpg" alt="">

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-calendar" aria-hidden="true"></i> Publicado el 11 de septiembre de 2017, por Ricardo Ortiz</p>

                <hr>
                <p style="margin-top: 20px">Durante las primeras semanas de Agosto se celebró el aniversario N°12 de nuestra institución, José Martí Pérez. La alegría, el compromiso y el esfuerzo de toda la comunidad martiana se vio expresada en las actividades de las alianzas azul y verde (colores característicos del colegio). </p>
                <p style="margin-top: 20px">Las alianzas estuvieron integradas por los siguientes cursos:  Kinder, 2°, 3°, 7° y 8° básico (Azul) y Pre-Kinder, 1°, 4°, 5° y 6° básico (Verde). Todos y todas participando en las distintas competencias de: bailes, cheerleader, desfiles, fútbol, basquetbol, pasa la botella, entre tantas otras.
                <p style="margin-top: 20px">Esto ha permitido que quienes integran esta comunidad se unan y trabajen  por la construcción de un mejor colegio, participativo, integrador y transformador. Podemos decir que hemos cumplido un muy feliz cumpleaños!!!</p>

                Para disfrutar de más imágenes de la celebración puede visitar nuestro perfil de Facebook en la siguiente dirección: 
                <a href="https://www.facebook.com/josemartiperezcoquimbo">https://www.facebook.com/josemartiperezcoquimbo</a>

             

                    
                    
                    

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
