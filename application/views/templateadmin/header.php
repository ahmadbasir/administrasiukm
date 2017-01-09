<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap link -->
    <link href="<?php echo base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/plugins/datepicker/datepicker3.css">
    <!-- font Awesome -->
    <link rel="stylesheet" href="<?php base_url();?>asset/font-awesome/css/font-awesome.min.css" type="text/css">
    <!-- Jquery.confirm -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/plugins/jquery.confirm-master/website/css/font-awesome.min.css">
    <!-- data table -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Ionicon -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
    <!-- theme admin lte style -->
    <link href="<?php echo base_url(); ?>asset/css/AdminLTE.min.css"  rel="stylesheet" >
    <link href="<?php echo base_url(); ?>asset/css/skins/_all-skins.min.css"  rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/plugins/craftpip/css/jquery-confirm.css">
    <!-- style css custom -->
    <link href="<?php echo base_url(); ?>asset/css/tambahan.css"  rel="stylesheet" >


  </head>
  <body class="hold-transition skin-custom sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="#" class="logo">
          <span class="logo-mini"><b>Ps</b></span>
          <span class="logo-lg"><b>Administrasi</b>UKM</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: uppercase;">
                  <?php echo $this->session->userdata('username') ?>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <h3 style="color:#fff;  text-transform: uppercase;"><strong><?php echo $this->session->userdata('username') ?></strong></h3>
                    <p><?php if ($this->session->userdata('role') == 1) {
                      echo "admin";
                      }else
                      {
                        echo "Member";
                      }
                    ?></p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo site_url('/admin/view') ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <?php echo anchor('logout', 'Keluar', 'class="btn btn-danger btn-flat"'); ?>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
