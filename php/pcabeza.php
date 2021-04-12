<?php
include_once('conexion.php');
include_once('query.php');

if (isset($_SESSION['estudianteid'])) {
    $vUsuario = $_SESSION['estudianteid'];
   
} else {
    $_SESSION['mensajeTexto'] = "Error, Acceso al sistema no registrado";
    $_SESSION['mensajeTipo'] =  "is-danger";
    header('Location:./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilos de Bulma -->
    <link rel="stylesheet" href="../bulma/css/bulma.min.css">
    <!-- Estilos Fontawesome -->
    <link rel="stylesheet" href="./librery/fontawesome/css/all.min.css">
    <!-- animaciones  -->


    <title>Proyecto final</title>
</head>


<body>
    <!--BARRA DE MENU -->
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="./img/logo1.png" alt="Logo" width="38" height="3
                8">
            </a>
            <div class="navbar-burger" data-target="navbarBasicExample" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <p class="control">
                        <a class="button is-danger" href="./php/cerrar.php">
                            <span class="icon">
                                <i class="fab fa-download" ></i>
                            </span>
                            <span>  <i class="fas fa-sign-out-alt"  ></i> Cerrar sesion </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <!-- CABEZA  -->
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title" >
                PROYECTO FINAL DE PROGRAMACION 2
            </p>
            <p class="subtitle">
                TO-DO PROFESOR- ESTUDIANTES
            </p>
        </div>
    </section>

    <!-- CUERPO  -->
    <section class="section">
        <div class="columns is-multiline is-mobile">
            <div class="column is-one-quarter">

                <!--Menu -->
                <aside class="menu">
                    <p class="menu-label">
                        <i class="fas fa-bars"></i> Menú de Acciones
                    </p>
                    <ul class="menu-list">
                        <li> <a href="./desarrollo/profesor_mant.php"><i class="fas fa-user-edit"></i> Agregar o Editar
                                Profesores </a>
                        </li>
                        <li><a href="./desarrollo/estudiante_mant.php"><i class="fas fa-user-edit"></i> Agregar o Editar
                                Estudiantes</a></li>
                        <li><a href="./desarrollo/tarea_mant.php"><i class="fas fa-user-edit"></i> Agregar o Editar
                                Tareas</a></li>
                    </ul>
                </aside>
            </div>
</body>