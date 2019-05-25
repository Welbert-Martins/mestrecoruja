
<section style="min-height: calc(100vh - 130px);" id="login" class="">
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>

              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Entrar</h1>
                  </div>
                  <form class="user" id="login_form" method="post">
                    <div class="form-group">
                      <input type="email" name="txtEmailLogin" class="form-control form-control-user" id="txtEmailLogin" aria-describedby="emailHelp" placeholder="Digite seu email ...">
                    </div>
                    
                    <div class="form-group">
                      <input type="password" name="txtSenhaLogin" class="form-control form-control-user" id="txtSenhaLogin" placeholder="Senha">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Armazenar neste computador</label>
                      </div>
                    </div>
                    
                      <div>
                    <button type="submit" id="btnLogin" class="btn btn-primary btn-user btn-block">
                      Entrar
                    </button>
                    </div><br>
                    <span class="help-block btn-block text-center" id="erroSpan"  ></span>
                    
                    
                   
                    
                  </form>
                  <hr>

                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Esqueceu a senha?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="home#about">Crie uma conta!</a>
                  </div>

                </div>
                 
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  </section>