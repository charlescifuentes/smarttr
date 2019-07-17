<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Estados de Servicio</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('chome');?>">Inicio</a></li>
              <li class="breadcrumb-item active">Estados</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Estados</h3>
                      <a class="btn btn-primary ml-auto" href="<?php echo base_url('cstatus/add'); ?>" role="button">Agregar</a>
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
                      <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                      <div class="table-responsive">
                        <table id="table_id" class="display">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Nombres</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if (!empty($status)) { ?>
                              <?php foreach ($status as $st) { ?>
                                <tr>
                                  <td><?php echo $st->status_id; ?></td>
                                  <td><?php echo $st->status_name; ?></td>
                                  <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <a class="btn btn-warning" href="<?php echo base_url('cstatus/edit/'.$st->status_id.'') ?>" role="button"><span class="fa fa-pencil"></span></a>
                                      <button type="button" class="btn btn-danger btn-delete-status" value="<?php echo $st->status_id ?>"><span class="fa fa-remove"></span></button>
                                    </div>
                                  </td>
                                </tr>
                              <?php } ?>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>