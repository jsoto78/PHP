
function miNombre() {
    //Mostrar por consola, tu nombre, apellido, comisión y hobbies

    let miNombre = "Jose Maria";
    let miApellido = "Soto";
    let miComision = "1115";
    let misHobbies = {
        deporte: "Futbol",
        musica: "Guitarra",
    }

    console.log("nombre: ", miNombre);
    console.log("apellido: ", miApellido);
    console.log("comision: ", miComision);
    console.log("hobbies: ", misHobbies);
}

function miFrase() {
    //Escribe un programa que le pida al usuario ingresar una frase y la imprima en la consola.
    let frase = prompt("Ingresa una frase.");
    console.log(frase);
}

function tuNombre() {
    //Escribe un programa que le pregunte al usuario su nombre e imprima "Hola " seguido del nombre y un signo de exclamación.
    let tuNombre = prompt("Ingresa una tu nombre.");
    console.log("Hola", tuNombre, "!!");
}

function tuNombreyApellido() {
    //Escribe un programa que le pregunte al usuario su nombre e imprima "Hola " seguido del nombre y un signo de exclamación.
    let tuNombre = prompt("Ingresa una tu nombre y apellido.");
    console.log(tuNombre);
}
function tuEdad() {
    //Escribe un programa que le pida al usuario su año de nacimiento e imprima su edad actual en la consola con la frase "Tienes X años".
    let tuFecha = prompt("Ingresa tu fecha de nacimiento.");
    tuFecha = new Date(tuFecha);
    let hoy = new Date();

    let anios = (hoy.getFullYear() - tuFecha.getFullYear());
    if (hoy.getMonth() < tuFecha.getMonth() || hoy.getMonth() == tuFecha.getMonth() && hoy.getDate() < tuFecha.getDate()) {
        anios--;
    }
    if (!isNaN(anios)) {
        let mensaje = "Tienes " + anios + " años";
        console.log(mensaje);
    } else {
        console.log("ingresaste una fecha invalida");
    }
}

function tuBmi() {
    //El índice de masa corporal (IMC), o BMI por sus siglas en inglés, es un valor que determina la cantidad de grasa de una persona.
    // El BMI se calcula con la siguiente formula: peso / altura^2
    // Escribe un programa que le pida al usuario su peso y su altura para calcular su BMI e imprima la frase "Tu BMI es X".

    let tuPeso = prompt("Ingresa tu peso en kilogramos.");
    let tuAltura = prompt("Ingresa tu altura en centímetros.");
    if (!isNaN(tuPeso) && !isNaN(tuAltura)) {
        let bmi = tuPeso / tuAltura ^ 2;
        console.log(bmi);
    } else {
        console.log("ingresaste datos incorrectos");
    }
}

function cantidadDeVentanas() {
    // Declarar una variable de nombre cantidadDeVentanas y asignarle la cantidad de 
    // ventanas que hay en tu casa. Mostrar el valor de la variable por la consola.

    let cantidadDeVentanas = 6;
    console.log(cantidadDeVentanas);
}

function soyHumano() {
    // Declarar una variable de nombre soyHumano y 
    // asignarle el valor true (verdadero). Mostrar el valor de la variable por la consola.

    let soyHumano = true;
    console.log(soyHumano);
}

function miGustoPizza() {
    //Declarar una variable de nombre miGustoDePizza y asignarle la variedad de pizza que más te guste usando un 
    // String (cadena de caracteres). Mostrar el valor de la variable por la consola.

    let miGustoDePizza = "Calabresa";
    console.log(miGustoDePizza);
}
function minions() {
    //Mostrar por la consola los siguientes valores false, 'Hola', 0 y 'Minions' usando la misma variable.

    let laMisma = false;
    console.log(laMisma);
     laMisma = "Hola";
    console.log(laMisma);
     laMisma = 0;
    console.log(laMisma);
     laMisma = "Minions";
    console.log(laMisma);
}
function triangulo(){
    //Crear un programa que dado la base y la altura de un triangulo calcule la superficie y el perímetro.

    let base = Number(prompt("Ingrese la medida de la base"));
    let altura = Number(prompt("Ingrese la medida de la base"));
    let superficie = (base * altura)/2;
    let hipotenusa = Math.sqrt((base**2 )+ (altura**2));
    let perimetro = hipotenusa + base + altura;

if(!isNaN(base) &&  !isNaN(altura)){
    console.log("la superficie es",superficie);
    console.log("el perimetro es",perimetro); 
}else{
    console.log("ingresaste datos incorrectos");
}


}
function librasToKilos(){
    //Crear un programa que, al pasar los datos del 
    //peso de una persona en libras, haga la conversión a kilogramos
    //1 Libras = 0.4536 Kilos
    let pesoLibras = Number(prompt("Ingrese su peso en libras"));

if(!isNaN(pesoLibras)){
    let pesoKilos = pesoLibras * 0.4536 ;
    console.log("tu peso en Kg es",pesoKilos.toFixed(2));

}else{
    console.log("ingresaste datos incorrectos");
}

}
function miSueldo(){

// Crear un programa que al ingresar el sueldo de un trabajador, 
// aplique el 15% de aumento y lo muestre en la consola.
let sueldoBase = Number(prompt("Ingresa tu sueldo"));
if(!isNaN(sueldoBase)){
    let sueldoAumento = sueldoBase * 1.15 ;
    console.log("tu sueldo sera de $",sueldoAumento.toFixed(2));

}else{
    console.log("ingresaste datos incorrectos");
}
}
function miNota(){
// Crear un programa que al ingresar una nota de un alumno, muestre con un alert()
//  si el alumno esta “aprobado” (se aprueba con una nota mayor a 7) y “reprobado” en caso contrario

let nota = Number(prompt("Ingresa la nota del alumno"));
if(!isNaN(nota) ){
 if(nota > 7){
     alert("aprobado");
 }else{
    alert("reprobado");
 }
}else{
    console.log("ingresaste datos incorrectos");
}
}

function sueldoCategoria(){
    //Crear un programa tal que dado como datos la categoría y el sueldo de un trabajador, calcule el aumento 
    // correspondiente teniendo en cuenta la siguiente tabla. Mostrar con un Alert() la categoría y el nuevo sueldo

    let categoria = prompt("Ingrese la categoria (debe ser un numero del 1 al 6");
    let sueldo = Number(prompt("Ingrese sueldo"));

        //     categoría
        // 1 15%
        // 2 10%
        // 3 8%
        // 4 7%
    if(!isNaN(sueldo)){
        switch (categoria) {
            case '1':
                alert("El nuevo sueldo para la categoria " + categoria + " es de $ " + (sueldo * 1.15).toFixed(2));
            break;
            case '2':
                alert("El nuevo sueldo para la categoria " + categoria + " es de $ " + (sueldo * 1.10).toFixed(2));
            break;
            case '3':
                alert("El nuevo sueldo para la categoria " + categoria + " es de $ " + (sueldo * 1.08).toFixed(2));
            break;
            case '4':
                alert("El nuevo sueldo para la categoria " + categoria + " es de $ " + (sueldo * 1.07).toFixed(2));
            break;
        
            default:
              
                break;
        }
    }else{
        alert("Ingrese un sueldo numerico");
    }
    
  
}
function miNotaMatricula(){
    // Crear un programa tal que dado como datos la matrícula y 5 calificaciones de un alumno; 
    // imprima la matricula, el promedio y la palabra “aprobado” si el alumno tiene un promedio mayor 
    // o igual que 7, y la palabra “no aprobado” en caso contrario
  let matricula = document.getElementById('matricula').value;
  let n1 = document.getElementById('n1').value;
  let n2 = document.getElementById('n2').value;
  let n3 = document.getElementById('n3').value;
  let n4 = document.getElementById('n4').value;
  let n5 = document.getElementById('n5').value;
  let promedio = (parseFloat(n1) + parseFloat(n2) + parseFloat(n3) + parseFloat(n4) + parseFloat(n5)) / 5;
  let msg;
  let p = document.getElementById('res');
  let modal1 = new bootstrap.Modal(document.getElementById('modalDatos'));
  let modal2 = new bootstrap.Modal(document.getElementById('modalRes'));

  if(!isNaN(promedio) ){
    if(promedio >= 7){
        msg = "aprobado";
    }else{
        msg = "reprobado";
    }

    
    p.innerHTML = 'La matricula ' + matricula + " y su promedio es " + promedio + ", su estado " + msg;
 
  
    modal1.hide();
    modal2.show();

   }else{
       console.log("ingresaste datos incorrectos");
       p.innerHTML = "ingresaste datos incorrectos";
       modal2.show();
   }

 



    }

function nrosEnteros(){
    //Dado 3 números enteros, 
    // determinar cual de ellos es el mayor, tenga en cuenta que los números pueden ser iguales.
    let n1 = parseInt(document.getElementById('nro1').value);
    let n2 = parseInt(document.getElementById('nro2').value);
    let n3 = parseInt(document.getElementById('nro3').value);
    let modal2 = new bootstrap.Modal(document.getElementById('modalRes'));
    let msg;
    let p = document.getElementById('res');
    if(n1 == n2 && n1 == n3){
        msg = "los 3 numeros son iguales y vale: "+n1;
    }
    else{



        if(n1 > n2){
            if(n1>n3){
                msg = "Numero 1 es el Mayor y vale: "+n1+"";
            }else{
                msg = "Numero 3 es el Mayor y vale: "+n3+"";
            }
        }
        else {
            if(n1 < n2){
                if (n2 > n3){
                    msg = "Numero 2 es el Mayor y vale: "+n2+"";
                   }
                   else{
                    msg = "Numero 3 es el Mayor y vale: "+n3+"";
                      }
            }
        }



    }



    p.innerHTML = msg ;
    modal2.show();

}





