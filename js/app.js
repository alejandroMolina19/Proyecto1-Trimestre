"use strict"

let noticias = document.querySelectorAll(".noticias");
let botonAtras = document.getElementById("botonAtrasIndex");
let botonAdelante = document.getElementById("botonAdelanteIndex");
let i = 0;
botonAdelante.addEventListener("click", () => {
    noticias[i].style.animation = "fadeOutLeft 0.5s ease forwards"; // Añadir duración y efecto
    setTimeout(() => {
        noticias[i].style.display = "none"; // Ocultar después de la animación
        i = (i + 1) % noticias.length;  
        noticias[i].style.display = "flex";
        noticias[i].style.animation = "fadeInRight 0.5s ease forwards"; // Aplicar animación de entrada
    }, 500); // Ajustar el tiempo al mismo valor de la duración de la animación
});

botonAtras.addEventListener("click", () => {
    noticias[i].style.animation = "fadeOutRight 0.5s ease forwards";
    setTimeout(() => {
        noticias[i].style.display = "none";
        i = (i - 1 + noticias.length) % noticias.length;
        noticias[i].style.display = "flex";
        noticias[i].style.animation = "fadeInLeft 0.5s ease forwards";
    }, 500);
});




