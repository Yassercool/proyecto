document.addEventListener('DOMContentLoaded', () => {
    console.log("DOM fully loaded and parsed");

    const loginForm = document.getElementById('iniciar');
    const registerForm = document.getElementById('registrar');
    const showLoginLink = document.getElementById('que');
    const showRegisterLink = document.getElementById('xd');

    showLoginLink.addEventListener('click', (e) => {
        e.preventDefault();
        console.log("Show login clicked");
        loginForm.classList.add('active');
        registerForm.classList.remove('active');
    });

    showRegisterLink.addEventListener('click', (e) => {
        e.preventDefault();
        console.log("Show register clicked");
        loginForm.classList.remove('active');
        registerForm.classList.add('active');
    });
});
