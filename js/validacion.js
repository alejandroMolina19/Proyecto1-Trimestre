"use strict"

let formularioSocios = document.getElementById('añadirSocioForm');

// Función para validar el nombre
const validarNombre = () => {
    let nombre = document.getElementById('nombre');
    let error_nombre = document.getElementById('error-nombre');
    let valorNombre = nombre.value.trim();
    let exp_regNombre = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ]{4,50}$/;

    if (!exp_regNombre.test(valorNombre)) {
        error_nombre.innerText = '⚠️ El nombre debe contener solo letras, entre 4 y 50 caracteres.';
        return false;
    } else {
        error_nombre.innerText = '✅';
        return true;
    }
};

// Función para validar el usuario
const validarUsuario = () => {
    let usuario = document.getElementById('usuario');
    let error_usuario = document.getElementById('error-usuario');
    let valorUsuario = usuario.value.trim();
    let exp_regUsuario = /^[a-zA-Z][a-zA-Z0-9]{4,19}$/;

    if (!exp_regUsuario.test(valorUsuario)) {
        error_usuario.innerText = '⚠️ El usuario debe empezar con una letra y tener entre 5 y 20 caracteres (solo letras y números).';
        return false;
    } else {
        error_usuario.innerText = '✅';
        return true;
    }
};

// Función para validar la edad
const validarEdad = () => {
    let edad = document.getElementById('edad');
    let error_edad = document.getElementById('error-edad');
    let valorEdad = edad.value.trim();
    let exp_regEdad = /[0-9]*/;
    valorEdad=valorEdad.replace('+','');

    if (!exp_regEdad.test(valorEdad) || valorEdad < 18 || isNaN(valorEdad)) {
        error_edad.innerText = '⚠️ La edad debe ser un número y al menos 18.';
        return false;
    } else {
        error_edad.innerText = '✅';
        return true;
    }
};

// Función para validar la contraseña
const validarContraseña = () => {
    let contraseña = document.getElementById('contraseña');
    let error_contraseña = document.getElementById('error-contraseña');
    let valorContraseña = contraseña.value.trim();
    let exp_regContraseña = /^[a-zA-Z][a-zA-Z0-9_]{7,15}$/;

    if (!exp_regContraseña.test(valorContraseña)) {
        error_contraseña.innerText = '⚠️ La contraseña debe empezar con una letra, tener entre 8 y 16 caracteres,numeros, _ ';
        return false;
    } else {
        error_contraseña.innerText = '✅';
        return true;
    }
};

// Función para validar la confirmación de la contraseña
const validarConfirmarContraseña = () => {
    let contraseña = document.getElementById('contraseña');
    let confirmarContraseña = document.getElementById('confirmarContraseña');
    let error_confirmarContraseña = document.getElementById('error-confirmarContraseña');
    let valorContraseña = contraseña.value.trim();
    let valorConfirmarContraseña = confirmarContraseña.value.trim();

    if (valorContraseña !== valorConfirmarContraseña) {
        error_confirmarContraseña.innerText = '⚠️ La confirmación de la contraseña no coincide con la contraseña.';
        return false;
    } else {
        error_confirmarContraseña.innerText = '✅';
        return true;
    }
};

// Función para validar el teléfono
const validarTelefono = () => {
    let telefono = document.getElementById('telefono');
    let error_telefono = document.getElementById('error-telefono');
    let valorTelefono = telefono.value.trim();
    let exp_regTelefono = /^\+34[0-9]{9}$/;

    if (!exp_regTelefono.test(valorTelefono)) {
        error_telefono.innerText = '⚠️ El teléfono debe empezar con +34 y contener 9 dígitos.';
        return false;
    } else {
        error_telefono.innerText = '✅';
        return true;
    }
};

// Función para validar la foto
const validarFoto = () => {
    let foto = document.getElementById('foto');
    let error_foto = document.getElementById('error-foto');
    let valorFoto = foto.files[0];

    if (!valorFoto) {
        error_foto.innerText = '⚠️ Debe seleccionar una foto.';
        return false;
    }

    let fotoFormatoValido = /\.(jpg|jpeg)$/i.test(valorFoto.name);
    if (!fotoFormatoValido) {
        error_foto.innerText = '⚠️ La foto debe estar en formato JPEG.';
        return false;
    }

    if (valorFoto.size > 5 * 1024 * 1024) { // 5 MB
        error_foto.innerText = '⚠️ La foto no debe superar los 5 MB.';
        return false;
    }

    error_foto.innerText = '✅';
    return true;
};

const validarCheckbox = () => {
    let checkbox = document.getElementById('mostrarContraseña');
    if (!checkbox.checked) {
      let clase
      return false;
    }
    return true;
  };

// Validaciones para cada campo
let validacionesSocios = [validarNombre, validarUsuario, validarEdad, validarContraseña, validarConfirmarContraseña, validarTelefono, validarFoto];

// Asociar validaciones con los campos específicos
document.getElementById('nombre').addEventListener('input',validarNombre);
document.getElementById('usuario').addEventListener('input', validarUsuario);
document.getElementById('edad').addEventListener('input', validarEdad);
document.getElementById('contraseña').addEventListener('input',validarContraseña);
document.getElementById('contraseña').addEventListener('input',validarConfirmarContraseña);

document.getElementById('confirmarContraseña').addEventListener('input',validarConfirmarContraseña);
document.getElementById('telefono').addEventListener('input',validarTelefono);
document.getElementById('foto').addEventListener('change',validarFoto);

// Validación global cuando el formulario se envíe
formularioSocios.addEventListener('submit', (e) => {
    let hayErrores = false;
    for (let validar of validacionesSocios) {
        if (!validar()) {
            hayErrores = true;
        }
    }
    if (hayErrores) {
        e.preventDefault(); // Detiene el envío si hay errores
    }
});






