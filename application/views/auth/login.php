<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smart TR - By ColombiaWeb</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontastic.css">-->
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.blue.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>SMART TR</h1>
                  </div>
                  <p>Sistema Administrativo para Taller de Relojes.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <?php echo form_open('cauth/login', 'class="form-validate"'); ?>
                    <?php if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                      <input id="login-username" type="text" name="username" required data-msg="Ingrese un usuario" class="input-material">
                      <label for="login-username" class="label-material">Usuario</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Ingrese una contraseña" class="input-material">
                      <label for="login-password" class="label-material">Contraseña</label>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Ingresar" id="login">
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  <?php echo form_close(); ?>
                  <a href="#" class="forgot-pass">Olvidó Contraseña?</a><br><small>No tiene una cuenta? </small><a href="register.html" class="signup">Registrar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Desarrollado por <a href="https://www.colombiaweb.co" class="external">ColombiaWeb</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script> -->
    <!-- <script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.min.js"></script> -->
    <script src="<?php echo base_url();?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="assets/js/front.js"></script>
  </body>
</html>