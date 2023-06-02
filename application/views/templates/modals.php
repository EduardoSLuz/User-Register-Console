<!-- user -->
<div
  class="modal fade"
  id="modal-users"
  tabindex="-1"
  aria-labelledby="modal-users-editLabel"
  aria-hidden="true"
>
  <div
    class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down modal-xl modal-lg"
  >
    <div id="modal-users-content" class="modal-content rounded-0 card-primary card-outline">
      <div class="modal-header align-items-center">
        <h1 class="modal-title fs-5" id="modal-users-editLabel"><?php echo $us && $us['id'] ? 'Usuário #'.$us['id'] : 'Novo Usuário' ?></h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <form id="form-user-content" class="row space-plus justify-content-center align-items-center">

          <div class="col-12">
            <h2 class="fs-5 font-monospace fst-italic">Geral</h2>
          </div>

          <div class="col-12 col-md-6">
            <label for="input-user-name">Nome Completo</label>
            <input
              type="text"
              class="form-control"
              name="input-user-name"
              id="input-user-name"
              placeholder="Fulano de Tal"
              value="<?php echo $us['name'] ?? '' ?>"
            />
          </div>

          <div class="col-12 col-md-6">
            <label for="input-user-email">E-mail</label>
            <input
              type="email"
              class="form-control"
              name="input-user-email"
              id="input-user-email"
              placeholder="fulano@email.com"
              value="<?php echo $us['email'] ?? '' ?>"
            />
          </div>

          <div class="col-12 col-sm-6 col-lg-3 user-pass-field">
            <label for="input-user-pass">Senha</label>
            <input
              type="password"
              class="form-control"
              name="input-user-pass"
              id="input-user-pass"
              placeholder="Informe a senha"
            />
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <label for="input-user-phone">Telefone (Celular)</label>
            <input
              type="text"
              class="form-control"
              name="input-user-phone"
              id="input-user-phone"
              placeholder="(00) 00000-0000"
              value="<?php echo $us['phone'] ?? '' ?>"
            />
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <label for="input-user-birth">Data de Nascimento</label>
            <input
              type="date"
              class="form-control"
              name="input-user-birth"
              id="input-user-birth"
              value="<?php echo $us['birthAt'] ?? '' ?>"
            />
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <label for="select-user-genre">Gênero</label>
            <select
              class="form-select"
              name="select-user-genre"
              id="select-user-genre"
            >
              <?php foreach ($genre_list as $key => $value): ?>
                <option value="<?php echo $key ?>" <?php if($us && $us['genre'] && $key == $us['genre']): ?> selected <?php endif; ?> ><?php echo $value ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <label for="select-user-status">Status</label>
            <select
              class="form-select"
              name="select-user-status"
              id="select-user-status"
            >
              <?php foreach ($status_list as $key => $value): ?>
                <?php if($key >= 0): ?>
                <option value="<?php echo $key ?>" <?php if($us && $us['status'] !== null && $key == $us['status']): ?> selected <?php endif; ?> ><?php echo $value ?></option>
                <?php endif; ?>    
              <?php endforeach; ?>
            </select>
          </div>

          <div class="col-12 d-flex justify-content-end">
            <button type="button" class="btn btn-primary px-4">Salvar</button>
          </div>

        </form>
        <div class="row space-plus justify-content-center align-items-center">

          <div class="col-12">
            <h2 class="fs-5 font-monospace fst-italic">Endereços</h2>
            <a class="btn-edit-address" href="#form-user-address" data-bs-toggle="collapse" data-bs-target="#form-user-address" aria-expanded="false" aria-controls="form-user-address" data-type="2">
              Adicionar endereço
              <i class="fas fa-map-marker-alt"></i>
            </a>
          </div>

          <form id="form-user-address" class="col-12 collapse row space-plus justify-content-center" data-address="0">
            <div class="col-12 col-lg-3">
              <label for="input-address-cep">CEP</label>
              <input
                type="text"
                class="form-control"
                name="input-address-cep"
                id="input-address-cep"
                placeholder="00000-000"
              />
            </div>

            <div class="col-12 col-lg-6">
              <label for="input-address-street">Rua</label>
              <input
                type="text"
                class="form-control"
                name="input-address-street"
                id="input-address-street"
                placeholder="Informe a rua"
              />
            </div>

            <div class="col-12 col-lg-3">
              <label for="input-address-number">Número</label>
              <input
                type="text"
                class="form-control"
                name="input-address-number"
                id="input-address-number"
                placeholder="Informe o número"
              />
            </div>

            <div class="col-12 col-lg-6">
              <label for="input-address-district">Bairro</label>
              <input
                type="text"
                class="form-control"
                name="input-address-district"
                id="input-address-district"
                placeholder="Informe o bairro"
              />
            </div>

            <div class="col-12 col-lg-6">
              <label for="input-address-city">Cidade/UF</label>
              <input
                type="text"
                class="form-control"
                name="input-address-city"
                id="input-address-city"
                placeholder="Fulano de Tal"
              />
            </div>

            <div class="col-12 col-lg-6">
              <label for="input-address-complement">Complemento</label>
              <input
                type="text"
                class="form-control"
                name="input-address-complement"
                id="input-address-complement"
                placeholder="Ao lado de algum lugar"
              />
            </div>

            <div class="col-12 d-flex justify-content-between">
              <button type="button" class="btn btn-secondary btn-edit-address px-4" data-type="0">
              <i class="fal fa-times"></i>
              Cancelar
              </button>
              <button type="button" class="btn btn-outline-primary px-4">Salvar</button>
            </div>
          </form>

          <?php if($addr && count($addr) > 0):?>
          <div class="col-12">
            <table class="table table-hover">
              <tbody>
                <?php foreach ($addr as $key => $value): ?>
                <tr>
                  <th>
                    <?php echo "#".$key+1?>
                  </th>
                  <th>
                    <?php echo $value['street']." ".$value['number'].", ".$value['district']." - ".$value['cep'].", ".$value['city']." - ".$value['uf'].", ".$value['complement'] ?>
                  </th>
                  <th>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <a
                        class="btn-edit-address"
                        title="Editar endereço" data-type="1" data-address="1"
                      >
                        <i class="fas fa-pen"></i>
                      </a>  
                      <a
                        class="text-danger btn-remove-address"
                        title="Excluir endereço" data-address="1"
                        >
                        <i class="far fa-trash"></i>
                      </a>
                    </div>
                  </th>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <?php endif;?>
        </div>

      </div>
      <div class="modal-footer justify-content-between d-none">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Voltar
        </button>
        <button type="button" class="btn btn-primary px-4">Salvar</button>
      </div>
    </div>
  </div>
</div>