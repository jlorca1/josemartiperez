<?php 

function nav(){
?>
<style type="text/css">
    @media (max-width: 370px) {
    .logo_jose {
        display: none;
    }
}

</style>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top " style="background: #11237b">
        <a class="navbar-brand" href="<?php echo base_url();?>index.php"><img class="logo_jose" src="<?php echo base_url();?>public/images/colegio-1.png" alt="" width="35" style="float: left; margin-right: 10px; margin-top: -2px; ">Colegio José Martí Pérez</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>index.php">Inicio</a>
                </li>
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Colegio
                        </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="<?php echo base_url();?>presentacion.php">Presentación</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>mision_vision.php">Misión y Visión</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>perfil_alumno.php">Perfil Alumno</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>resena.php">Reseña Historica</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>proyecto.php">Proyecto Educativo</a>

                        <a class="dropdown-item" href="<?php echo base_url();?>comunidad.php">Comunidad Martiana</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dirección
                        </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="<?php echo base_url();?>directora.php">Directora</a>
                        <!--<a class="dropdown-item" href="cuerpo_directivo.php">Cuerpo directivo</a>-->
                        <a class="dropdown-item" href="<?php echo base_url();?>organigrama.php">Organigrama</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>asistente.php">Personal Administrativo</a>
                        
                    </div>
                </li>
                
                <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Alumnos
                        </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                         <a class="dropdown-item" href="<?php echo base_url();?>horario1.php">Horario de Clases 1° ciclo</a>
                         <a class="dropdown-item" href="<?php echo base_url();?>horario2.php">Horario de Clases 2° ciclo</a>
                         <a class="dropdown-item" href="<?php echo base_url();?>talleres.php">Talleres Extraescolares</a>
                        
                        
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>docentes.php">Docentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>public/gallery/album.php">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>contact.php">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
}