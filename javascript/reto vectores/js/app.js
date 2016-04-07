// variables ----------------------------------------
var pks = document.querySelectorAll('.pokemons li');

var adf = document.getElementById('add-first');
var adl = document.getElementById('add-last');

var def = document.getElementById('del-first');
var del = document.getElementById('del-last');

var slt = undefined;
var arr = new Array();

var list = document.getElementById('list');
var conten = "";
  

//Activar personajes ----------------------------------
for (var i = 0; i < pks.length; i++) {
	pks[i].onclick = function(){
		
		unselect();
		this.classList.add('active');
		slt = this.getAttribute('id');
	}
}

// Adicionar primero ------------------------------------
 adf.onclick = function(){
    if (slt != undefined) {
        arr.unshift(slt);
        unselect();
        fill();
    }else {
    	alert('Debe seleccionar al menos un pokemon!');
    }
 }

 // Adicionar ultimo ------------------------------------
 adl.onclick = function(){
 	 if (slt != undefined) {
        arr.push(slt);
        unselect();
        fill();
    }else{
    	alert('Debe seleccionar al menos un pokemon!');
    }
 }

 // Eliminar primero ------------------------------------
 def.onclick = function(){
 	 if (arr.length > 0) {
        arr.shift();
        fill();
    }else {
    	alert('No hay pokemones para eliminar!');
    }
 }
 	
 

 // Eliminar Ultimo ------------------------------------
 del.onclick = function(){
 	if (arr.length > 0) {
        arr.pop();
        fill();
    }else {
    	alert('No hay pokemones para eliminar!');
    }
 }
 

 // Quita clase active--------------

 function unselect(){
 	for (var c = 0; c < pks.length; c++){
			pks[c].classList.remove('active');
		}
		slt = undefined;
 }

 // llenar la lista -------------------------

 function fill(){
 	conten = '';
 	for (var i = 0; i < arr.length; i++){
			conten += "<li class="+arr[i]+"></li>";
    }

 list.innerHTML = conten;
}