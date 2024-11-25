<?php

/**
 * Summary of generarCabecera
 * @param mixed $rutaImg la ruta de la imagen del logo 
 * @param mixed $inicioEnlacePaginas la parte de la ruta relativa que va a cambiar en funcion de la carpeta que estemos
 * @param mixed $inicioRutaIndex la parte de la ruta relativa del index en funcion de donde estemos ya que va a ser diferente a la de las paginas
 * @return void no devuelve nada es un echo
 */

function generarCabecera($rutaImg,$inicioEnlacePaginas,$inicioRutaIndex){
    echo"
    <div id='contenedorPadre'>
    <header>
        <div class='fondo'></div>
        <a href='$inicioRutaIndex"."index.php' id='logo-sticky'><img src='$rutaImg' alt='logo'></a>
        <h1>SHIN JUDO</h1>
        <h2>柔道</h2>
    </header>
        <nav>
            <ul id='login'>
                <li><a href='$inicioEnlacePaginas"."log.php'>Log</a></li>
                <li><a href='$inicioEnlacePaginas"."sign.php'>Sign Up</a></li>
            </ul>
            <a href='$inicioRutaIndex"."index.php' class='oculto' id='logo'><img src='$rutaImg' alt='logo' class='oculto'></a>
           
            <div id='listas'>
                <ul>
                    <li><a href='$inicioRutaIndex"."index.php'>Home</a></li>
                    <li><a href='$inicioEnlacePaginas"."socios.php''>Socios</a></li>
                    <li><a href='$inicioEnlacePaginas"."servicios.php''>Servicios</a></li>
                    <li><a href='$inicioEnlacePaginas"."testimonios.php''>Testimonios</a></li>
                    <li><a href='$inicioEnlacePaginas"."noticias.php''>Noticias</a></li>
                    <li><a href='$inicioEnlacePaginas"."citas.php''>Citas</a></li>
                </ul>
                <ul>
                    <li><a href='$inicioEnlacePaginas"."log.php'>Log</a></li>
                        <li>||</li>

                    <li><a href='$inicioEnlacePaginas"."sign.php'>Sign Up</a></li>
                </ul>
            </div>
            
    </nav>";
}

/**
 * Summary of generarFooter
 * simplemente un eco que genera el footer y cierra el div
 * @return void
 */
function generarFooter(){
    echo "  <footer>
                <h3>Web creada por Alejandro Molina || @Judokamolina</h3>
            </footer>
        </div>";
}

/**
 * Summary of generarNoticias
 * @param mixed $noticias el array asociativo donde hemos guardado todos los datos de las noticias
 * @return void echo del div de noticias
 */
function generarNoticias($noticias,$paginaVermas){ 
    foreach ($noticias as $noticia) {
        echo "<div class='noticias '>
            <h2 class='tituloNoticia'>$noticia[titulo]</h2>
            <img src='$noticia[imagen]'>
            <p>$noticia[fecha]</p>
            <p>".substr($noticia['contenido'],0,100)."...</p>
            <a class='verMas' href='$paginaVermas?titulo=$noticia[titulo]&imagen=$noticia[imagen]&fecha=$noticia[fecha]&contenido=$noticia[contenido]'>Ver mas</a>
        </div>";
    }
}

function generarNoticia($paginaVolver){
    $titulo=$_GET['titulo'];
    $imagen=$_GET['imagen'];
    $fecha=$_GET['fecha'];
    $contenido=$_GET['contenido'];
    echo "<div class='noticia'>
            <h2 class='tituloNoticia'>$titulo</h2>
            <img src='$imagen'>
            <p>$fecha</p>
            <p>$contenido</p>
            <a class='volver' href='$paginaVolver'>Ir a noticias</a>
        </div>";
}

function generarFormSocio(){
    echo"
    <form id='añadirSocioForm' class='formulario' method='POST' action='../respuestas/respuestaSocios.php'>
        <label><input type='file' name='foto' id='foto'>Imagen Usuario</label>
        <span class='error' id='error-foto'></span>
        <input type='text' name='nombre' id='nombre' placeholder='Nombre Completo'>
        <span class='error' id='error-nombre'></span>
        <input type='text' name='usuario' id='usuario' placeholder='Usuario'>
        <span class='error' id='error-usuario'></span>
        <input type='text' name='telefono' id='telefono' placeholder='Telefono'>
        <span class='error' id='error-telefono'></span>
        <input type='text' name='edad' id='edad' placeholder='Edad'>
        <span class='error' id='error-edad'></span>
        <div class='campo' id='campo1'>
            <input type='password' name='contraseña' id='contraseña' placeholder='Contraseña'>
            <span class='error' id='error-contraseña'></span>
            <span id='mostrar1'><img src='../../assets/esconder.png'></span>
        </div>
        <div class='campo' id='campo2'>
            <input type='password' name='confirmarContraseña' id='confirmarContraseña' placeholder='Confirmar Contraseña'>
            <span class='error' id='error-confirmarContraseña'></span>
            <span id='mostrar2'><img src='../../assets/esconder.png'></span>
        </div>
        
        <input type='submit'></input>
    </form>
    ";
}

function generarFormTestimonios(){
    echo"
    <form id='añadirTestimonioForm' class='formulario' method='POST' action='../respuestas/respuestaTestimonio.php'>
        <textarea name='contenido' id='contenido' placeholder='Contenido'></textarea>
        <span id='error-contenido' id='error-contenido' class='error'></span>
        <input type='submit'>
    </form>
    ";
}

function generarFormNoticia(){
    echo"
    <form id='añadirNoticiaForm' class='formulario' method='POST' action='../respuestas/respuestaNoticia.php'>
        <input type='text' name='titulo' id='titulo' placeholder='Titular'>
        <span id='error-titulo' name='error-titulo' class='error'></span>
        <textarea name='contenido' id='contenido' placeholder='Contenido'></textarea>
        <span id='error-contenido' name='error-contenido' class='error'></span>
        <label><input type='file' name='foto' id='foto'>Imagen Noticia</label>
        <span id='error-foto' name='error-foto' class='error'></span>
        <input type='text' name='fecha' id='contenido' placeholder='Fecha'>
        <span id='error-fecha' name='error-fecha' class='error'></span>

        <input type='submit'>
    </form>
    ";
}

function generarFormServicios(){
    echo"
    <form id='añadirServiciosForm' class='formulario' method='POST' action='../respuestas/respuestaservicios.php'>
        <input type='text' name='descripcion' id='descripcion' placeholder='Descripcion'>
        <span class='error' id='error-descripcion'></span>
        <input type='text' name='duracion' id='duracion' placeholder='Duracion'>
        <span class='error' id='error-duracion'></span>
        <input type='text' name='precio' id='precio' placeholder='Precio'>
        <span class='error' id='error-precio'></span>
        <input type='submit'>
    </form>
    ";
}

/**
 * Summary of generarTestimonio
 * @param mixed $testimonios array asociativo donde se guardan todos los datos de las noticias
 * @return void echo de los datos de los testimonios
 */
function generarTestimonio($testimonios){
    
    foreach ($testimonios as $testimonio) {
        echo "<div class='testimonios'>
            <h2 class='tituloTestimonio'>$testimonio[nombre]</h2>
            <p>$testimonio[fecha]</p>
            <p>$testimonio[contenido]</p>
        </div>";
    }
}

/**
 * Summary of generarSocios
 * @param mixed $arrayTabla el array de una tabla con todos los datos
 * @param mixed $rutaFoto ruta de la foto del socio
 * @return void echo de los datos del socio
 */
function generarSocios($arrayTabla){
    
    foreach ($arrayTabla as $datosTabla) {

        echo"
            <div class='socios'>
                <img src='../../assets/$datosTabla[foto]'><hr>
                <h2 class='tituloTestimonio'>$datosTabla[nombre]</h2>
                <div id='datos-socios'>
                    <p><span>Usuario:</span> $datosTabla[usuario]</p>
                    <p><span>Edad:</span> $datosTabla[edad]</p>
                    <p><span>Telefono:</span> $datosTabla[telefono]</p>
                </div>
                <a href='modificarSocios.php?foto=$datosTabla[foto]&nombre=$datosTabla[nombre]&usuario=$datosTabla[usuario]&edad=$datosTabla[edad]&telefono=$datosTabla[telefono]'>Modificar</a>
            </div>";

    }
}

function generarServicios($arrayTabla){
    
    foreach ($arrayTabla as $datosTabla) {
        echo "
            <div class='servicios'>
                <h3 class = 'titulo-servicios'>$datosTabla[descripcion]</h3>
                <p>Duracion:$datosTabla[duracion]mins.</p>
                <p>Coste:$datosTabla[precio]€.</p>
            
            </div>
        
        ";
    
    }
}


/*###############################################################################################################################################################################*/ 
//**BD CON SQL*/



/**
 * Summary of conectar
 * En la carpeta sql esta el script de la bd para tenerla en local.
 * @param mixed $host el host de la bd en servidor
 * @param mixed $usuario el usuario de la bd en servidor
 * @param mixed $password la contraseña de la bd en servidor
 * @param mixed $base_datos el nombre de la bd en servidor
 * @param mixed $host2 el host de la bd en local 
 * @param mixed $usuario2 el usuario de la bd en local
 * @param mixed $password2 la contraseña  de la bd en local
 * @param mixed $base_datos2 el nombre de la bd en local
 * @return mysqli devuelve la conexion a la base de datos
 */
function conectar($host,$usuario,$password,$base_datos){
    $conexion = new mysqli($host, $usuario, $password, $base_datos);
    $conexion->set_charset('utf8');
    return $conexion;
}

/**
 * Summary of todoTabla
 * @param mixed $conexion La conexion de la bd
 * @param mixed $tabla nombre de la tabla que se hace la consulta
 * @return array|string devuelve un array asociativo con los datos de la tabla
 */
function todoTabla($conexion,$tabla){
    $consulta = "SELECT * FROM $tabla;";
    $resultado = $conexion->query($consulta);  
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $arrayTabla[] = $fila;
        }
        return $arrayTabla;
    } else {
        return  'No hay socios';
    }
}

/**
 * Summary of numFilasTablas
 * @param mixed $nombreTabla nombre de la tabla
 * @param mixed $atributo atributo de la tabla que deseamos contar
 * @param mixed $conexion conexion a la bd
 * @return mixed devuelve la posicion cero de un array que contiene el total de datos de ese atributo
 */
function numFilasTablas($nombreTabla, $atributo, $conexion) {
    $consulta = "SELECT COUNT($atributo) AS total FROM $nombreTabla ;";
    $resultado = $conexion->query($consulta);
    $fila = $resultado->fetch(); 
    return $fila[0]; 
}

/**
 * Summary of noticiasTres
 * @param mixed $conexion conexion a la bd
 * @return array devuelve un array asociativo con las tres ultimas noticias publicadas
 */
function noticiasTres($conexion){
    $consulta = 'SELECT * FROM noticia ORDER BY fecha DESC LIMIT 3';
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
    return $noticias = [];
}

/**
 * Summary of testimonioRand
 * @param mixed $conexion conexion a la bd
 * @return array devuelve un array asociativo con los datos de un testimonio random
 */
function testimonioRand($conexion){
    $consulta = 'SELECT * from testimonio,socio where id_socio=socio.id ORDER BY RAND() limit 1;';
    $resultado = $conexion->query($consulta);  
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $testimonios[] = $fila;
        }
        return $testimonios;
    }
    else{
        echo"No se ha echo la funcion testimonio";
    }
    return $testimonios = [];
}

function testimonio($conexion){
    $consulta = 'SELECT * from testimonio,socio where id_socio=socio.id';
    $resultado = $conexion->query($consulta);  
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $testimonios[] = $fila;
        }
        return $testimonios;
    }
    else{
        echo"No se ha echo la funcion testimonio";
    }
}   

function insertSocios($conexion){
    $nombre=$_POST['nombre'];
    $foto=$_POST['foto'];
    $usuario=$_POST['usuario'];
    $telefono=$_POST['telefono'];
    $edad=$_POST['edad'];
    $contraseña=$_POST['contraseña'];
    $sql="SELECT * from socio where usuario='$usuario' or telefono='$telefono'";
    $resultado=$conexion->query($sql);
    if($resultado->num_rows===0){
        $sql="INSERT INTO socio (nombre,edad,contraseña,usuario,telefono,foto) values (?,?,?,?,?,?)";
        $resultado=$conexion->prepare($sql);
        $resultado->bind_param("sissss",$nombre,$edad,$contraseña,$usuario,$telefono,$foto);
        $resultado->execute();
        echo"<h2>Insertando socio. Redirigiendo en 3s...</h2>";
        header("refresh:2;url=../pg/socios.php");
    }
    else{
        echo"<h2>Ya hay un socio con ese USUARIO o  TELEFONO</h2>";
        header("refresh:2;url=../formularios/addSocio.php");

    }

    
}

function insertTestimonio($conexion){
    $contenido=$_POST['contenido'];
    $id_socio=1;
    $fecha=date('Y-m-d'); 
    $sql="INSERT INTO testimonio (id_socio,contenido,fecha) values (?,?,?)";
    $consulta=$conexion->prepare($sql);
    $consulta->bind_param("iss",$id_socio,$contenido,$fecha);
    $consulta->execute();
}

function insertNoticia($conexion){
    $contenido=$_POST['contenido'];
    $fecha=$_POST['fecha'];
    $titulo=$_POST['titulo'];
    $imagen=$_POST['imagen'];
    $sql="INSERT INTO noticia (titulo,contenido,imagen,fecha) values (?,?,?,?)";
    $consulta=$conexion->prepare($sql);
    $consulta->bind_param("ssss",$titulo,$contenido,$imagen,$fecha);
    $consulta->execute();
}

function insertServicio($conexion){
    $descripcion=$_POST['descripcion'];
    $duracion=$_POST['duracion'];
    $precio=$_POST['precio'];
    $sql="INSERT INTO servicio (descripcion,duracion,precio) values (?,?,?)";
    $consulta=$conexion->prepare($sql);
    $consulta->bind_param("sii",$descripcion,$duracion,$precio);
    $consulta->execute();
}


function updateSocios($conexion){
}




