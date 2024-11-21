let campo1=document.getElementById('mostrar1');
let campo2=document.getElementById('mostrar2');

campo1.addEventListener('click', e => {
    const passwordInput = document.getElementById('contraseña');
    let tipo = passwordInput.getAttribute('type');
    let imagen = document.querySelector('#mostrar1 img');
    if (tipo === 'password') {
        passwordInput.setAttribute('type', 'text');
        imagen.setAttribute('src','../../assets/ver.png');
    } else {
        passwordInput.setAttribute('type', 'password');
        imagen.setAttribute('src','../../assets/esconder.png');

    }
});

campo2.addEventListener('click', e => {
    const passwordInput = document.getElementById('confirmarContraseña');
    let tipo = passwordInput.getAttribute('type');
    let imagen = document.querySelector('#mostrar2 img');
    if (tipo === 'password') {
        passwordInput.setAttribute('type', 'text');
        imagen.setAttribute('src','../../assets/ver.png');
    } else {
        passwordInput.setAttribute('type', 'password');
        imagen.setAttribute('src','../../assets/esconder.png');

    }
});

