$(function () {
	$("#login_form").submit(function  () {
		$.ajax({
			type:"post",
			url: BASE_URL + "restrict/ajax_login",
			dataType:"json",
			data: $(this).serialize(),
			beforeSend:function(){
				limparErros();
				$("#btnLogin").parent().siblings(".help-block").html(carregaImagem("Verificando..."));
			},
			success:function (json) {
				
				if (json["status"]==1) {
					limparErros();
					$("#btnLogin").parent().siblings('.help-block').html(carregaImagem("Logando..."));
					window.location = BASE_URL + "page_user";
				}else if (json["status"]==2) {
					limparErros();
					$("#btnLogin").parent().siblings('.help-block').html(carregaImagem("Logando..."));
					
					window.location = BASE_URL + "page_admin";
				}else{
					mostrarErros(json["lista_erro"]);
				}
			},

			error:function (response) {
				console.log(response);
			}


		})

		return false; 
	})
})