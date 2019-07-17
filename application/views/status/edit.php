<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Status</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('chome');?>">Inicio</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('cstatus');?>">Status</a></li>
              <li class="breadcrumb-item active">Editar</a></li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Editar Estado de Servicio</h3>
                    </div>
                    <div class="card-body">
                      <?php if($this->session->flashdata("error")) { ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> <?php echo $this->session->flasdata('error') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <?php } ?>
                      <form action="<?php echo base_url('cstatus/update'); ?>" method="POST">
                        <div class="form-group">
                          <label class="form-control-label">ID</label>
                          <input type="text" class="form-control" name="id" value="<?php echo $status->status_id ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Nombre del Estado</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $status->status_name ?>">
                        </div>
                        <div class="form-group">       
                          <input type="submit" value="Agregar" class="btn btn-primary" id="btn-enviar">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>