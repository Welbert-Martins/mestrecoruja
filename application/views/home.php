  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url();?>public/template_user/img/coruja_grande.png" alt="">
      <h1 class="text-uppercase mb-0">Mestre Coruja</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Facilitando a vida do educador infantil</h2>
    </div>
  </header>

 <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Portifolio</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            
            <img class="img-fluid" src="<?php echo base_url();?>public/template_user/img/portfolio/Capturar.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url();?>public/template_user/img/portfolio/Capturar2.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url();?>public/template_user/img/portfolio/Capturar3.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url();?>public/template_user/img/portfolio/Capturar4.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url();?>public/template_user/img/portfolio/Capturar5.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url();?>public/template_user/img/portfolio/Capturar6.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Sobre</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Mestre Coruja surgiu para ajudar o educador infantil na elaboração das atividades didáticas.Afinal, o tempo é precioso e sabemos o quão demorado é desenvolver uma atividade.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Por isso temos muitas atividades disponíveis para serem baixadas por nossos assinantes e o nosso diferencial,fazemos a sua atividade sob encomenda,é só se inscrever e pedir.</p>
        </div>
      </div>
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" data-toggle="modal" data-target="#ModalCadastro">
          <i class="fas fa-download mr-2"></i>
          Cadastre-se agora!
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Contato</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
         <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nome</label>
                <input class="form-control" id="name" type="text" placeholder="Nome" required="required" data-validation-required-message="O campo nome é obrigatório.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email </label>
                <input class="form-control" id="email" type="email" placeholder="Email " required="required" data-validation-required-message="O campo e-mail é obrigatório.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Telefone</label>
                <input class="form-control" id="phone" type="tel" placeholder="Telefone" required="required" data-validation-required-message="O Número de Telefone é obrigatório.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Mensagem</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required" data-validation-required-message="É obrigatório o preenchimento de uma mensagem."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

   <!--Cadastro Modal -->
<div class="modal fade" id="ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="<?= base_url()?>user/salvar_usuario" method="post">
                <div class="form-row">
                  <small><font color = "c3c0c0" size="2">  Os campos com asterisco são obrigatórios</font></small>
                  <div class="form-group col-md-12">
                    <label for="inputAddress">Nome*</label>
                    <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Digite seu nome"  required="required" data-validation-required-message="Nome obrigatório.">
                    <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Email*</label>
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email"  required="required" data-validation-required-message="E-mail obrigatório.">
                    <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha*</label>
                    <input type="password" class="form-control" id="txtsenha" name="txtsenha" placeholder="Senha" required="required" data-validation-required-message="Senha obrigatório.">
                    <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Repita a Senha*</label>
                    <input type="password" class="form-control" id="txtrepeteSenha" name="txtrepeteSenha" placeholder="Repetir Senha"required="required" data-validation-required-message="Confirmação de senha obrigatório.">
                    <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                  </div>
                </div>
               
                
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="txtCpf">CPF*</label>
                    <input type="text" class="form-control" id="txtCpf" name="txtCpf" required="required" data-validation-required-message="CPF obrigatório." >
                    <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                   

                  </div>
                  <div class="form-group col-md-6">
                    <label for="selectPlano">Plano</label>
                    <select id="selectPlano" name="selectPlano" class="form-control">
                      <option selected>Mensal</option>
                      <option>Unitário</option>
                    </select>
                    <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                  </div>
                    <div class="col-md-12">
                      <h4 >Pagamento</h4>
                    </div> 
                     
                   
                   

                      <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                          <input id="credito" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                          <label class="custom-control-label" for="credito">Cartão de crédito</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input id="debito" name="paymentMethod" type="radio" class="custom-control-input" required>
                          <label class="custom-control-label" for="debito">Cartão de débito</label>
                        </div>
                
                        <div class="custom-control custom-radio">
                          <input id="pagSeguro" name="paymentMethod" type="radio" class="custom-control-input" required>
                          <label class="custom-control-label" for="paypal">PagSeguro</label>
                        </div>
                        <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="cc-nome">Nome no cartão</label>
                          <input type="text" class="form-control" id="cc-nome" placeholder="" required>
                          <small class="text-muted">Nome completo, como mostrado no cartão.</small>
                          <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="cc-numero">Número do cartão de crédito</label>
                          <input type="text" class="form-control" id="cc-numero" placeholder="" required>
                          <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="cc-expiracao">Data de expiração</label>
                          <input type="text" class="form-control" id="cc-expiracao" placeholder="" required>
                          <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="cc-cvv">CVV</label>
                          <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                          <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                        </div>
                      </div>
                </div>
                
               
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>