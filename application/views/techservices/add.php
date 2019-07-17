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
              <li class="breadcrumb-item active">Crear</a></li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms">
            <form action="<?php echo base_url('ctechservices/create') ?>" method="POST"> 
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">NUEVA ORDEN DE SERVICIO</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-row d-flex align-items-center">
                        <div class="form-group col-md-7">
                          <h1>ORDEN DE SERVICIO</h1>
                        </div>
                        <input type="hidden" name="user" value="<?php echo $this->session->userdata("id") ?>">
                        <div class="form-group col-md-2">
                          <label for="ts_id">Orden No.</label>
                          <input type="text" class="form-control" name="ts_id" readonly>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="startdate">Fecha Creación</label>
                          <input type="date" class="form-control" name="startdate" value="<?php echo date("Y-m-d");?>" required>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-row d-flex align-items-center">
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" id="customer" placeholder="Seleccione un cliente" required>
                          <input type='hidden' class="form-control" name="customer_id" id="customer_id">
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
                          <input type="text" class="form-control" name="marca" placeholder="Marca del Reloj" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="model">Modelo</label>
                          <input type="text" class="form-control" name="model" placeholder="Modelo del Reloj">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="store">Taller</label>
                          <input type="text" class="form-control" name="store" placeholder="Taller de Reparación">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="issue_desc">Problema presentado</label>
                          <textarea class="form-control" name="issue_desc" rows="3"></textarea>
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
                        <textarea class="form-control" name="diagnosis" rows="3"></textarea>
                      </div>
                      <div class="line"></div>
                      <div class="form-group">
                        <label for="observation">Observaciones Finales</label>
                        <textarea class="form-control" name="observation" rows="3"></textarea>
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
                            <option value="">Seleccione un estado</option>
                          <?php foreach ($status as $st) { ?>
                            <option value="<?php echo $st->status_id ?>"><?php echo $st->status_name ?></option >
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="enddate">Fecha Entrega</label>
                        <input type="date" class="form-control" name="enddate" value="<?php echo date("Y-m-d");?>">
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