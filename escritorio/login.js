// Elemntos DOM
const btnLocal = document.querySelector('.a-local');
const btnArtista = document.querySelector('.a-artista');
const containerSign = document.querySelector('.container-sign');
const containerWelcome = document.querySelector('.container-welcome');
const btnIniciarSesion = document.querySelector('.a-iniciar-sesion');
const inputNombre = document.querySelectorAll('.nombre');
const btnSiguiente = document.querySelectorAll('.btn-sign');
const btnRegistrarse = document.querySelectorAll('.a-registrarse');

// Mover container y cambiarlo de color
btnLocal.addEventListener('click', () => {
    containerSign.classList.add('toggle');
    containerWelcome.style.backgroundColor = '#E8C593';
});

btnArtista.addEventListener('click', () => {
    containerSign.classList.remove('toggle');
    containerWelcome.style.backgroundColor = '#21add1';
});

// Ocultar input nombre y cambiar texto boton
btnIniciarSesion.addEventListener('click', () => {
    inputNombre.forEach(function(input) {
        input.style.display = 'none';
    });
    btnSiguiente.forEach(function(btn) {
        btn.textContent = 'INICIAR SESIÓN';
    });
});

// Mostrar input y cambiar texto boton
btnRegistrarse.forEach(function(btn) {
    btn.addEventListener('click', () => {
        inputNombre.forEach(function(input) {
            input.style.display = 'block';
        });
        btnSiguiente.forEach(function(btn) {
            btn.textContent = 'SIGUIENTE';
        });
    });
});