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
            Ao informar seu e-mail, será encaminhado um link para alterar a sua senha.
          </p>
        </div>

        <div>
          <label for="input-email">E-mail</label>
          <input type="email" class="form-control" id="input-email" placeholder="name@example.com">
        </div>

        <button class="w-100 btn btn-default" type="submit">Enviar link</button>

        <div class="d-flex flex-column gap-1 align-items-center mb-4">
          <a href="/" class="text-default">Voltar ao login</a>
        </div>

      </form>

    </main>