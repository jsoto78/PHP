

function calcular(){
    let cantidad = parseFloat(document.getElementById('txtcant').value );
    let categoria = parseFloat(document.getElementById('selcategoria').value );
    let p = document.getElementById('total');
    let total = cantidad * (200 - (200 * categoria))
    p.innerHTML = total;

}
function borrar(){
    document.getElementById('txtcant').value = "";
    document.getElementById('selcategoria').value = "";
    let p = document.getElementById('total');
    p.innerHTML = "";
}