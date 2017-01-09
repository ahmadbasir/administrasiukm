<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
  <section class="content-header">
  <?php echo $this->session->flashdata('error') ?>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="box box-solid box-info">
          <div class="box-header">
            <h3 class="box-title">Tambah User Baru </h3>
          </div>
          <div class="box-body">
              <?php echo form_open('crud/insert','class="form-horizontal"');?>
              <div class="form-group">
                <label class="col-md-2 control-label">Nama Lengkap</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="nama" placeholder="Full Name">
                    <?php echo form_error('nama', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <?php echo form_error('username', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-md-7">
                    <input type="password" class="form-control" name="password" placeholder="Insert Password">
                    <?php echo form_error('password', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Email</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="email" placeholder="Example@gmail.com">
                    <?php echo form_error('email', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Bio</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="bio" placeholder="admin">
                  <?php echo form_error('bio', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd" name="born_date">
                  <p>ex. 1990-09-09</p>
                  <?php echo form_error('born_date', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Gender</label>
                <div class="col-sm-7">
                    <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
                    <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female
                    <?php echo form_error('gender', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Status</label>
                <div class="col-sm-7">
                    <input type="radio" name="role" value="1" <?php echo set_radio('gender', '1'); ?>/>Admin
                    <input type="radio" name="role" value="2" <?php echo set_radio('gender', '2'); ?>/>User Only
                  <?php echo form_error('role', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-md-7">
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                    <a href="<?php echo site_url('crud') ?>" class="btn btn-danger" >Back</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('templateadmin/footer'); ?>

