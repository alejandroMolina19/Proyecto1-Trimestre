<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shin Judo</title>
    <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/estilosGenerales.css">
    <link rel="stylesheet" href="style/estilos-index.css">
    <script src="js/app.js" defer></script>
    
</head>
<body>
    
    <?php
        require_once './sql/config.php';
        require_once './php/functions.php';
        $conexion=conectar($nombre_host,$nombre_usuario,$password_db,$nombre_db);
        generarCabecera("assets/logo.png","paginas/pg/","");
    ?>

    <section id="noticias-index">
        <?php
            $noticias=noticiasTres($conexion);
            echo"<a id='botonAtrasIndex'><img src='assets/atras.png'></a>";
            generarNoticias($noticias,'paginas/pg/noticia.php');
            echo"<a id='botonAdelanteIndex'><img src='assets/proximo.png'></a>";

        ?>
    </section>
    <section id="testimonios-index">
        <?php
            $testimonios=testimonioRand($conexion);
            generarTestimonio($testimonios);
        ?>
    </section>

    <?php
        
        generarFooter();
    ?>    
    
</body>
</html>