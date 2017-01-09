<?php $this->load->view('header');?>
<body class="register-body">
  <nav id="mainNav" class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="<?php echo site_url('file/index'); ?>">Register</a>
      </div>
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="col-sm-offset-3 col-xs-12 col-sm-6 tengah-reg">
    <?php echo $this->session->flashdata('error') ?>
    <?php echo form_open('register/register','class="form-horizontal" id="reg-box"')?>
    <h3 class="title-box">Register <hr /></h3>
      <div class="form-group">
        <div class="col-sm-12">
        <label class="control-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" placeholder="Full Name">
          <?php echo form_error('nama', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
         <label class="control-label">Username</label>
            <input type="text"class="form-control" name="username" placeholder="username">
            <?php echo form_error('username', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Password</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
            <?php echo form_error('password', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
        <label class="control-label">konfirmasi Password</label>
            <input type="password" class="form-control" name="passconf" placeholder="Ulangi Password">
            <?php echo form_error('passconf', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
        <label class="control-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="example@google.com">
            <?php echo form_error('email', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Gender</label>
        <div class="col-sm-12">
            <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Pria
            <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Wanita
            <?php echo form_error('gender', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
    <div class="clearfix"></div>
    <div class="box-footer">
      <a class="col-sm-offset-0 col-sm-10" href="<?php echo site_url('file/login') ?>">sudah punya akun, masuk sekarang</a>
      <button type="submit" class="btn btn-success">Daftar</button>
    </div>
    <?php form_close(); ?> <!-- menutup form -->
  </div>
</body>
