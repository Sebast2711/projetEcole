/* Script pour sousligné le nom de la page sur laquelle l'utilisateur se trouve  */

let url = window.location.pathname; 
let activePage = url.substring(url.lastIndexOf('/') + 1).replace(/\.[^/.]+$/, "");


if (activePage == ""){
    activePage = "index";
}

let pageID = document.querySelector(`#${activePage}`);
pageID.classList.add ('page-selected');
console.log('activepage = ', activePage);