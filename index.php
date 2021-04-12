<?php
include_once('php/conexion.php');
include_once('php/query.php');

if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $vUsuario = trim(htmlspecialchars($_POST['username']));
    $vClave = trim(htmlspecialchars($_POST['password']));

    
    validarUsuarios($link, $vUsuario, $vClave); 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos De Bulma-->
    <link rel="stylesheet" href="bulma/css/bulma.min.css">
    <!-- Estilos Fontawesome -->
    <link rel="stylesheet" href="./librery/fontawesome/css/all.min.css">
    <!-- Estilos css -->
    <link rel="stylesheet" href="estilos.css">

    <title>Login Proyecto Final</title>
</head>

<body>
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                PROYECTO FINAL DE PROGRAMACION 2
            </p>
            <p class="subtitle">
                TO-DO PROFESOR- ESTUDIANTES
            </p>
        </div>
    </section>
    <div class="hero ">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-4">
                        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data" autocomplete="off" class="box">
                            <div class="field">
                                <label class="label">
                                    Correo
                                </label>
                                <div class="control has-icons-left">
                                    <input class="input" type="email" id="username" name="username"
                                        placeholder="usuario@gmail.com" require>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Contraseña</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="password"  id="password" name="password"
                                        placeholder="Contraseña" require>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">
                                    <input class="checkbox" type="checkbox" id="recuerdame" name="recuerdame" >
                                    Recuerdame
                                </label>
                            </div>
                            <div class="field ">
                                <button class="button is-link " type="submit" name="ingresar"
                                    value="Ingresar"><strong>Ingresar</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- se muestra si solo exista la sesion -->
                <?php 
                    if (isset($_SESSION['mensajeTexto'])) { ?>
                <footer class="card-footer">
                    <div class="container">
                    <div class="columns is-centered">
                    <div class="column is-4">
                        <div class="notification <?php echo $_SESSION['mensajeTipo']?>">
                            <button class="delete"></button>
                            <?php echo $_SESSION['mensajeTexto']?>
                        </div>
                    </div>
                </footer>
                <?php } ?>
                

            </div>
        </div>
    </div>
    </div>
    </section>

    <!-- PIES DE PAGINA O FOOTER -->
    <section>
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    <strong>Realizado Por :</strong> <a href="https://www.instagram.com/leudys_batista_28/?hl=es-la">
                        Leudys
                        Batista <i class="fab fa-instagram"></i></a>.
                </p>
            </div>
        </footer>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                const $notification = $delete.parentNode;

                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script>

</body>

</html>
