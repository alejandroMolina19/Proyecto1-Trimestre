<?php
function generarCabecera($ruta){
    echo"
    <div id='contenedorPadre'>
    <header>
        <div class='fondo'></div>
        <img src='$ruta' alt='logo'>
        <h1>SHIN JUDO</h1>
        <h2>柔道</h2>
    </header>
        <nav>
                <ul id='login'>
                    <li><a href=''>Log</a></li>
                    <li><a href=''>Sign Up</a></li>
                </ul>
           
            <ul>
                <li><a href=''>Home</a></li>
                <li><a href=''>Socios</a></li>
                <li><a href=''>Servicios</a></li>
                <li><a href=''>Testimonios</a></li>
                <li><a href=''>Noticias</a></li>
                <li><a href=''>Citas</a></li>
            </ul>
            <ul>
                <li><a href=''>Log</a></li>
                    <li>||</li>

                <li><a href=''>Sign Up</a></li>
            </ul>
    </nav>";
}

function generarFooter(){
    echo "<footer>
    <h3>Web creada por Alejandro Molina || @Judokamolina</h3>
</footer>
</div>";
}

//**BD CON SQL*/
function conectar($host,$usuario,$password,$base_datos){
    $conexion = new mysqli($host, $usuario, $password, $base_datos);
    $conexion->set_charset('utf8');
    return $conexion;
}


function numFilasTablas($nombreTabla, $atributo, $conexion) {
    $consulta = "SELECT COUNT($atributo) AS total FROM $nombreTabla ;";
    $resultado = $conexion->query($consulta);
    $fila = $resultado->fetch(); 
    return $fila[0]; 
}

function noticias($conexion,$cambio){
    if($cambio===1){
        $consulta = 'SELECT * FROM noticia ORDER BY fecha DESC LIMIT 3';
    }
    elseif($cambio===2){
        $consulta = 'SELECT * FROM noticia';
    }
    else{
        echo"Mal pasado el parametro cambio de la funcion.";
    }
    $resultado = $conexion->query($consulta);  
    if ($resultado->num_rows > 0) {
        $noticias = [];
        while ($fila = $resultado->fetch_assoc()) {
            $noticias[] = $fila;
        }
        return $noticias;
    } else {
        echo"No hay ninguna noticia en la bd.";
    }
}

function generarNoticias($noticias){
    foreach ($noticias as $noticia) {
        echo "<div class='noticias'>
            <h2 class='tituloNoticia'>$noticia[titulo]</h2>
            <img src='$noticia[imagen]'>
            <p>$noticia[fecha]</p>
            <p>$noticia[contenido]</p>
        </div>";
    }
}



