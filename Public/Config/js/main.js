$(function(){;
});



function login(){
	$("#btn-login").on("click", function(e){
		e.preventDefault();
		var u = $("#usuario").val();
		var p = $("#clave").val();
		if(u == ""){
			alert("el usuario es obligatorio");
			return false;
		}
		if(p == ""){
			alert("la contraseña es obligatoria");
			return false;
		}else{
			var method = $("#login").attr("method");
			var action = $("#login").attr("action");
			var link = "http://localhost/backEasy/";
			var parametros = {
				"usuario": u, "clave": p
			};

			$.ajax({
				type: method,
				url: action,
				data: parametros,
				beforeSend: function(){
					alert("procesando peticion");
				},

				success: function(resp){
						$("#resp").html(resp);
				}
			});
		}
	});
}




