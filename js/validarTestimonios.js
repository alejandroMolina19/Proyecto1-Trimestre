"use strict"

let formularioTestimonios = document.getElementById('añadirTestimonioForm');

formularioTestimonios.addEventListener('submit', (e) => {
    let contenido=document.getElementById('contenido');
    let valorContenido=contenido.value.trim();
    let error_contenido=document.getElementById('error-contenido');
    if (valorContenido==="") { // 5 MB
        e.preventDefault();
        error_contenido.innerText = '⚠️ No puedes dejar vacio el contenido.';
    }
    else{
    error_contenido.innerText = '✅';

    }

});