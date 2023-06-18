const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const correo = document.getElementById("correo");
const cantidad = document.getElementById("cantidad");
const categoria = document.getElementById("categoria");
const resultado = document.getElementById("resultado");
const btnBorrar = document.getElementById("boton-borrar");
const btnResumen = document.getElementById("boton-resumen");

const ticket = 200;

btnResumen.addEventListener("click", () => {
    if(categoria.value == "estudiante"){
        cantidad.value == parseInt(cantidad.value)
        if(cantidad.value > 0){
            let total = cantidad.value * ((ticket * 20)/100);
            resultado.innerHTML = "Total a Pagar: $" + total;
            cantidad.value = "";
        }else{
            msjError.style.display = "block"
            cantidad.value = "";
        }
    }
    else if(categoria.value == "trainee"){
        cantidad.value = parseInt(cantidad.value)
        if(cantidad.value > 0){
            let total = cantidad.value * ((ticket * 50)/100);
            resultado.innerHTML = "Total a Pagar: $" + total;
            cantidad.value = "";
        }else{
            msjError.style.display = "block"
            cantidad.value = "";
        }
    }
    else if(categoria.value == "junior"){
        cantidad.value = parseInt(cantidad.value)
        if(cantidad.value > 0){
            let total = cantidad.value * ((ticket * 85)/100);
            resultado.innerHTML = "Total a Pagar: $" + total;
            cantidad.value = "";
        }else{
            msjError.style.display = "block"
            cantidad.value = "";
        }
    }
})

btnBorrar.addEventListener("click", () => {
    nombre.value = "";
    apellido.value = "";
    correo.value = "";
    cantidad.value = "";
    categoria.value = "categoria";
    resultado.innerHTML ="Total a Pagar: $";
})

