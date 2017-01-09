<?php $this->load->view('header');?>
<body class="login-body">
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="<?php echo site_url('file/index'); ?>">Login</a>
      </div>
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="col-sm-offset-4 col-xs-12 col-sm-4 login">
    <?php echo $this->session->flashdata('error'); ?>
    <?php echo form_open('login','class="form-horizontal" id="login-box"')?>
    <h3 class="title-box">Login<hr /></h3>
    <div class="form-group">
      <label class="col-md-2 control-label">Username</label>
      <div class="col-md-12">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <?php echo form_error('username', '<div class="error" style="color: #d50000">', '</div>'); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 control-label">Password</label>
      <div class="col-md-12">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <?php echo form_error('password', '<div class="error" style="color: #d50000">', '</div>'); ?>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="box-footer">
      <a class="col-sm-offset-0 col-sm-9" href="<?php echo site_url('file/register') ?>">belum punya akun ? register disini</a>
      <button type="submit" class="btn btn-success">Masuk</button>
    </div>
    <?php form_close(); ?> <!-- menutup form -->
  </body>

</div>
