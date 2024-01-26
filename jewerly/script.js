const myModal = document.querySelector('.modal_main');
const button = document.querySelector('.registr');
const Close = document.querySelector('.close');

function showModalWindow() {
   
    myModal.style.opacity = 1;
}

function closeModalWindow() {
    myModal.style.opacity = 0;
}

button.addEventListener('click',showModalWindow);
Close.addEventListener('click',closeModalWindow);