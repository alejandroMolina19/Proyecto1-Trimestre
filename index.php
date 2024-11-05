<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shin Judo</title>
    <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/estilosGenerales.css">
    <link rel="stylesheet" href="style/estilos-index.css">
</head>
<body>
    
    <?php
    require_once("sql/config.php");
    require_once 'php/functions.php';
    $conexion=conectar($nombre_host,$nombre_usuario,$password_db,$nombre_db);
    generarCabecera("assets/logo.png");
    ?>

    <section id="noticias-index">
        <?php
            $noticias=noticias($conexion,1);
            generarNoticias($noticias);
        ?>
    </section>

    <?php
        generarFooter();
    ?>    
    
</body>
</html>