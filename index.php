<?php 
require ("sistem/nav.php");
require ("sistem/link.php");
require ("sistem/pie.php");
require ("sistem/config.php");

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Colegio José Martí Pérez - Coquimbo</title>

    <!-- Navigation -->
    <?php  
        link_css();
    ?>
    

</head>

<body>

    <!-- Navigation -->
    <?php  
        nav();
    ?>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('public/images/slide2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Colegio Jose Marti</h3>
                        <p>El Colegio José Martí Pérez es un establecimiento educacional subvencionado particular, <br>dependiente de la Sociedad Educacional Magia S.A. Se encuentra ubicado en el sector San Juan, comuna de Coquimbo, Chile. </p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('public/images/admision.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Se inicia el proceso de admisión 2018</h3>
                        <p><a href="<?php echo base_url();?>noticias/admision.php" class="btn btn-outline-warning">Conocer mas detalle</a></p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('public/images/slide3.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Colegio Jose Marti</h3>
                        <p>El Colegio José Martí Pérez es un establecimiento educacional subvencionado particular, <br>dependiente de la Sociedad Educacional Magia S.A. Se encuentra ubicado en el sector San Juan, comuna de Coquimbo, Chile. </p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('public/images/slide4.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Colegio Jose Marti</h3>
                        <p>El Colegio José Martí Pérez es un establecimiento educacional subvencionado particular, <br>dependiente de la Sociedad Educacional Magia S.A. Se encuentra ubicado en el sector San Juan, comuna de Coquimbo, Chile. </p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('public/images/slide5.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Colegio Jose Marti</h3>
                        <p>El Colegio José Martí Pérez es un establecimiento educacional subvencionado particular, <br>dependiente de la Sociedad Educacional Magia S.A. Se encuentra ubicado en el sector San Juan, comuna de Coquimbo, Chile. </p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('public/images/slide6.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Colegio Jose Marti</h3>
                        <p>El Colegio José Martí Pérez es un establecimiento educacional subvencionado particular, <br>dependiente de la Sociedad Educacional Magia S.A. Se encuentra ubicado en el sector San Juan, comuna de Coquimbo, Chile. </p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Bienvenid@ a Nuestro Colegio</h1>

        

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- Blog Post -->
                <div class="card mb-4">
                    
                    <div class="card-body">
                        <h2 class="card-title">Evaluación SIMCE</h2>
                        
                        <p style="text-indent: 40px;">Como cada año entre los meses de Octubre y Noviembre, La Agencia de  Calidad de la Educación aplica instrumentos de evaluación que permite que la comunidad martiana avance en su trayectoria de mejorías escolares.</p>
                        <a href="<?php echo base_url();?>noticias/simce.php" class="btn btn-primary">Leer mas &rarr;</a>
                        
                    </div>
                    <div class="card-footer text-muted">
                        Publicado el 23 de septiembre de 2017, por Ricardo Ortiz
                    </div>
                </div>
                <!-- Blog Post -->
                <div class="card mb-4">
                    
                    <div class="card-body">
                        <h2 class="card-title">Aniversario en la comunidad martiana</h2>
                        
                        <p class="card-text" style="text-indent: 40px;">Durante las primeras semanas de Agosto se celebró el aniversario N°12 de nuestra institución, José Martí Pérez. La alegría, el compromiso y el esfuerzo de toda la comunidad martiana se vio expresada en las actividades de las alianzas azul y verde (colores característicos del colegio). </p>
                        <a href="<?php echo base_url();?>noticias/aniversario.php" class="btn btn-primary">Leer mas &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Publicado el 11 de septiembre de 2017, por Ricardo Ortiz
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="<?php echo base_url();?>noticias/images/face.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Nuevo perfil de facebook</h2>
                        
                        <p class="card-text" style="text-indent: 40px;">El colegio innova y alcanza a la comunidad martiana en las redes sociales. En eso hemos desarrollado un nuevo perfil de Facebook para mantener un mayor contacto con todas y todos quienes integran la institución. Invitamos a agregarnos y compartir nuestras novedades en la siguiente dirección: <a href="https://www.facebook.com/josemartiperezcoquimbo">https://www.facebook.com/josemartiperezcoquimbo</a>
                        </p>
                        
                    </div>
                    <div class="card-footer text-muted">
                        Publicado el 11 de septiembre de 2017, por Ricardo Ortiz
                    </div>
                </div>
                <!-- Blog Post -->
                <div class="card mb-4">
                    
                    <div class="card-body">
                        <h2 class="card-title">Actividades para la prevención del acoso escolar</h2>
                        
                        <p class="card-text" style="text-indent: 40px;">La prevención del acoso escolar es fundamental en nuestro colegio. Se han desarrollado distintas actividades preventivas como charlas, afiches y actividades para padres. En esa línea, el colegio está impulsando, en conjunto con la ATE (Asistencia de Técnica Educativa) High Competence el taller “Actividad educativa para la prevención del acoso escolar”, que fomenta el estudio de distintas aristas de esta situación.</a>
                        </p>
                        <a href="<?php echo base_url();?>noticias/prevencion.php" class="btn btn-primary">Leer mas &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Publicado el 11 de septiembre de 2017, por Ricardo Ortiz
                    </div>
                </div>
                <!-- Blog Post 
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2017 by <a href="#">Start Bootstrap</a>
                    </div>
                </div>-->

                

                <!-- Pagination                 <ul class="pagination justify-content-center mb-4">
                    <li class="page-item"><a class="page-link" href="#">ver mas noticias</a></li>
                    
                </ul>
-->

            </div>

            <!-- Sidebar Widgets Column -->
            <?php gatget();  ?>

        </div>
        <!-- /.row -->

              
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5" style="background: #64a734">
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