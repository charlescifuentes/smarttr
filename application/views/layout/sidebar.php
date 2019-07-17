      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo base_url();?>assets/img/avatar.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h5"><?php echo $this->session->userdata("nombres")." ".$this->session->userdata("apellidos") ?></h1>
              <p><?php echo $this->session->userdata("email") ?></p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Menú</span>
          <ul class="navbar-nav">
            <li <?php if($this->uri->segment(1)=="chome"){echo 'class="active"';}?>><a href="<?php echo base_url('chome');?>"> <i class="icon-home"></i>Inicio </a></li>
            <li <?php if($this->uri->segment(1)=="ccustomers"){echo 'class="active"';}?>><a href="<?php echo base_url('ccustomers');?>"> <i class="icon-grid"></i>Clientes </a></li>
            <li <?php if($this->uri->segment(1)=="ctechservices"){echo 'class="active"';}?>><a href="<?php echo base_url('ctechservices');?>"> <i class="fa fa-bar-chart"></i>Servicio Técnico </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Reportes </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li <?php if($this->uri->segment(1)=="creports/ts_report"){echo 'class="active"';}?>><a href="<?php echo base_url('creports/ts_report');?>"> <i class="fa fa-bar-chart"></i>Ordenes de Servicio </a></li>
              </ul>
            </li>
            <li <?php if($this->uri->segment(1)=="cstatus"){echo 'class="active"';}?>><a href="<?php echo base_url('cstatus');?>"> <i class="fa fa-bar-chart"></i>Estados Servicio </a></li>
            <li <?php if($this->uri->segment(1)=="cusers"){echo 'class="active"';}?>><a href="<?php echo base_url('cusers');?>"> <i class="fa fa-bar-chart"></i>Usuarios </a></li>
            <li <?php if($this->uri->segment(1)=="cconfig"){echo 'class="active"';}?>><a href="<?php echo base_url('cconfig');?>"> <i class="fa fa-bar-chart"></i>Configuración </a></li>
            <li><a href="<?php echo base_url('cauth/logout');?>"> <i class="icon-interface-windows"></i>Salir </a></li>
          </ul>
        </nav>