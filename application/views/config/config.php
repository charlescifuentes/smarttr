<div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Configuración</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('chome');?>">Inicio</a></li>
            <li class="breadcrumb-item active">Configuración</a></li>
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
                            <h3 class="h4">Editar Configuración</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('cconfig/update'); ?>" method="POST">
                                <?php foreach ($config as $conf) { ?>
                                <div class="form-group row">
                                    <label for="config_name" class="col-sm-2 col-form-label">Empresa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="company_name" value="<?php echo $conf->company_name ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIT</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="company_nit" value="<?php echo $conf->company_nit ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Dirección</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="company_address" value="<?php echo $conf->company_address ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teléfono</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="company_phone" value="<?php echo $conf->company_phone ?>">
                                    </div>
                                </div>
                                <?php } ?>
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