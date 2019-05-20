<section style="min-height: calc(100vh - 130px);margin-top: 50px;" id="login" class="">
<div class="container">
	<div class="row">
		<div class="offset-6"></div>
		<div class="col-md-6">
			<h3 class="text-right">Usuário, você possui 100 <i class="fas fa-money-bill-alt"></i> !</h3>
			<br>
			<br>
		</div>
		
		
	</div>

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
   <table class="table table-bordered table-inverse table-hover">
   	<thead class="table-active">
   		<tr >
   			<th>Imagem</th>
   			<th style="max-width:300px; ">Descrição</th>
   			<th>Preço em <i class="fas fa-money-bill-alt"></i></th>
   			
   		</tr>
   	</thead>
   	<tbody>
   		<tr>
   			<td><img src="<?php echo base_url();?>public/template_user/img/atividade.png" alt=""></td>
   			<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</br><a href="#">baixar <i class="fas fa-file-download"></i> </a> 
   			</td>
   			<td>25 </td>
   		</tr>
   		<tr>
   			<td><img src="<?php echo base_url();?>public/template_user/img/atividade.png" alt=""></td>
   			<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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