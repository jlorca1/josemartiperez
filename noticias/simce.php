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
        
        <h1 style="margin-top: 20px">Evaluación SIMCE</h1>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <img class="img-fluid rounded" src="public/images/comunidad.jpg" alt="">

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-calendar" aria-hidden="true"></i> Publicado el 23 de septiembre de 2017, por Ricardo Ortiz</p>

                <hr>
                <p style="text-indent: 40px;">Como cada año entre los meses de Octubre y Noviembre, La Agencia de  Calidad de la Educación aplica instrumentos de evaluación que permite que la comunidad martiana avance en su trayectoria de mejorías escolares.</p>
                <p style="text-indent: 40px;">Esta institución aplica a nivel nacional un instrumento que considera en su primera etapa a los Indicadores de Desarrollo Personal y Social IDPS, que considera los aspectos no académicos, tales como: Autoestima y motivación escolar, clima de convivencia escolar, participación y formación ciudadana, hábitos de vida saludable, entre otros. </p>
                     <p style="text-indent: 40px;">También se aplica la evaluación del Sistema Nacional de Evaluación SIMCE que evalúa los logros de aprendizaje entre las asignaturas de Lenguaje y Comunicación (Profesor Danny Olivares) y Matemáticas (Profesora Catalina ), y este año adicionalmente Ciencias Naturales (Profesor Cristián Moore).</p>
                    <p style="text-indent: 40px;">Las fechas de aplicación según el nivel son los siguientes:</p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          
                          <th>Nivel a evaluar</th>
                          <th>Área</th>
                          <th>Fecha de aplicación</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td>4° Básico</td>
                          <td>Lenguaje y comunicación</td>
                          <td>07 - 08 de Noviembre</td>
                        </tr>
                        <tr>
                          
                          <td>8° Básico</td>
                          <td>Matemáticas</td>
                          <td>11 - 12 de Octubre</td>
                        </tr>
                    </tbody>
                </table>

                <p style="text-indent: 40px;">Esperamos el esfuerzo y compromiso de todos y todas para alcanzar un alto nivel en cada una de las áreas a evaluar.</p>

                <p style="text-indent: 40px;">Para más información puede visitar el portal: <a href="http://www.agenciaeducacion.cl/"> http://www.agenciaeducacion.cl/</a></p>

                

                    
                    
                    

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
