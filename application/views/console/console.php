<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header pb-0">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm">
          <h1 class="m-0">Usuários</h1>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
          <div class="d-flex form-dark flex-wrap align-items-center gap-2 py-2">
            <div class="flex-fill flex-md-grow-0">
              <button
                class="btn btn-outline-primary w-100"
                data-bs-toggle="modal"
                data-bs-target="#modal-users"
                data-type="1"
              >
              <i class="far fa-user"></i>
                Adicionar
              </button>
            </div>

            <div class="flex-fill flex-md-grow-0">
              <select
                class="form-select"
                name="select-support-status"
                id="select-support-status"
              >
                <?php foreach ($status_list as $key => $value): ?>
                <option value="<?php echo $key ?>" <?php if($key == $s_status): ?> selected <?php endif; ?> ><?php echo $value ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- <div class="flex-fill flex-md-grow-0">
              <a class="text-dark h5">
                <i class="fas fa-search"></i>
              </a>
            </div> -->

          </div>
        </div>

        <div class="col-md-12">
          <div id="user-content" class="card card-primary card-outline">
            <div
              id="v-user-table"
              class="card-body table-responsive p-0 v-user"
            >

            <?php if($users != null): ?>

              <table
                id="table-user"
                class="table table-hovertext-nowrap align-middle table-config jf-end"
              >
                <thead>
                  <tr class="">
                    <th>#</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($users as $key => $value): ?>

                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td class="fw-bold">
                      <?php if($value['status']): ?> 
                        <span class="text-success">Ativo</span>
                      <?php else: ?> 
                        <span class="text-danger">Inativo</span>
                      <?php endif; ?> 
                    </td>
                    <td>
                      <div data-ref="2">                       
                      <a
                        href="#"
                        class="text-dark"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-users"
                        title="Ver mais"
                        data-us="<?php echo $value['id'] ?>"
                      >
                        <i class="fad fa-user-edit"></i>
                      </a> 
                      
                      <?php if($value['status']): ?> 
                        <a
                          href="#"
                          class="text-danger"
                          title="Desativar usuário"
                          >
                          <i class="fas fa-ban"></i>
                        </a>
                      <?php else: ?> 
                        <a
                          href="#"
                          class="text-success"
                          title="Reativar usuário"
                          >
                          <i class="fas fa-check"></i>
                        </a>
                      <?php endif; ?> 
                      </div>
                    </td>
                  </tr>
                <?php endforeach;?>  
                  <!-- <tr>
                    <td>002</td>
                    <td>Fulano</td>
                    <td>fulano@email.com</td>
                    <td class="text-danger fw-bold">Inativo</td>
                    <td>
                      <div data-ref="2">
                      <a
                          href="#"
                          class="text-dark"
                          data-bs-toggle="modal"
                          data-bs-target="#modal-users"
                          title="Ver mais"
                        >
                          <i class="fad fa-user-edit"></i>
                        </a>  
                        
                        <a
                          href="#"
                          class="text-success"
                          title="Reativar usuário"
                          >
                          <i class="fas fa-check"></i>
                        </a>
                      </div>
                    </td>
                  </tr> -->
                </tbody>
              </table>
              
              <?php else:  ?>  
                <div class="text-center text-danger py-2 h5 fw-bold">
                  <i class="far fa-frown"></i>
                  Nenhum usuário encontrado!
                </div>
              <?php endif; ?>  
              
            </div>

            <!-- /.card -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
