
const contenedor_entrada = document.getElementById("contenedor__entrada");
const contenedor_formulario = document.getElementById("contenedor__formulario");

if (contenedor_entrada != null){
    contenedor_entrada.addEventListener('click', ()=>{
        contenedor_entrada.classList.toggle('contenedor__entrada--hide')
        contenedor_formulario.classList.toggle('contenedor__formulario--show');
    })  

}else{
    contenedor_formulario.classList.toggle('contenedor__formulario--show');
}



      




