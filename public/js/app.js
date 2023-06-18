
const menu = document.querySelector('.hamburguesa'); // hamburguesa llamo la variable de html
const navegacion = document.querySelector('.navegacion');
const imagenes = document.querySelectorAll('img');
const btnTodos = document.querySelector('.todos');
const btngafasConsola = document.querySelector('.gafasvrcons');
const btnGafasvrpc = document.querySelector('.gafasvrpc');
const btnGafasvrcelular = document.querySelector('.gafasvrcelular');
const btnPcgamer = document.querySelector('.pcgamer')
const contenedorPlatillos = document.querySelector('.platillos');
document.addEventListener('DOMContentLoaded',()=>{
      Eventosz(); // aqui llamo los metodos de la hamburguesa
      platillos(); 
      carousel();
});



const Eventosz = ()=>{
    menu.addEventListener('click',AbrirMenu);
}
 // el abriri menu es el codigo para la hambuguesa
const AbrirMenu =()=>{
    navegacion.classList.remove('ocultar');
    botoncerrar(); // aqui llamo para cerrar el menu no lo coloco arriba por que es mala praticas  por que lo que necesitamos es cuando abra el menu aparezca la x no mas antes 
} 

// el boton cerrar del menu 
const botoncerrar = () =>{
    const btncerrar = document.createElement('p');
    const overlay = document.createElement('div');
    overlay.classList.add('pantalla-completa');
    const body = document.querySelector('body');
    if(document.querySelectorAll('.pantalla-completa').length >0) return;
    body.appendChild(overlay);
    btncerrar.textContent = 'x';
    btncerrar.classList.add('btn-cerrar');
    while (navegacion.children[5]) {
        navegacion.removeChild(navegacion.children[5]);
  }
    navegacion.appendChild(btncerrar);
    cerrarmenu(btncerrar,overlay);
}

// hasta aqui nicolas  es el boton de cerrar si te enredas me avisas


// esta cost observe no lo copie que eso es otra funcion para las imagenes 
const observe = new IntersectionObserver((entries,observe)=>{
    entries.forEach(entry=>{
        if(entry.isIntersecting){ 
            const imagen = entry.target;
            imagen.src = imagen.dataset.src;
            observe.unobserve(imagen);
        }

    });
});

imagenes.forEach(imagen=>{
       
        observe.observe(imagen);
});


// la x de salir del menu 
const cerrarmenu = (boton,overlay) =>{
    boton.addEventListener('click',()=>{
    navegacion.classList.add('ocultar')
    overlay.remove();
    boton.remove();
    });

    //cerrar menu  hamburguesa
    overlay.onclick = function(){
        overlay.remove();
        navegacion.classList.add('ocultar'); 
        boton.remove();
    }
}

const platillos = ()=>{
    let platillosArreglo = []; //arreglo vacio 
    const platillos  = document.querySelectorAll('.platillo');

    platillos.forEach(platillo=> platillosArreglo = [...platillosArreglo,platillo]); // una copia de dicho arreglo osea cada elemento 

    const consolas = platillosArreglo.filter(vrconsola=> vrconsola.getAttribute('data-platillo') === 'vrconsolas');
    const pct = platillosArreglo.filter(pc=> pc.getAttribute('data-platillo') ==='pc');
    const celulars = platillosArreglo.filter(celular=> celular.getAttribute('data-platillo') === 'celular');
    const pcgamers = platillosArreglo.filter(pcgamer=> pcgamer.getAttribute('data-platillo') === 'pcgamer')   

    mostrar(consolas,pct,celulars,pcgamers,platillosArreglo);
}

const mostrar = (consolas, pct, celulars, pcgamers,todos) =>{
  
    btngafasConsola.addEventListener('click',()=>{
        limpiarhtml(contenedorPlatillos);
        consolas.forEach(conso=>contenedorPlatillos.appendChild(conso));

    });

    btnGafasvrpc.addEventListener('click', ()=>{
        limpiarhtml(contenedorPlatillos);
        pct.forEach(pc=>contenedorPlatillos.appendChild(pc));
    });


    btnGafasvrcelular.addEventListener('click', ()=>{
        limpiarhtml(contenedorPlatillos);
        celulars.forEach(celular=>contenedorPlatillos.appendChild(celular));
    });

    btnPcgamer.addEventListener('click', ()=>{
        limpiarhtml(contenedorPlatillos);
        pcgamers.forEach(pcs=>contenedorPlatillos.appendChild(pcs));
    });

    btnTodos.addEventListener('click',()=>{
        limpiarhtml(contenedorPlatillos);
        todos.forEach(todo=> contenedorPlatillos.appendChild(todo));
    });

    
}
  

const limpiarhtml =(contenedor) =>{
    while(contenedor.firstChild){
        contenedor.removeChild(contenedor.firstChild);
    }
}

function carousel() {
    var images = document.querySelectorAll('.glider img');
    var count = 0;
    for (var i = 0; i < images.length; i++) {
      images[i].addEventListener('load', function() {
        count++;
        if (count === images.length) {
          new Glider(document.querySelector('.glider'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.carouselindicadores',
            arrows: {
              prev: '.carouselanterior',
              next: '.carouselsiguiente'
            }
          });
        }
      });
    }
  }







