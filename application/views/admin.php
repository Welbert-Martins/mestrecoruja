<section style="min-height: calc(100vh - 130px);margin-top: 50px;" id="admin" class="">
    
    <div class="container">
    	<div class="row">
    		<div class="offset-3"></div>
    		<div class="col-md-6">
    			<h3 class="text-center">PAINEL DE ADMINISTRAÇÃO</h3>
    			<br>
    			<br>
    		</div>
    	</div>

      <div class="row">
        
          <div class="offset-6"></div>

          <div class="col-md-6">
            
            <a href="restrict/logoff" class="btn-link float-right text-dark" title="Sair"><i class="fas fa-door-open "></i></a>
            <a href="#" class="btn-link float-right text-dark" title="Dados do Usuario"><i class="fas fa-user"></i>&nbsp&nbsp</a>
          </div>
          
      </div>
      <br>
      <div class="container">
        <ul class="nav nav-tabs">
            <li class=" nav-item"><a class="nav-link active" href="#tab_solicitacoes" role="tab" data-toggle="tab">Solicitações</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab_atividades" role="tab" data-toggle="tab">Atividades</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab_usuarios" role="tab" data-toggle="tab">Usuários</a></li>
            
        </ul>

        <div class="tab-content">
          <div id="tab_solicitacoes" class="tab-pane active"><br>
            <table class="table table-bordered table-inverse table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Usuário</th>
                  <th>Email do Usuario</th>
                  <th>Data da solicitação</th>
                  <th>Descrição da atividade</th>
                  <th>Status da atividade</th>
                  <th>Opções</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Welbert Martins</td>
                  <td>welbert3388@gmail.com</td>
                  <td>03/06/2019</td>
                  <td>Preciso de uma atividade de caça-palavras baseada em lendas do Brasil</td>
                  <td>Aguardando</td>
                  <td>
                    <a  class="btn-link text-dark" title="Alterar Status" data-toggle="modal" data-target="#ModalSolicitacoes"><i class="fas fa-edit"></i>&nbsp&nbsp</a>
                    <a href="" class="btn-link text-dark" title="excluir"><i class="fas fa-trash-alt"></i></a>
                    
                  </td>

                </tr>
              </tbody>
            </table>
          </div>
          <div id="tab_atividades" class="tab-pane">
              <br>
              <div class="row">
                <div class="col-md-6">
                    <a  class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#ModalAddAtividade">
                                 <i class="fas fa-plus"></i> Incluir Atividade
                    </a>
                </div>
                <div class="offset-6"></div>
                
              </div>

            <br>
            <table class="table table-bordered table-inverse table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Tema</th> 
                  <th>Tipo</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Data Postagem</th>
                  <th>Opções</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Atividade dia do Indio</td>
                  <td>Indio</td>
                  <td>Colorir</td>
                  <td>Atividade de colorir com indios brincando ao redor da fogueira</td>
                  <td>70</td>
                  <td>02/06/2019</td>
                  <td>
                    <a  class="btn-link text-dark" title="Editar Atividade" data-toggle="modal" data-target="#ModalAddAtividade"><i class="fas fa-edit"></i>&nbsp&nbsp</a>
                    <a href="" class="btn-link text-dark" title="excluir"><i class="fas fa-trash-alt"></i></a>
                    
                  </td>

                </tr>
              </tbody>
            </table>
          </div>
          
          <br>
          <div id="tab_usuarios" class="tab-pane">
            <table class="table table-bordered table-inverse table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Usuário</th>
                  <th>Email do Usuario</th>
                  <th>Qtd de moedas</th>
                  <th>Situação</th>
                  <th>Tipo</th>
                  <th>Opções</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Welbert Martins</td>
                  <td>welbert3388@gmail.com</td>
                  <td>200</td>
                  <td>Ativo</td>
                  <td>Administrador</td>
                  <td>
                    <a  class="btn-link text-dark" title="Editar Usuário" data-toggle="modal" data-target="#ModalEditUsuario"><i class="fas fa-edit"></i>&nbsp&nbsp</a>
                    <a href="" class="btn-link text-dark" title="excluir"><i class="fas fa-trash-alt"></i></a>
                    
                  </td>

                </tr>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>

	   
      <!-- Modal de Solicitações -->
      <div class="modal fade " id="ModalSolicitacoes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Alterar Status de Solicitação</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-group" action="">
              <div class="row">
                <div class="form-group col-md-4">
                  <label for="txtID">ID da Atividade:</label>
                  <input type="text" class="form-control" id="txtID" placeholder="">
                </div>              
                <div class="form-group col-md-8">
                  <label for="txtUsuario">Usuário</label>
                  <input type="text" class="form-control" id="txtUsuario" placeholder="">
                </div>              
                <div class="form-group col-md-12">
                  <label for="txtemailUsuario">Email do usuário</label>
                  <input type="text" class="form-control" id="txtemailUsuario" placeholder="">
                </div>              
                <div class="form-group col-md-4">
                  <label for="txtNumero">Recebido em:</label>
                  <input type="date" class="form-control" id="txtRecebido" placeholder="">
                </div>              
                <div class="form-group col-md-4">
                  <label for="txtComplemento">Entregue em:</label>
                  <input type="date" class="form-control" id="txtEntregue" placeholder="">
                </div>              
                
                <div class="form-group col-md-4">
                  <label for="selectStatus">Status da Atividade:</label>
                  <select class="form-control" id="selectStatus">
                    <option>Entregue</option>
                    <option>Aguardando</option>
                  </select>
                </div>
               
                <div class="form-group col-md-12">
                  <label for="txtDescricao">Descrição:</label>
                  <textarea class="form-control" rows="6"></textarea>
                </div>                
              </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="button" id="btnSalvar" class="btn btn-primary">Salvar</button>
            </div>
          </div>
        </div>
      </div>



          
          <!-- Modal de Adição e edição de atividades -->
          <div class="modal fade " id="ModalAddAtividade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Adicionar ou editar atividades</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="form-group" action="">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="txtNomeAtividade">Nome Atividade:</label>
                      <input type="text" class="form-control" id="txtNomeAtividade" placeholder="">
                    </div>              
                    <div class="form-group col-md-4">
                      <label for="txtTema">Tema:</label>
                      <input type="text" class="form-control" id="txtTema" placeholder="">
                    </div>              
                    <div class="form-group col-md-4">
                      <label for="txtTipo">Tipo:</label>
                      <input type="text" class="form-control" id="txtTipo" placeholder="">
                    </div>              
                    <div class="form-group col-md-4">
                      <label for="txtPreco">Preço Moeda:</label>
                      <input type="text" class="form-control" id="txtPreco" placeholder="">
                    </div>              
                    <div class="form-group col-md-12">
                      <label for="txtEndImg">Endereço IMG:</label>
                      <input type="text" class="form-control" id="txtEndImg" placeholder="">
                    </div>              
                    <div class="form-group col-md-12">
                      <label for="txtEndDown">Endereço Download:</label>
                      <input type="text" class="form-control" id="txtEndDown" placeholder="">
                    </div>              
                    <div class="form-group col-md-4">
                      <label for="txtDataPost">Data postagem:</label>
                      <input type="date" class="form-control" id="txtDataPost" placeholder="">
                    </div>              
                    
                    
                    <div class="form-group col-md-12">
                      <label for="txtAutor">Autor:</label>
                      <input type="text" class="form-control" id="txtAutor" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="txtAutor">Upload IMG:</label>
                      <input type="file" class="form-control-file" id="txtAutor" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="txtAutor">Upload PDF:</label>
                      <input type="file" class="form-control-file" id="txtAutor" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="txtDescricao">Descrição:</label>
                      <textarea class="form-control" rows="6"></textarea>
                    </div>                
                  </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" id="btnSalvar" class="btn btn-primary">Salvar</button>
                </div>
              </div>
            </div>
          </div>



              
              <!-- Modal de edição de usuários -->
              <div class="modal fade " id="ModalEditUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuário</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form class="form-group" action="#">
                      <div class="row">
                        <div class="form-group col-md-12">
                          <label for="txtNome">Nome:</label>
                          <input type="text" class="form-control" id="txtNome" placeholder="">
                        </div>              
                        <div class="form-group col-md-12">
                          <label for="txtEmail">Email:</label>
                          <input type="email" class="form-control" id="txtEmail" placeholder="">
                        </div>              
                        <div class="form-group col-md-6">
                          <label for="txtSenha">Senha:</label>
                          <input type="password" class="form-control" id="txtSenha" placeholder="">
                        </div>              
                        <div class="form-group col-md-6">
                          <label for="txtConfirmSenha">Confirmar senha:</label>
                          <input type="password" class="form-control" id="txtConfirmSenha" placeholder="">
                        </div>              
                        <div class="form-group col-md-6">
                          <label for="txtCPF">CPF:</label>
                          <input type="text" class="form-control" id="txtCPF" placeholder="">
                        </div>              
                        <div class="form-group col-md-3">
                          <label for="txtMoedas">Moedas:</label>
                          <input type="text" class="form-control" id="txtMoedas" placeholder="">
                        </div>              
                        <div class="form-group col-md-3">
                          <label for="txtVenc">Vencimento:</label>
                          <input type="date" class="form-control" id="txtVenc" placeholder="">
                        </div>              
                        
                        <div class="form-group col-md-4">
                          <label for="selectPagamento">FormaPagamento:</label>
                          <select class="form-control" id="selectPagamento">
                            <option>Cartão</option>
                            <option>Boleto</option>
                            <option>PagSeguro</option>
                          </select>
                        </div>

                        <div class="form-group col-md-4">
                          <label for="selectStatus">Status:</label>
                          <select class="form-control" id="selectStatus">
                            <option>Ativo</option>
                            <option>Inativo</option>
                          </select>
                        </div>

                        <div class="form-group col-md-4">
                          <label for="selectGrupo">Grupo de usuário:</label>
                          <select class="form-control" id="selectGrupo">
                            <option>Usuário</option>
                            <option>Administrador</option>
                          </select>
                        </div>
                              
                      </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="button" id="btnSalvar" class="btn btn-primary">Salvar</button>
                    </div>
                  </div>
                </div>
              </div>



                  
                 
 


  </section>
<script>
  $("#entrar").hide();
</script>