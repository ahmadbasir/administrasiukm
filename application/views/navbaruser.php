<?php $this->load->view('templateuser/header') ?>
<body>

<nav class="navbar navbar-custom navbar-fixed-top navbar-collapse">
    <div class="container">
        <div class="navbar-header">
        <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand pantau_sampah" href="<?php echo site_url('user')?>">Administrasi UKM</a>
      </div>
          <div class="nav navbar-brand navbar-right" style="font-size:14px">
              <?php echo anchor('logout', 'Sign Out'); ?>
          </div>
      </div>
  </nav>
