
function miNombre(){
    //Mostrar por consola, tu nombre, apellido, comisión y hobbies

    let miNombre = "Jose Maria";
    let miApellido = "Soto";
    let miComision = "1115";
    let misHobbies = {
        deporte: "Futbol",
        musica: "Guitarra",
    }

    console.log("nombre: ",miNombre);
    console.log("apellido: ",miApellido);
    console.log("comision: ",miComision);
    console.log("hobbies: ",misHobbies);
}

function miFrase(){
    //Escribe un programa que le pida al usuario ingresar una frase y la imprima en la consola.
    let frase = prompt("Ingresa una frase.");
    console.log(frase);
}

function tuNombre(){
    //Escribe un programa que le pregunte al usuario su nombre e imprima "Hola " seguido del nombre y un signo de exclamación.
    let tuNombre = prompt("Ingresa una tu nombre.");
    console.log("Hola",tuNombre,"!!");
}

function tuNombreyApellido(){
    //Escribe un programa que le pregunte al usuario su nombre e imprima "Hola " seguido del nombre y un signo de exclamación.
    let tuNombre = prompt("Ingresa una tu nombre y apellido.");
    console.log(tuNombre);
}