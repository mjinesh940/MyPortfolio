let btnMenu = document.getElementById('btn-menu');
let Menu = document.querySelector('.nav-links');

btnMenu.onclick = function() {
    btnMenu.classList.toggle('fa-times');
    Menu.classList.toggle('active');
};

let header = document.querySelector('header');

window.onscroll = function() {
    if (this.scrollY >= 100) {
        header.classList.add('active');
    } else {
        header.classList.remove('active');
    }
    btnMenu.classList.remove('fa-times');
    Menu.classList.remove('active');
};

// Moved the popup code here
document.addEventListener('DOMContentLoaded', function() {
    const popup = document.getElementById('popup');

    // Show the popup
    popup.style.display = 'block';

    // Hide the popup after 3 seconds
    setTimeout(function() {
        popup.style.display = 'none';
    }, 3000); // 3000 milliseconds = 3 seconds
});
