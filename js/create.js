$(function(){
	
	//variables
	var range, pre;

	//variables de objeto de dom
	var btnSend  = $("#btnSend");
	var rngRange = $("#day-range");
	var labRange = $("#display-range");

	var title, oa, ob, description, range;
	title = $("#title");
	oa    = $("#oa");
	ob    = $("#ob");
	description = $("#description");

	//funciones con handlers
	rngRange.change(function(){
		range = $( this ).val();
		if(range < 2){
			pre = "día";
		}else{
			pre = "días";
		}
		labRange.html( range + " " + pre);
	});

	btnSend.click(function(){

		if( check() === true ){	
			send(title.val(), oa.val(), ob.val(), description.val(), rngRange.val());
		}else{
			alert("Completa todos los datos antes de enviar.");
		}

	});

	//funciones comunes
	function send(title, oa, ob, description, range){

		$.ajax({
			url: 'core/create.php',
			type: 'POST',
			dataType: "HTML",
			data: {title: title, oa: oa, ob: ob, description: description, range: range},
			success:function( data ){
				if( data == "success" ){
					$.notify("¡Tu encuesta ha sido creada!", "success");

					title.val('');
					oa.val('');
					ob.val('');
					description.val('');
				}else{
					$.notify("Ha ocurrido un error :(", "error");	
				}
			}
		});

	}

	function check(){

		if(title.val() != '' || oa.val() != '' || ob.val() != '' || description.val() != ''){
			return true;
		}else{
			return false;
		}
	}


});