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
                      <h3 class="h4">Editar Cliente</h3>
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
                      <form action="<?php echo base_url('ccustomers/update'); ?>" method="POST">
                        <div class="form-group">
                          <label class="form-control-label">ID</label>
                          <input type="text" class="form-control" id="id" name="id" value="<?php echo $customer->customer_id ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">NIT</label>
                          <input type="text" class="form-control" id="nit" name="nit" value="<?php echo $customer->customer_nit ?>">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Nombres</label>
                          <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $customer->customer_firstname ?>">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Apellidos</label>
                          <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $customer->customer_lastname ?>">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Dirección</label>
                          <input type="text" class="form-control" id="address" name="address" value="<?php echo $customer->customer_address ?>">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Teléfono</label>
                          <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $customer->customer_phone ?>">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Email</label>
                          <input type="text" class="form-control" id="email" name="email" value="<?php echo $customer->customer_email ?>">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Ciudad</label>
                          <input type="text" class="form-control" id="city" name="city" value="<?php echo $customer->customer_city ?>">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Activo</label>
                          <select class="form-control select2" name="status">
                            <?php if ($customer->customer_status == 1): ?>
                              <option value="1" selected="selected">Si</option>
                            <?php else: ?>
                              <option value="0" selected="selected">No</option>
                            <?php endif; ?>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                          </select>
                        </div>
                        <div class="form-group">       
                          <input type="submit" value="Actualizar" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>