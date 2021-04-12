<?php

function validarUsuarios($link, $user, $pass )
{

    $query = "SELECT * FROM `estudiante` WHERE  `email` = '$user'  AND `password` ='$pass' AND  `estado` = 'activo'";
    $resultado = mysqli_query($link, $query);

       if (mysqli_num_rows ($resultado) == 1) {
            $row =$resultado->fetch_assoc();
            $_SESSION['mensajeTexto'] = null;
            $_SESSION['mensajeTipo'] =  null;

            $_SESSION['estudianteid'] = $row['estudianteid'];
            header("Location: pbody.php");

    } else {
        
        $query2 = "SELECT * FROM `profesor` WHERE  `email` = '$user'  AND `password` ='$pass' AND  `estado` = 'activo'";
        $resultado2 = mysqli_query($link, $query2);
        if (mysqli_num_rows ($resultado2) ==1 ) {
            $row =$resultado2->fetch_assoc();
            $_SESSION['mensajeTexto'] = null;
            $_SESSION['mensajeTipo'] =  null;

            $_SESSION['profesorid'] = $row[`profesorid`];
            header("Location: pbody.php");
        }else {
            $_SESSION['mensajeTexto'] = "Error validando datos de de usuario";
            $_SESSION['mensajeTipo'] =  "is-danger";}

    

    
}
}

function mostrarTipos($link)
{

    $query = "SELECT * FROM `estudiante`";
    $resultado = mysqli_query($link, $query);

    return $resultado;     
    
}

function consultarTipos($link, $id)
{

    $query = "SELECT * FROM `estudiante` WHERE `estudianteid` = '$id'";
    $resultado = mysqli_query($link, $query);
  
    if (mysqli_num_rows ($resultado) == 1) {
        $row =mysqli_fetch_array($resultado);
        return $row;
      
    } else {
        $_SESSION['mensajeTexto'] = "Error consultando Datos -> consultarTipos";
        $_SESSION['mensajeTipo'] =  "is-danger";
        header("Location: ../index.php");
    }
    
    
}
function mostrarProfesor($link)
{

    $query = "SELECT * FROM `profesor`";
    $resultado = mysqli_query($link, $query);

    return $resultado;     
    
}

function mostrarTareas($link)
{

    $query = "SELECT * FROM `tarea`";
    $resultado = mysqli_query($link, $query);

    return $resultado;     
    
}




