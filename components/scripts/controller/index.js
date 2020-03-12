let formCont = document.querySelector('#login-form');

formCont !== null && document.querySelector('#register').addEventListener('click', (event) => {
    event.preventDefault();
    formCont.style.display = 'none';
})


