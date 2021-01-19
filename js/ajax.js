
const form = document.querySelector("#formulario");
const obtener = document.querySelector(".requerir");
const tabla = document.querySelector(".tbody");


if(form){
    form.addEventListener("submit", validar);
}
if(obtener){
    
    obtenerdatos();
}
function obtenerdatos(){

    let datos = new FormData();
    datos.append("peticion","listar");
    const xmlhtt = new XMLHttpRequest();
    xmlhtt.open('POST','clases/controller.php',true);

    xmlhtt.onload= function(){
        if(this.status == 200){
            const datos =JSON.parse(this.responseText);
            console.log(JSON.parse(this.responseText));
            
           /* datos.forEach(element => {
                tabla.innerHTML= tabla.innerHTML + `<tr><td>${element.nombre}</td>
                                    <td>${element.apellidos}</td>
                                    <td>${element.ocupacion}</td>
                                    <td>${element.edad}</td>
                                    <td class="accion">
                                        <button onclick="eliminar(this)" id="${element.id}">
                                            <i class="fas fa-trash-alt delete" ></i>
                                        </button>
                                        <button onclick="actualizar(this)" class="actualizar" id="${element.id}">
                                            <i class="fas fa-pen update "></i>
                                        </button>
        
                                    </td>
                                    </tr>`;
                
            });*/
        }
    }
    //enviamos los datos que recibimos, estos ya han sido extraidos del formulario
    xmlhtt.send(datos);
}

function validar(e) {
    e.preventDefault();
    const nombre =  document.querySelector(".nombre");
    const apellido =  document.querySelector(".apellido");
    const ocupacion =  document.querySelector(".ocupacion");
    const edad = document.querySelector(".edad");
    const peticion = document.querySelector(".peticion");
    

    if(nombre.value === "" || apellido.value === "" || ocupacion.value === "" || edad.value === ""){
        console.log("campos obigatorios");
    }
    else{
        let datos = new FormData();

        datos.append("peticion",peticion.value);
        datos.append("nombre",nombre.value);
        datos.append("apellido",apellido.value);
        datos.append("ocupacion",ocupacion.value);
        datos.append("edad",edad.value);
        insertar(datos);
    }
    
}


function insertar(datos){
    const xmlhtt = new XMLHttpRequest();
    xmlhtt.open('POST','clases/controller.php',true);

    xmlhtt.onload= function(){
        if(this.status == 200){
            const resultado = JSON.parse(this.responseText);
            console.log(this.responseText);
            
        
        }
    }
    //enviamos los datos que recibimos, estos ya han sido extraidos del formulario
    xmlhtt.send(datos);
}
