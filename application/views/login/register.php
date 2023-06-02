  <body class="d-flex flex-column h-100 text-center text-bg-light">
    <main class="form-signin w-100 m-auto border bg-white">
      <form class="text-start d-flex flex-column gap-3">

        <div>
          <a class="navbar-brand d-flex align-items-end justify-content-center" href="/">
            <span class="fw-light h3 text-default"><b><?php echo $title; ?></b>LTE</span>
          </a>
        </div>
    
        <div>
          <label for="input-email">Nome Completo</label>
          <input type="text" class="form-control" id="input-name" placeholder="Informe seu nome">
        </div>

        <div>
          <label for="input-email">E-mail</label>
          <input type="email" class="form-control" id="input-email" placeholder="name@email.com">
        </div>

        <div>
          <label for="input-password">Senha</label>
          <input type="password" class="form-control" id="input-password">
        </div>

        <div>
          <label for="input-password">Confirme a senha</label>
          <input type="password" class="form-control" id="input-password-confirm">
        </div>

        <div>
          <label for="input-birth">Data de nascimento</label>
          <input type="date" class="form-control" id="input-birth">
        </div>

        <button class="w-100 btn btn-default" type="submit">Cadastrar</button>

        <div class="d-flex flex-column gap-1 align-items-center mb-4">
          <a href="/" class="text-default">Quero fazer login</a>
        </div>

      </form>

    </main>