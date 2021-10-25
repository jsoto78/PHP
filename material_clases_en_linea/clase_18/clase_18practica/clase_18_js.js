let titulo = document.getElementById("encabezado");


console.log(titulo);
console.log(titulo.innerHTML);

let concepto = document.getElementById("concepto");
concepto.style.color = "green";
console.log(concepto.innerText);
console.log(concepto.innerHTML);

let definiciones = document.getElementsByTagName("div");
console.log(definiciones[0].innerHTML);

definiciones[0].style.textAlign = "right";

// ahora vamos agregar un nuevo parrafo

let nuevoParrafo = document.createElement("p");
let textoParrafo = document.createTextNode("Nuevo parrrafo de prueba");
let datoNuevo = document.getElementById("definiciones");
datoNuevo.appendChild(nuevoParrafo);
nuevoParrafo.appendChild(textoParrafo);

nuevoParrafo.style.backgroundColor ="red";
//console.log(definiciones[0].innerHTML);

// VAMOS A CREAR FILAS EN LAS TABLAS

function agregarFila(){
    let tabla = document.getElementById("tablaProducto");
    console.log(tabla);
    let numFila = tabla.rows.length;
    
    
    tabla.insertRow(numFila-1).innerHTML = "<td>" + "70000098723"+ "</td><td>Coca-Cola</td><td>$185.00</td><td> <button onclick='eliminarFila(this)'>Eliminar</button></td>";
}

function eliminarFila(contenidoCelda){
   let row = contenidoCelda.parentNode.parentNode;
  
   //console.log(row);
   row.parentNode.removeChild(row);
   
    
}