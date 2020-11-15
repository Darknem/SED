//Función para esconder el menú
function desplegarMenu() {
    const esconder = document.getElementById("menu");
    esconder.classList.toggle("hide-mobile");
    console.log("as")
    const menu = document.querySelector('.options .fa-bars');
    menu.classList.toggle("hide-mobile");
    
    const cerrar = document.querySelector(".options .fa-times");
    cerrar.classList.toggle("hide-mobile");
  }
  let a = document.querySelector(".options");
  a.addEventListener('click', desplegarMenu, false);