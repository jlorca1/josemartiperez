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

    <title>Cuerpo docente</title>

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
        
        <h1 style="margin-top: 20px">Cuerpo docente</h1>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                

                <hr>

                <!-- Date/Time -->
                <p>Publicado el 5 de Septiembre</p>

                <hr>

                    <table class="table table-sm">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Nombre</th>
                              <th>Cargo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Alfonsina Moyano Bugueño  </td>
                              <td>Asistente de Aula 2° Básico</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Sandra Rosa Gajardo </td>
                              <td>Inspectora 1 Ciclo</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Patricia Pasten Garcia  </td>
                              <td>Inspectora de Patio</td>
                            </tr>
                            <tr>
                              <th scope="row">6</th>
                              <td>Ivonne Ortega Diaz  </td>
                              <td>Auxiliar de Aseo</td>
                            </tr>
                            <tr>
                              <th scope="row">7</th>
                              <td>Fernando Gomez Ramos </td>
                              <td>Auxiliar de Aseo</td>
                            </tr>
                            <tr>
                              <th scope="row">8</th>
                              <td>Macarena Saldivar Cartes  </td>
                              <td>Encargada Bibliotecas CRA</td>
                            </tr>
                            <tr>
                              <th scope="row">9</th>
                              <td>Angela Carmona Aguilar  </td>
                              <td>Encargada Bibliotecas CRA - PAE 2017</td>
                            </tr>
                            <tr>
                              <th scope="row">10</th>
                              <td>Maryory Montecinos Opazo  </td>
                              <td>Secretaria Adminitrativa - Encargada de Mantencion</td>
                            </tr>
                            <tr>
                              <th scope="row">11</th>
                              <td>Andrea Gallardo Contreras  </td>
                              <td>Coordinadora SEP</td>
                            </tr><tr>
                              <th scope="row">12</th>
                              <td>Adela Opazo Rojas </td>
                              <td>Fotocopia</td>
                            </tr><tr>
                              <th scope="row">13</th>
                              <td>Carlos Zuleta Jimenez s</td>
                              <td>Encargado Finanza</td>
                            </tr><tr>
                              <th scope="row">14</th>
                              <td>Ana Rojas Castillo  </td>
                              <td>Inspectora 2° Ciclo</td>
                            </tr><tr>
                              <th scope="row">15</th>
                              <td>Loreto Zuñiga Muncada </td>
                              <td>Asistente de Aula Pre-escolar</td>
                            </tr>

                          </tbody>
                        </table>
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
