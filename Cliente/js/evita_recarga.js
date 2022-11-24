//evita la recarga del formulario al obtener un checklist
function evita(){
if(window.history.replaceState){
    console.log("probando");
    window.history.replaceState(null, null, window.location.href);


}
}
