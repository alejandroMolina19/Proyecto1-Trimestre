<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style/estilosGenerales.css">
    <link rel="stylesheet" href="../../style/estilos-formularios.css">
    
</head>
<body>
<?php
        require_once("../../sql/config.php");
        require_once '../../php/functions.php';
        
        $conexion=conectar($nombre_host,$nombre_usuario,$password_db,$nombre_db);
        generarCabecera("../../assets/logo.png","../pg/","../../");
    ?>

    <section id="respuestaSocio">
        <?php
           insertSocios($conexion);
           echo"<h2>Insertando socio. Redirigiendo en 3s...</h2>";
           header("refresh:2;url=../pg/socios.php");
        ?>
    </section>

    <?php
        generarFooter();
    ?>    
</body>
</html>