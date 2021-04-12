<?php
try {
    //code...
    include_once("../php/conexion.php");
    if (!empty($_GET['accion'])) {
        $opcion = $_GET['accion'];
    } else {
        
        session_start();
        $_SESSION['mensajeTexto'] = "Advetencia: Accion realizada no permitida";
        $_SESSION['mensajeTipo'] = "is-warning";
        header("Location: ./profesor_mant.php");
    }
    //CRUD - INS - DLT - UDT
    switch ($opcion) {
        case 'INS':
            if(isset($_POST['guardar'])){
                $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['email'],       FILTER_SANITIZE_STRING);
                $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
               

                $query = "
                INSERT INTO `profesor`(`nombre`, `apellido`, `email`, `password`, `estado`) VALUES ('$username', '$apellido', '$email', '$password', 'activo')";

                
            } 
            $resultado = mysqli_query($link, $query);
            if (!$resultado) {
                $_SESSION['mensajeTexto'] = "Error Insertando el Registro";
                $_SESSION['mensajeTipo'] = "is-warning";
                header("Location: ./profesor_mant.php");
                # code...
            } else {
                $_SESSION['mensajeTexto'] = "Registro Almacenado con Exito";
                $_SESSION['mensajeTipo'] = "is-success";
                header("Location: ./profesor_mant.php");
                # code...
            }
            //cerramos conexion 
            mysqli_close($link);
            break;
 default:
            
            $_SESSION['mensajeTexto'] = "Advetencia: Accion realizada no permitida";
            $_SESSION['mensajeTipo'] = "is-warning";
            header("Location: ./profesor_mant.php");
            break;
    }
} catch (Exception $e) {
    //throw $th;
    print "Exception no controlada 01:" . $e->getMessage();
    Print "Estamos trabajando para arreglar la situacion";
} catch (Error $e) {    
    print "Exception no controlada: 01" . $e->getMessage();
    Print "Estamos trabajando para arreglar la situacion";
}