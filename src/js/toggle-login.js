window.addEventListener('DOMContentLoaded', function() {     
    const popupElement = document.getElementById("login-popup");
    const buttonElement = document.getElementById("login-button");


    buttonElement.addEventListener('click', () => {
        popupElement.classList.toggle('active');
        });
});