const BASE_URL = "http://localhost/mestrecoruja/";

function limparErros () {
	$("#erroSpan").removeClass('alert alert-danger');
    $(".help-block").html("");
    


}

function mostrarErros (lista_erro) {
	limparErros();
	$.each(lista_erro,function(id, mensagem) {
		
		$(id).parent().siblings('.help-block').html(mensagem);
		$("#erroSpan").addClass('alert alert-danger');
	});
}

function carregaImagem (mensagem = "") {
	return "<i class = 'fas fa-circle-notch fa-spin'></i>&nbsp;" + mensagem;
}//<i class="fas fa-spinner"></i>

function mostrarSucesso (lista_erro) {
	limparErros();
	$.each(lista_erro,function(id, mensagem) {
		
		$(id).parent().siblings('.help-block').html(mensagem);
        $("#erroSpan").addClass('alert alert-success');
        $("#erroSpan").fadeIn(800);
        setTimeout(function(){
            $("#erroSpan").fadeOut(800); 
        },7000);
        
	});
}