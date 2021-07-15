// src/app.js

let menuTog = document.querySelector('#menu-toggle');
let navBar = document.querySelector('nav.navbar');

menuTog.addEventListener('click', ()=> {
    menuTog.classList.toggle('active');
    menuTog.classList.toggle('position-fixed');
    navBar.classList.toggle('active');
})
import 'bootstrap';

