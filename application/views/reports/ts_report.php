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
              <li class="breadcrumb-item active">Reporte de ordenes de servicio</a></li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row justify-content-center align-self-center">
                <!-- Basic Form-->
                <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-8 h-100">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Reporte de Ordenes de servicio</h3>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url('creports/ts_report_result'); ?>" method="POST">
                        <div class="form-group row">
                          <label for="status" class="col-sm-4 col-form-label">Filtrar por estado:</label>
                          <div class="col-sm-6">
                            <select name="status" class="form-control">
                              <option value="null">Seleccione un estado</option>
                              <?php foreach ($status as $st) { ?>
                              <option value="<?php echo $st->status_id ?>"><?php echo $st->status_name ?></option >
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>