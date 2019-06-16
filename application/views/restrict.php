<section style="min-height: calc(100vh - 130px);margin-top: 50px;" id="login" class="">
<div class="container">
	<div class="row">
		
		<div class="col-md-6">
			<h3 class="text-left">Usuário, você possui 100 <i class="fas fa-money-bill-alt"></i> !</h3>
		</div>

    <div class="col-md-6">
      <a href="restrict/logoff" class="btn-link float-right text-dark" title="Sair"><i class="fas fa-door-open "></i>Sair</a>
    </div>
		
		
	</div>
  <br><br>

	<div class="row">
		<div class="col-md-6">
			 <a  class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#ModalCadastro">
                     <i class="fas fa-address-card"></i> Editar dados
             </a>
		</div>
		<div class="col-md-6">
			<a  class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#ModalAtividade">
			  <i class="fas fa-file-alt"></i> Solicitar Atividades
			</a>
		</div>
		
	</div>

	

	<hr>
	<br><br>
	<form class="form-inline mt-2 mt-md-0" style="float: right;">
            <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
            <button class="btn btn-primary btn-user my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>

    <br><br>
   <table id="dt_ativ_user" class="table table-bordered table-inverse table-hover">
   	<thead class="table-active">
   		<tr >
   			<th>Imagem</th>
   			<th style="max-width:300px; ">Descrição</th>
   			<th>Preço em <i class="fas fa-money-bill-alt"></i></th>
   			
   		</tr>
   	</thead>
   	<tbody>
   		<tr>
   			<td><img src="<?php echo base_url();?>public/template_user/img/Capturar13.png" alt=""></td>
   			<td>Atividade para ligar o desenho dos animais até o seu nome
			</br><a href="#">baixar <i class="fas fa-file-download"></i> </a> 
   			</td>
   			<td>25 </td>
   		</tr>
   		<tr>
   			<td><img src="<?php echo base_url();?>public/template_user/img/Capturar14.png" alt=""></td>
   			<td>Colora o macaco com as cores de sua preferência
			</br><a href="#">baixar <i class="fas fa-file-download"></i> </a> 
   			</td>
   			<td>25 </td>
   		</tr>
      <tr>
        <td><img src="<?php echo base_url();?>public/template_user/img/Capturar15.png" alt=""></td>
        <td>Ajude o papai noel a chegar no seu trenó
      </br><a href="#">baixar <i class="fas fa-file-download"></i> </a> 
        </td>
        <td>25 </td>
      </tr>
      <tr>
        <td><img src="<?php echo base_url();?>public/template_user/img/Capturar16.png" alt=""></td>
        <td>Escreva o nome dos objetos
      </br><a href="#">baixar <i class="fas fa-file-download"></i> </a> 
        </td>
        <td>25 </td>
      </tr>
      <tr>
        <td><img src="<?php echo base_url();?>public/template_user/img/Capturar17.png" alt=""></td>
        <td>Formem duplas e joguem jogo da velha com seu amigo
      </br><a href="#">baixar <i class="fas fa-file-download"></i> </a> 
        </td>
        <td>25 </td>
      </tr>
      <tr>
        <td><img src="<?php echo base_url();?>public/template_user/img/Capturar18.png" alt=""></td>
        <td>Colora a letra "A" das palavras.
      </br><a href="#">baixar <i class="fas fa-file-download"></i> </a> 
        </td>
        <td>25 </td>
      </tr>
   	</tbody>
   </table>
    

  </div>

   <!--Cadastro Modal -->
<div class="modal fade" id="ModalAtividade" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Solicitação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
                <div class="form-row">

                  <div class="form-group col-md-12">
                    <label for="inputAddress">Atividade</label>
                    <input type="text" class="form-control" id="txtnome" placeholder="Digite o nome da atividade">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="txtDescricao">Descrição</label>
                    <textarea rows="5" class="form-control" id="txtDescricao" placeholder="Escreva uma  breve descrição com a proposta e o tema."></textarea>  
                  </div>
                  
                </div>
               
                
                

                
               
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
  </section>