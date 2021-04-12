<!-- INYENDO EL ARCHIVO PCABEZA EN PCUERPO-->
<?php
include_once('../php/pcabeza.php');
$resultado= mostrarTareas($link);
?>

<!-- Estilos Fontawesome -->
<link rel="stylesheet" href="../librery/fontawesome/css/all.min.css">

<!-- BARRA DE NAVEGACION -->
<div class="column is-half">
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li>
                <a href="../pbody.php">
                    <span class="icon is-small">
                        <i class="fas fa-home" aria-hidden="true"></i>
                    </span>
                    <span>Inicio</span>
                </a>

            </li>
            <li>
                <a href="">
                    <span class="icon is-small">
                        <i class="fas fa-user-edit" aria-hidden="true"></i>
                    </span>
                    <span>Agregar o Editar Tareas </span>
                </a>
            </li>
    </nav>


    <!-- TITULOS Y SUBTITULOS -->
    <div class="block">
        <h1 class="title">Acciones del Administrador</h1>
        <h1 class="subtitle">Agregar o Editar Nuevas Tareas</h1>
    </div>

    <!-- Alerta -->
    <?php 
    if (!empty($_SESSION['mensajeTexto'])) { ?>
    <div class="block">
        <div class="container">
            <div class="notification <?php echo $_SESSION['mensajeTipo']?>">
                <button class="delete"></button>
                <?php echo $_SESSION['mensajeTexto']?>
            </div>
        </div>
    </div>
    <?php 
    session_destroy();
        $_SESSION['mensajeTexto'] = "null";
        $_SESSION['mensajeTipo'] = "null";
        

    } 
    ?>

    <!-- CUERPO DE PAGINA -->
    <div class="block">
        <div class="columns">
            <div class="column is-5">
                <form action="tarea_crud.php?accion=INS" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    <div class="field">

        
                        <label class="label">Titulo</label>
                        <div class="control">
                            <input class="input" type="text" name="titulo" id="titulo" placeholder=""
                                required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Asignacion</label>
                        <div class="control">
                            <input class="input" type="text" name="asignacion" id="asignacion"
                                placeholder="" required>
                        </div>
                    </div>
                    <!-- <div class="field">
                        <label class="label">Contenido</label>
                        <div class="control">
                            <input class="input" type="text" name="contenido" id="contenido" placeholder=""
                                required>
                        </div>
                    </div> -->
                    <div class="field">
                        <label class="label">Fecha de Entrega</label>
                        <div class="control">
                            <input class="input" type="text" name="fecha" id="fecha" placeholder="2020-04-12"
                                required>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <p class="control">
                            <input class="button is-primary" type="submit" value="Guardar" name="guardar">
                        </p>
                        <p class="control">
                            <input class="button is-light" type="reset">
                        </p>
                    </div>
                </form>
                <!-- </div> -->

            </div class="column is-7">
            <div class="table-container">
                <table class="table is-fullwidth">
                    <thead>
                        <th>Nombre</th>
                        <th>Asignacion</th>
                        <th>Contenido</th>
                        <th>Fecha entrega</th>
                        <th>Estado de la tarea</th>
                        <th>Estado</th>
                    </thead>
                    <tbody>
                        <?php 
                        while($row= mysqli_fetch_array($resultado, MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['asignacion']?></td>
                            <td><?php echo $row['contenido']?></td>
                            <td><?php echo $row['fecha_entrega']?></td>
                            <td><?php echo $row['estado_tarea']?></td>
                            <td><?php echo $row['estado']?></td>
                        
                        
                        </td>
                            <td> <a class="button is-info" data-taggle="tooltip" data-placement="top" title="Editar"
                                    href="
                                     = <?php echo $row['tareaid'] ?>"> <i class="fas fa-edit"></i> </a> </td>
                            <td> <a class="button is-danger" data-taggle="tooltip" data-placement="top" title="Anular"
                                    href="tarea_crud.php?accion=DLT%id = <?php echo $row['tareaid'] ?>"> <i
                                        class="fas fa-trash"></i> </a> </td>
                        </tr>

                        <?php
                       }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>



</div>
</section>


<!-- PIES DE PAGINA O FOOTER -->
<footer class="footer">
    <div class="content has-text-centered">
        <p>
            <strong>Realizado Por :</strong> <a href="https://www.instagram.com/leudys_batista_28/?hl=es-la"><i
                    class="fas fa-user"></i> Leudys
                Batista </a>.
        </p>
    </div>
</footer>

</body>

</html>