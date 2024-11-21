// El título y la noticia tienen que tener al menos 3 caracteres.
//  La fecha de publicación tiene que ser una fecha posterior a la actual.
//  La foto de la noticia tiene que ser obligatoriamente formato JPEG y no superar 5MB de
// tamaño.

"use strict"


let formularioNoticias = document.getElementById('añadirNoticiaForm');



// Función para validar el nombre
const validarTituloContenido = () => {
    let titulo = document.getElementById('titulo');
    let contenido = document.getElementById('contenido');

    let error_titulo = document.getElementById('error-titulo');
    let error_contenido = document.getElementById('error-contenido');

    let valorTitulo = titulo.value.trim();
    let valorContenido = contenido.value.trim();


    let exp_reg = /.{3,}/;

    if (!exp_reg.test(valorTitulo) || !exp_reg.test(valorContenido)) {
        error_titulo.innerText = '⚠️ El titulo debe contener al menos 3 caracteres.';
        error_contenido.innerText = '⚠️ La descripcion debe contener al menos 3 caracteres.';
        
        return false;
    } else {
        error_titulo.innerText = '✅';
        error_contenido.innerText = '✅';

        return true;
    }
};




/**
 * !Mirar fechaaa!!!!!!!
 *  */ 

const validarFecha = () => {
    let fecha = document.getElementById('fecha');
    let error_fecha = document.getElementById('error-fecha');
    let valorFecha = fecha.value.trim();
    

    if (putp) {
        error_duracion.innerText = '⚠️ El tiempo minimo son 15 mins';
        return false;
    } else {
        error_duracion.innerText = '✅';
        return true;
    }
};

const validarPrecio = () => {
    let precio = document.getElementById('precio');
    let error_precio = document.getElementById('error-precio');
    let valorPrecio = precio.value.trim();
    

    if (isNaN(valorPrecio) || valorPrecio<=0) {
        error_precio.innerText = '⚠️ El precio minimo son 0€.';
        return false;
    } else {
        error_precio.innerText = '✅';
        return true;
    }
};

let validacionesNoticias = [validarDescripcion, validarTiempo, validarPrecio];

// Asociar validaciones con los campos específicos
document.getElementById('descripcion').addEventListener('input',validarDescripcion);
document.getElementById('duracion').addEventListener('input',validarTiempo);
document.getElementById('precio').addEventListener('input',validarPrecio);


formularioNoticias.addEventListener('submit', (e) => {
    let hayErrores = false;
    for (let validar of validacionesNoticias) {
        if (!validar()) {
            hayErrores = true;
        }
    }
    if (hayErrores) {
        e.preventDefault(); // Detiene el envío si hay errores
    }
});