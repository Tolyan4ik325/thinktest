// src/app.js

let menuTog = document.querySelector('#menu-toggle');
let navBar = document.querySelector('nav.navbar');
// let navRight = document.querySelector('.right-bar');
menuTog.addEventListener('click', ()=> {
    menuTog.classList.toggle('active');
    menuTog.classList.toggle('position-fixed');
    navBar.classList.toggle('active');
    // navRight.classList.toggle('active');
})

// if(menuTog.classList.contains('active')) {
//     setTimeout(()=> {
//         navRight.classList.toggle('active');
//         }, 100
//     )
// }
import 'bootstrap';

