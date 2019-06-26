$(function () {
	$("#solicitaAtividade").submit(function  () {
        
		$.ajax({
			type:"post",
			url: BASE_URL + "atividade/salvar_solicitacao",
			dataType:"json",
			data: $(this).serialize(),
			beforeSend:function(){
				limparErros();
				$("#btnSolicitacao").parent().siblings(".help-block").html(carregaImagem("Enviando..."));
			},
			success:function (json) {
                console.log(json);
				if (json["status"]==1) {
					limparErros();
					mostrarSucesso(json["lista_erro"]);
				}else{
					mostrarErros(json["lista_erro"]);
                }
                $('#solicitaAtividade').each (function(){
                    this.reset();
                  });
                
			},

			error:function (response) {
				console.log(response);
			}


		})

		return false; 
	})
})