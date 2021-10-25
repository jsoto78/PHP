    // levanto todas los elementos en variables 

    // 30 pesos el pase por dia 
    var pase_dia =  document.getElementById('pase_dia')
    // 50 pesos cada pase completo
    var pase_completo = document.getElementById('pase_completo')
    // 45 pesos cada pase de dos dias
    var pase_dosdias = document.getElementById('pase_dosdias')
    // 10 pesos cada camisa
    var camisa_evento = document.getElementById('camisa_evento')
    // tiene que ingresar 10 etiquetas y cada 10 son 2 pesos
    var etiquetas = document.getElementById('etiquetas')
    // en este boton vamos a realizar los calculos, le vamos a pasar el escuchador
    var boton_calcular = document.getElementById('calcular')
    // aca vamos a insertar los calculos
    // la lista de lo que selecciono(o unidades)
    var div_resumen = document.getElementById('lista')
    // aca vamos a insertar el importe total
    var div_total = document.getElementById('suma-total')


// calculos para insertar en los div
//function calculos() {
const calculos = () => {
   var lista_productos = [];
    var acumulador =0 
    var s_seguir ="S"


    // pase de dia 
    lista_productos[0]=String(pase_dia.value) +"U.-"+"PASE DÍA"
    acumulador = acumulador + (pase_dia.value*30)
   
    // pase completo
    lista_productos[1]=String(pase_completo.value)+"U.-"+"PASE COMPLETO"
    acumulador = acumulador + (pase_completo.value*50)

   // pase dos dias 
    lista_productos[2]=String(pase_dosdias.value)+"U.-"+"PASE DOS DÍAS"
    acumulador = acumulador + (pase_dosdias.value*50)
    
    // camisa de evento
    lista_productos[3]=String(camisa_evento.value)+"U.-"+"CAMISA EVENTO"
    acumulador = acumulador + (camisa_evento.value*10)
   

    // etiquetas, validar que ingrese multiplos de 10
    if( (etiquetas.value %10) == 0){

        lista_productos[4]=String(etiquetas.value)+"U.-"+"ETIQUETAS"
        acumulador = acumulador + ( (etiquetas.value / 10 )* 2)
    }
    else{
        s_seguir ="N"
        alert("debe ingresar etiquetas multiplo de 10")
        
    }
   
    // si inserto etiquetas multiplo de 10 entonces inserta los datos
   var ul = document.getElementById("items")
   
   if (s_seguir =="S"){
        //verifico si hay li, en caso de que haya los elimino y los creo de nuevo 
       // var li_consulta = document.getElementsByClassName("lig")
       for(var i=0;i<lista_productos.length ;i++){
           // elimino li si existen
           if(document.getElementById(String(i))){
            var text = document.createTextNode(String(lista_productos[i]));
            // se lo asigno al li como hijo 
            document.getElementById(String(i)).textContent=null
            document.getElementById(String(i)).appendChild(text);
           }
           else{
               
               //creo los li y le inserto el contenido
               let li=document.createElement("li");
               // li.innerHTML='<li> id="lig"</li>'
               li.id=String(i)
                //levanto el ul del html
                
                // creo el texto que va a tener el li 
                let text = document.createTextNode(String(lista_productos[i]));
                // se lo asigno al li como hijo 
                li.appendChild(text);
                
                // al ul le asigno el li como hijo 
                document.getElementById("items").appendChild(li);
                li.textContent = String(lista_productos[i]);
           }
       }
  
       
       // ;
       // inserto el total 
        div_total.textContent = "$ "+String(acumulador)
    }

}

// recibe un escuchador y la funcion de los calculos 
boton_calcular.addEventListener('click', calculos)