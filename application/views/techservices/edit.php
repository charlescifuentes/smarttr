<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Orden de Servicio</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('chome');?>">Inicio</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('ctechservices');?>">Orden de Servicio</a></li>
              <li class="breadcrumb-item active">Actualizar</a></li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms">
            <form action="<?php echo base_url('ctechservices/update') ?>" method="POST"> 
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">ACTUALIZAR ORDEN DE SERVICIO</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-row d-flex align-items-center">
                        <div class="form-group col-md-7">
                          <h1>ORDEN DE SERVICIO</h1>
                        </div>
                        <input type="hidden" name="user" value="<?php echo $ts->user_id ?>">
                        <div class="form-group col-md-2">
                          <label for="ts_id">Orden No.</label>
                          <input type="text" class="form-control" name="ts_id" value="<?php echo $ts->ts_id ?>" readonly>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="startdate">Fecha Creación</label>
                          <input type="date" class="form-control" name="startdate" value="<?php echo date("Y-m-d", strtotime($ts->ts_date_start)); ?>" readonly>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-row d-flex align-items-center">
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" id="customer" placeholder="Seleccione un cliente" value="<?php echo $ts->customer_firstname." ".$ts->customer_lastname ?>" required>
                          <input type='hidden' class="form-control" name="customer_id" id="customer_id" value="<?php echo $ts->customer_id ?>">
                        </div>
                        <div class="form-group col-md-6">
                        <button type="button" class="btn btn-primary" id="edit_customer"><span class="fa fa-pencil"> Editar</button>
                          <button type="button" class="btn btn-primary" id="create_customer"><span class="fa fa-user"> Crear</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">DATOS DEL RELOJ</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="marca">Marca</label>
                          <input type="text" class="form-control" name="marca" value="<?php echo $ts->ts_watch_brand ?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="model">Modelo</label>
                          <input type="text" class="form-control" name="model" value="<?php echo $ts->ts_watch_model ?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="store">Taller</label>
                          <input type="text" class="form-control" name="store" value="<?php echo $ts->ts_store_sender ?>">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="issue_desc">Problema presentado</label>
                          <textarea class="form-control" name="issue_desc" rows="3"><?php echo $ts->ts_issue_desc ?></textarea>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">DIAGNÓSTICO Y OBSERVACIONES</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="diagnosis">Diagnóstico Técnico</label>
                        <textarea class="form-control" name="diagnosis" rows="3"><?php echo $ts->ts_diagnosis ?></textarea>
                      </div>
                      <div class="line"></div>
                      <div class="form-group">
                        <label for="observation">Observaciones Finales</label>
                        <textarea class="form-control" name="observation" rows="3"><?php echo $ts->ts_observation ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">ESTADO Y FECHA DE ENTREGA</h3>
                    </div>
                    <div class="card-body">
                    <div class="form-row d-flex align-items-center">
                      <div class="form-group col-md-4">
                        <label for="status">Estado</label>
                        <select name="status" class="form-control">
                            <option value="<?php echo $ts->status_id ?>" selected><?php echo $ts->status_name ?></option>
                          <?php foreach ($status as $st) { ?>
                            <option value="<?php echo $st->status_id ?>"><?php echo $st->status_name ?></option >
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="enddate">Fecha Entrega</label>
                        <input type="date" class="form-control" name="enddate" value="<?php echo date("Y-m-d", strtotime($ts->ts_date_end)); ?>">
                      </div>
                      <div class="form-group col-md-5 pt-4">
                        <button type="submit" class="btn btn-primary float-right">Guardar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </form>
          </section>