"use strict"

let formularioServicios = document.getElementById('añadirServiciosForm');

//El nombre del servicio tiene que tener longitud mínimo 3 caracteres y máximo 50
// caracteres.
//  El tiempo en minutos debe ser como mínimo 15.
//  El precio mayor igual de 0.

// Función para validar el nombre
const validarDescripcion = () => {
    let descripcion = document.getElementById('descripcion');
    let error_nombre = document.getElementById('error-descripcion');
    let valorDescripcion = descripcion.value.trim();
    let exp_regDescripcion = /^[a-zA-Z]{3,50}$/;

    if (!exp_regDescripcion.test(valorDescripcion)) {
        error_nombre.innerText = '⚠️ El nombre debe contener solo letras, entre 3 y 50 caracteres.';
        return false;
    } else {
        error_nombre.innerText = '✅';
        return true;
    }
};

const validarTiempo = () => {
    let duracion = document.getElementById('duracion');
    let error_duracion = document.getElementById('error-duracion');
    let valorDuracion = duracion.value.trim();
    

    if (isNaN(valorDuracion) || valorDuracion<=15) {
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

let validacionesServicios = [validarDescripcion, validarTiempo, validarPrecio];

// Asociar validaciones con los campos específicos
document.getElementById('descripcion').addEventListener('input',validarDescripcion);
document.getElementById('duracion').addEventListener('input',validarTiempo);
document.getElementById('precio').addEventListener('input',validarPrecio);


formularioServicios.addEventListener('submit', (e) => {
    let hayErrores = false;
    for (let validar of validacionesServicios) {
        if (!validar()) {
            hayErrores = true;
        }
    }
    if (hayErrores) {
        e.preventDefault(); // Detiene el envío si hay errores
    }
});


