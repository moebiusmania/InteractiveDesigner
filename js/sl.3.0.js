/* AZIONI GENERICHE */

$(document).on('ready',function(){	// Caricamento pagina

	// Effetti zoom in sulla home e portfolio
	randomZoomIn($('#skills .box'));

	// Apertura pannelli portfolio

});

function randomZoomIn(elems){
	var n = elems.length;
	var nOrig = elems.length;
	var nArr = [];
	var rit = 300;

	for(var i = 0;i<nOrig;i++){
		console.log(n);
		
		setTimeout(function(){
			var caso = Math.floor(Math.random() * n);
			elems.eq(caso).removeClass('zoom-out');
			elems.splice(caso,1);
			n--;
		},rit * i);
		
		
		//console.log(n,caso,elems.length);
	}

	
}