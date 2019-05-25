      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo base_url();?>assets/img/avatar-12.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h5"><?php echo $this->session->userdata("nombres")." ".$this->session->userdata("apellidos") ?></h1>
              <p>Web Developer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Menú</span>
          <ul class="list-unstyled">
            <li class="active"><a href="<?php echo base_url('chome');?>"> <i class="icon-home"></i>Inicio </a></li>
            <li><a href="<?php echo base_url('cclientes');?>"> <i class="icon-grid"></i>Clientes </a></li>
            <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Servicio Técnico </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Reportes </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Servicio Ténico</a></li>
                <li><a href="#">Clientes</a></li>
              </ul>
            </li>
            <li><a href="forms.html"> <i class="icon-padnote"></i>Usuarios </a></li>
            <li><a href="forms.html"> <i class="icon-padnote"></i>Configuración </a></li>
            <li><a href="<?php echo base_url('cauth/logout');?>"> <i class="icon-interface-windows"></i>Salir </a></li>
          </ul>
        </nav>