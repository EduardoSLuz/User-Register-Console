  <body class="d-flex flex-column h-100 text-center text-bg-light">
    <main class="form-signin w-100 m-auto border bg-white">
      <form class="text-start d-flex flex-column gap-3">

        <div>
          <a class="navbar-brand d-flex align-items-end justify-content-center" href="/">
            <span class="fw-light h3 text-default"><b><?php echo $title; ?></b>LTE</span>
          </a>
        </div>
    
        <div>
          <p class="text-center my-0">
            Informe sua nova senha e depois faça o login!
          </p>
        </div>

        <div>
          <label for="input-password">Nova senha</label>
          <input type="password" class="form-control" id="input-password">
        </div>

        <div>
          <label for="input-password-cofirm">Confirme a senha</label>
          <input type="password" class="form-control" id="input-password-cofirm">
        </div>

        <button class="w-100 btn btn-default mb-4" type="submit">Alterar senha</button>

      </form>

    </main>