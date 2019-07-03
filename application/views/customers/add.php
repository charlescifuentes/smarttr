<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Clientes</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('chome');?>">Inicio</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('ccustomers');?>">Clientes</a></li>
              <li class="breadcrumb-item active">Crear</a></li>
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
                      <h3 class="h4">Crear Cliente</h3>
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
                      <form action="<?php echo base_url('ccustomers/create'); ?>" method="POST">
                        <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                        <div class="form-group">
                          <label class="form-control-label">NIT</label>
                          <input type="text" class="form-control" id="nit_add" name="nit">
                          <div class="alert alert-danger" role="alert" id="nit_duplicated"></div>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Nombres</label>
                          <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Apellidos</label>
                          <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Dirección</label>
                          <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Teléfono</label>
                          <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Email</label>
                          <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Ciudad</label>
                          <input type="text" class="form-control" id="city" name="city">
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