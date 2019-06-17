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
              <li class="breadcrumb-item active">Clientes</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Clientes</h3>
                      <a class="btn btn-primary ml-auto" href="<?php echo base_url('ccustomers/add'); ?>" role="button">Agregar</a>
                    </div>
                    <div class="card-body">
                      <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                      <div class="table-responsive">
                        <table class="table" id="table-list">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Documento</th>
                              <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>Dirección</th>
                              <th>Teléfono</th>
                              <th>Ciudad</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if (!empty($customers)) { ?>
                              <?php foreach ($customers as $customer) { ?>
                                <tr>
                                  <td><?php echo $customer->customer_id; ?></td>
                                  <td><?php echo $customer->customer_nit; ?></td>
                                  <td><?php echo $customer->customer_firstname; ?></td>
                                  <td><?php echo $customer->customer_lastname; ?></td>
                                  <td><?php echo $customer->customer_address; ?></td>
                                  <td><?php echo $customer->customer_phone; ?></td>
                                  <td><?php echo $customer->customer_city; ?></td>
                                  <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#customerModal" value="<?php echo $customer->customer_id ?>"><span class="fa fa-search"></span></button>
                                      <a class="btn btn-warning" href="<?php echo base_url('ccustomers/edit/'.$customer->customer_id.'') ?>" role="button"><span class="fa fa-pencil"></span></a>
                                      <button type="button" class="btn btn-danger btn-delete" value="<?php echo $customer->customer_id ?>"><span class="fa fa-remove"></span></button>
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

          <!-- Modal View Customer -->
          <div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                  <h5 class="modal-title" id="exampleModalLabel">DETALLE CLIENTE</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <ul class="list-group">
                  </ul>
                  <table class="table" id="customer-table">
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>