let navHamburger = document.querySelector('#hamburger-icon');


navHamburger.addEventListener('click', ()=>{
    let menu = document.querySelector('.menu');
    menu.classList.toggle('show-menu');
});
