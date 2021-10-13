
/**
 * Nivel 1
 */

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
function triangulo() {
    //Crear un programa que dado la base y la altura de un triangulo calcule la superficie y el perímetro.

    let base = Number(prompt("Ingrese la medida de la base"));
    let altura = Number(prompt("Ingrese la medida de la base"));
    let superficie = (base * altura) / 2;
    let hipotenusa = Math.sqrt((base ** 2) + (altura ** 2));
    let perimetro = hipotenusa + base + altura;

    if (!isNaN(base) && !isNaN(altura)) {
        console.log("la superficie es", superficie);
        console.log("el perimetro es", perimetro);
    } else {
        console.log("ingresaste datos incorrectos");
    }


}
function librasToKilos() {
    //Crear un programa que, al pasar los datos del 
    //peso de una persona en libras, haga la conversión a kilogramos
    //1 Libras = 0.4536 Kilos
    let pesoLibras = Number(prompt("Ingrese su peso en libras"));

    if (!isNaN(pesoLibras)) {
        let pesoKilos = pesoLibras * 0.4536;
        console.log("tu peso en Kg es", pesoKilos.toFixed(2));

    } else {
        console.log("ingresaste datos incorrectos");
    }

}
function miSueldo() {

    // Crear un programa que al ingresar el sueldo de un trabajador, 
    // aplique el 15% de aumento y lo muestre en la consola.
    let sueldoBase = Number(prompt("Ingresa tu sueldo"));
    if (!isNaN(sueldoBase)) {
        let sueldoAumento = sueldoBase * 1.15;
        console.log("tu sueldo sera de $", sueldoAumento.toFixed(2));

    } else {
        console.log("ingresaste datos incorrectos");
    }
}
function miNota() {
    // Crear un programa que al ingresar una nota de un alumno, muestre con un alert()
    //  si el alumno esta “aprobado” (se aprueba con una nota mayor a 7) y “reprobado” en caso contrario

    let nota = Number(prompt("Ingresa la nota del alumno"));
    if (!isNaN(nota)) {
        if (nota > 7) {
            alert("aprobado");
        } else {
            alert("reprobado");
        }
    } else {
        console.log("ingresaste datos incorrectos");
    }
}
function sueldoCategoria() {
    //Crear un programa tal que dado como datos la categoría y el sueldo de un trabajador, calcule el aumento 
    // correspondiente teniendo en cuenta la siguiente tabla. Mostrar con un Alert() la categoría y el nuevo sueldo

    let categoria = prompt("Ingrese la categoria (debe ser un numero del 1 al 6");
    let sueldo = Number(prompt("Ingrese sueldo"));

    //     categoría
    // 1 15%
    // 2 10%
    // 3 8%
    // 4 7%
    if (!isNaN(sueldo)) {
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
    } else {
        alert("Ingrese un sueldo numerico");
    }


}
function miNotaMatricula() {
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

    if (!isNaN(promedio)) {
        if (promedio >= 7) {
            msg = "aprobado";
        } else {
            msg = "reprobado";
        }


        p.innerHTML = 'La matricula ' + matricula + " y su promedio es " + promedio + ", su estado " + msg;


        modal1.hide();
        modal2.show();

    } else {
        console.log("ingresaste datos incorrectos");
        p.innerHTML = "ingresaste datos incorrectos";
        modal2.show();
    }





}
function nrosEnteros() {
    //Dado 3 números enteros, 
    // determinar cual de ellos es el mayor, tenga en cuenta que los números pueden ser iguales.
    let n1 = parseInt(document.getElementById('nro1').value);
    let n2 = parseInt(document.getElementById('nro2').value);
    let n3 = parseInt(document.getElementById('nro3').value);
    let modal2 = new bootstrap.Modal(document.getElementById('modalRes'));
    let msg;
    let p = document.getElementById('res');
    if (n1 == n2 && n1 == n3) {
        msg = "los 3 numeros son iguales y vale: " + n1;
    }
    else {



        if (n1 > n2) {
            if (n1 > n3) {
                msg = "Numero 1 es el Mayor y vale: " + n1 + "";
            } else {
                msg = "Numero 3 es el Mayor y vale: " + n3 + "";
            }
        }
        else {
            if (n1 < n2) {
                if (n2 > n3) {
                    msg = "Numero 2 es el Mayor y vale: " + n2 + "";
                }
                else {
                    msg = "Numero 3 es el Mayor y vale: " + n3 + "";
                }
            }
        }



    }
    p.innerHTML = msg;
    modal2.show();

}

/**
 * Auxiliares
 */

function mostrarResultado(texto) {
    let p = document.getElementById('res');
    let modal = new bootstrap.Modal(document.getElementById('modalRes'));
    p.innerHTML = texto;
    modal.show();
    console.log(texto);
}

/**
 * Nivel 2
 */
function miSuma() {
    /*

    Crear un programa que defina tres variables llamadas “variable_a”, “variable_b” y “variable_resultado”. Cargar las primeras dos con los valores numéricos 33 y 77. Sumar ambas variables 
    y guardar el resultado en la variable “variable_resultado”. Imprimir el resultado por consola.
    */
    let variable_a = 33;
    let variable_b = 77;
    let variable_resultado = variable_a + variable_b;
    let output = "el resultado es: " + variable_resultado;
    console.log(output);
    mostrarResultado(output);
}

function nuevoPrmedio() {
    /**
     * Crear un programa que defina 5 variables llamadas “a”,“b”...“e” y 
     * una sexta variable llamada “promedio”. Cargar las 5 variables con valores y calcular el 
     * promedio de los mismos. Imprimir el resultado por consola.
     */
    let a;
    let b;
    let c;
    let d;
    let e;
    let promedio;

    a = 3;
    b = 5;
    c = 9;
    d = 8;
    e = 6;
    promedio = (a + b + c + d + e) / 5;
    let output = "el promedio es: " + promedio;
    console.log(output);
    mostrarResultado(output);
}

function comparoNotas() {
    /**
     * Crear un programa que defina las variables “nota1” y “nota2”. Asignarle valores a ambas. 
     * Comparar si “nota1” es mayor a “nota2” e imprimir el resultado de la comparación.
     */
    let output;
    let nota1 = 8;
    let nota2 = 6;
    output = "la comparacion es: " + nota1 > nota2;

    mostrarResultado(output);
}
function compraFarmacia() {
    /**
     * Una farmacia hace el 15% de descuento a sus clientes si la compra es mayor a 100 pesos. 
     * Escribir un programa que, dado el monto de una compra como valor numérico, 
     * diga cuanto debe abonar el cliente aplicando el descuento si es necesario.
     */

    let montoCompra = parseFloat(prompt("Ingrese el valor de la compra."));

    if (montoCompra > 100) {
        montoCompra = montoCompra * .85;
    }
    let output = "El total a pagar es de $ " + montoCompra;

    mostrarResultado(output);

}

function entradasCine() {
    /**
     * Crear un programa que calcule el pago que hacen un grupo de personas para ver una película 
     * teniendo en cuenta que si el grupo es menor de 8 personas el 
     * pago es de 1.5 pesos por persona y para grupos de 8 personas o más el pago es 0.5 pesos por persona.
     */

    let cantidadEntradas = parseInt(prompt('Ingresa la cantidad de entradas a comprar'));
    let precio = 1.5;
    let precioDescuento = 0.5;
    let total = cantidadEntradas * 0.5;
    if (cantidadEntradas < 8) {
        total = cantidadEntradas * 1.5;
    }
    mostrarResultado('El total a pagar es: ' + total);
}

function otraComparacionNotas() {
    /**
     * Crear un programa que defina las variables “nota1” y “nota2”. 
     * Asignarle valores a ambas. Comparar si “nota1” es mayor a “nota2” 
     * imprimir el mensaje “Nota1 es mayor” o “Nota2 es mayor” según el resultado de la comparación.
     */
    let output = "Nota2  es mayor";
    let nota1 = parseFloat(prompt("Ingrese el valor de Nota 1."));
    let nota2 = parseFloat(prompt("Ingrese el valor de Nota 2."));
    if (isNaN(nota1) || isNaN(nota2)) {
        output = "Ingresaste valores invalidos";
    }
    if (nota1 > nota2) {
        output = "Nota1 es mayor";
    }
    mostrarResultado(output);
}
function valoracionPeliculas() {
    /**
     * 
     *  Las puntuaciones de las películas se clasifican en:
     *  0: mala, 1: regular, 2: buena,3: muy buena, 4: excelente
     *  Crear un programa donde se pide al usuario que ingrese un valor entre 0 a 4. 
     *  Imprimir la clasificación de la película según el valor numérico.
     */
    let valoracion = prompt("Ingrese la puntuacion de la pelicula. \n Las puntuaciones de las películas se clasifican en: \n 0: mala, 1: regular, 2: buena,3: muy buena, 4: excelente. \n  ");
    let text = "n";
    console.log(valoracion);
    switch (valoracion) {
        case '0':
            text = "mala";
            break;
        case '1':
            text = "regular";
            break;
        case '2':
            text = "buena";
            break;
        case '3':
            text = "muy buena";
            break;
        case '4':
            text = "excelente";
            break;

        default:
            text = "ingresaste una opcion invalida";
            mostrarResultado(text);
            return;
            break;
    }
    mostrarResultado('la calificacion de la pelicula es: ' + text);

}

function cuentaRegresiva(dato) {

    /**
     * Crear un programa que imprima una cuenta regresiva de 59 a 0.
     */

    let i = dato;

    while (i >= 0) {
        console.log(i);
        i--;
    }
}
function cuentaHastaCien() {

    /**
     * Crear un programa que imprima una cuenta regresiva de 0  a 100.
     */

    let i = 0;

    while (i <= 100) {
        console.log(i);
        i++;
    }
}
function guardaArray() {
    /**
     * Crear un programa en donde el usuario ingresa números y se guardan en un array. 
     * Al ingresar “-1” se imprimirán los números ingresado junto con sus posiciones dentro del array.
     * 
     */
    var array = new Array();
    let datoIngresado;

    do {
        datoIngresado = parseInt(prompt("Ingresa datos para agregar \n ingresando -1 imprimiras los valosres"));
        if (datoIngresado != -1) { array.push(datoIngresado); }

    } while (datoIngresado != -1);

    array.forEach(function (element, i) {
        console.log("Indice " + i + "valor " + element);
    });

}

function guardaArrayPromedio() {
    /**
     * Crear un programa en donde el usuario ingresa números hasta que ingresa “-1”, 
     * en dicho caso el programa termina e imprime el promedio de los números ingresados.
     */
    var array = new Array();
    let datoIngresado = 0;
    let c = 0;
    let sumatoria = 0;

    while (datoIngresado != -1) {
        datoIngresado = parseInt(prompt("Ingresa Numeros \n ingresando -1 obtendras el promedio"));
        if (datoIngresado != -1 && !isNaN(datoIngresado)) { array.push(datoIngresado); }

    }

    array.forEach(function (element, i) {
        console.log(element)
        sumatoria += element;
        c++
    });
    console.log(sumatoria);
    mostrarResultado('El promedio es ' + (sumatoria / c));
}
function preciosProductos() {
    /**
     * Crear un programa en donde el usuario ingrese el nombre y el precio de 5 productos, 
     * al finalizar, se listarán en pantalla el nombre y el precio de los productos.
     */
    let datoIngresado;
    let texto;
    let array = new Array();
    for (let index = 0; index < 5; index++) {
        datoIngresado = prompt("Ingresa nombre y precio del producto nro " + (index + 1));
        array.push(datoIngresado);
    }

    array.forEach(element => {
        texto += element + '<br>';
    });
    mostrarResultado(texto);

}

function alturasPromedio() {

    /**
     * Se ingresan un conjunto de n alturas de personas por teclado. Mostrar la altura promedio de las personas.
     */
    let datoIngresado;
    let texto;
    let sumatoria = 0;
    let index = 0;
    let promedio;
    while (datoIngresado != -1) {
        datoIngresado = parseFloat(prompt("Ingresa la altura " + (index + 1) + "\n para calcular promedio ingrese -1"));
        if (!isNaN(datoIngresado)) {
            sumatoria += datoIngresado;
            index++;
        } else {
            mostrarResultado("Dato invalido");
        }
    }

    if (index != 0 && sumatoria != 0) {
        promedio = sumatoria / index;
        texto = "el promedio de las alturas es: " + promedio;
    } else { text = "hay datos invalidos"; }

    mostrarResultado(texto);
}

function nrosBingo() {
    /**
     * Crear un Programa que pida al usuario un número 
     * entre 0 y 25, deberá mostrar por pantalla su significado en el bingo. Ej: 14 = "Borracho"
     */

    const significados = [
        { id: 0, nombre: 'Huevos' },
        { id: 1, nombre: 'Agua' },
        { id: 2, nombre: 'Niño' },
        { id: 3, nombre: 'San Cono' },
        { id: 4, nombre: 'La cama' },
        { id: 5, nombre: 'Gato' },
        { id: 6, nombre: 'Perro' },
        { id: 7, nombre: 'Revolver' },
        { id: 8, nombre: 'Incendio' },
        { id: 9, nombre: 'Arroyo' },
        { id: 10, nombre: 'La Leche' },
        { id: 11, nombre: 'Minero' },
        { id: 12, nombre: 'Soldado' },
        { id: 13, nombre: 'La yeta' },
        { id: 14, nombre: 'Borracho' },
        { id: 15, nombre: 'Niña bonita' },
        { id: 16, nombre: 'Anillo' },
        { id: 17, nombre: 'Desgracia' },
        { id: 18, nombre: 'Sangre' },
        { id: 19, nombre: 'Pescado' },
        { id: 20, nombre: 'La Fiesta' },
        { id: 21, nombre: 'Mujer' },
        { id: 22, nombre: 'Loco' },
        { id: 23, nombre: 'Cocinero' },
        { id: 24, nombre: 'Caballo' },
        { id: 25, nombre: 'Gallina' },
        { id: 26, nombre: 'La Misa' },
        { id: 27, nombre: 'El Peine' },
        { id: 28, nombre: 'El Cerro' },
        { id: 29, nombre: 'San Pedro' },
        { id: 30, nombre: 'Santa Rosa' },
        { id: 31, nombre: 'La Luz' },
        { id: 32, nombre: 'Dinero' },
        { id: 33, nombre: 'Cristo' },
        { id: 34, nombre: 'La Cabeza' },
        { id: 35, nombre: 'Pajarito' },
        { id: 36, nombre: 'La Manteca' },
        { id: 37, nombre: 'El Dentista' },
        { id: 38, nombre: 'Piedras' },
        { id: 39, nombre: 'Lluvia' },
        { id: 40, nombre: 'El cura' },
        { id: 41, nombre: 'El cuchillo' },
        { id: 42, nombre: 'Zapatillas' },
        { id: 43, nombre: 'Balcón' },
        { id: 44, nombre: 'La Cárcel' },
        { id: 45, nombre: 'El vino' },
        { id: 46, nombre: 'Tomates' },
        { id: 47, nombre: 'Muerto' },
        { id: 48, nombre: 'Muerto que habla' },
        { id: 49, nombre: 'La carne' },
        { id: 50, nombre: 'El Pan' },
        { id: 51, nombre: 'Serrucho' },
        { id: 52, nombre: 'Madre e hijo' },
        { id: 53, nombre: 'El Barco' },
        { id: 54, nombre: 'La vaca' },
        { id: 55, nombre: 'La Música' },
        { id: 56, nombre: 'La caída' },
        { id: 57, nombre: 'El jorobado' },
        { id: 58, nombre: 'Ahogado' },
        { id: 59, nombre: 'Las plantas' },
        { id: 60, nombre: 'La virgen' },
        { id: 61, nombre: 'Escopeta' },
        { id: 62, nombre: 'Inundación' },
        { id: 63, nombre: 'Casamiento' },
        { id: 64, nombre: 'Llanto' },
        { id: 65, nombre: 'El cazador' },
        { id: 66, nombre: 'Lombriz' },
        { id: 67, nombre: 'Mordida' },
        { id: 68, nombre: 'Sobrinos' },
        { id: 69, nombre: 'Vicios' },
        { id: 70, nombre: 'Muerto Sueño' },
        { id: 71, nombre: 'Excremento' },
        { id: 72, nombre: 'Sorpresa' },
        { id: 73, nombre: 'Hospital' },
        { id: 74, nombre: 'Gente Negra' },
        { id: 75, nombre: 'Los Besos' },
        { id: 76, nombre: 'Las llamas' },
        { id: 77, nombre: 'Pierna Mujer' },
        { id: 78, nombre: 'Ramera' },
        { id: 79, nombre: 'Ladrón' },
        { id: 80, nombre: 'La Bocha' },
        { id: 81, nombre: 'Las Flores' },
        { id: 82, nombre: 'La pelea' },
        { id: 83, nombre: 'Mal tiempo' },
        { id: 84, nombre: 'La iglesia' },
        { id: 85, nombre: 'Linterna' },
        { id: 86, nombre: 'El humo' },
        { id: 87, nombre: 'Piojos' },
        { id: 88, nombre: 'El papa' },
        { id: 89, nombre: 'La rata' },
        { id: 90, nombre: 'El miedo' },
        { id: 91, nombre: 'Excusado' },
        { id: 92, nombre: 'El Médico' },
        { id: 93, nombre: 'Enamorado' },
        { id: 94, nombre: 'Cementerio' },
        { id: 95, nombre: 'Anteojos' },
        { id: 96, nombre: 'Marido' },
        { id: 97, nombre: 'Mesa' },
        { id: 98, nombre: 'Lavandera' },
        { id: 99, nombre: 'Hermano' }
    ]
    let valor = parseInt(prompt("Ingrese un nro del 0 al 99 para saber su significado"));
    if(!isNaN(valor)){
       let res = significados.find( sig => sig.id === valor);
       mostrarResultado("El significado es "+res.nombre);
    }else{
        mostrarResultado("ingresaste un dato invalido");
    }
}
function nombreCompaneros(){
    /**
     * Crear 2 Vectores, uno corresponderá a los nombres y 
     * otro a los apellidos de 10 compañeros del curso de Fullstack de codo a codo
     */

    let nombres = [
        'florencia','jose','joel','gisel','hernan','gonzalo','hector','gabriela','lourdes','lucas'
    ];
    let apellidos = [
        'silva','gimenez','molinari','de la torre','toledo','gimenez','moscardi','kakol','rodriguez','de palma'
    ];

    console.log(nombres);
    mostrarResultado(nombres + apellidos);
    console.log(apellidos);

}