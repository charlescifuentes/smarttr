<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Reportes</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('chome');?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('creports/ts_report');?>">Reporte Ordenes de servicio</a></li>
              <li class="breadcrumb-item active">Reporte detallado</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Ordenes</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="table_id" class="display">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Fecha I</th>
                              <th>Cliente</th>
                              <th>Marca</th>
                              <th>Taller</th>
                              <th>Estado</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if (!empty($techservices)) { ?>
                              <?php foreach ($techservices as $techservice) { ?>
                                <tr>
                                  <td><?php echo $techservice->ts_id; ?></td>
                                  <td><?php echo date("d-m-Y", strtotime($techservice->ts_date_start)); ?></td>
                                  <td><?php echo $techservice->customer_firstname." ".$techservice->customer_lastname; ?></td>
                                  <td><?php echo $techservice->ts_watch_brand; ?></td>
                                  <td><?php echo $techservice->ts_store_sender; ?></td>
                                  <td><?php echo $techservice->status_name; ?></td>
                                  <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <button type="button" class="btn btn-info btn-view-ts" data-toggle="modal" data-target="#tsModal" value="<?php echo $techservice->ts_id; ?>"><span class="fa fa-search"></span></button>
                                      <a class="btn btn-warning" href="<?php echo base_url('ctechservices/edit/'.$techservice->ts_id.'') ?>" role="button"><span class="fa fa-pencil"></span></a>
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

          <!-- Modal View User -->
          <div class="modal fade" id="tsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                  <h5 class="modal-title" id="exampleModalLabel">DETALLE ORDEN DE SERVICIO</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <ul class="list-group">
                  </ul>
                  <table class="table" id="ts-table">
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>