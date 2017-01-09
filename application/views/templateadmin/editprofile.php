<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-xs-12 col-md-7">
        <div class="box box-info">
          <div class="box-header with-header">
            <h3 class="box-title">Edit Profil</h3>
          </div>
          <div class="box-body">
            <div class="col-xs-12 col-md-offset-2 col-md-6">
              <?php echo form_open('admin/update','class="form-horizontal"'); ?>  <!--mengarahkan hasil inputan ke controller--> 
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id" value="<?php echo $profile->id; ?>">
                  <input type="text" class="form-control" name="nama" value="<?php echo $profile->nama; ?>">
                  <?php echo form_error('nama', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="username" value="<?php echo $profile->username; ?>">
                  <?php echo form_error('username', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" value="<?php echo $profile->password; ?>">
                  <?php echo form_error('password', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" value="<?php echo $profile->email; ?>">
                  <?php echo form_error('email', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Bio</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="bio" value="<?php echo $profile->bio; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="born_date" data-provide="datepicker" data-date-format="yyyy-mm-dd" value="<?php echo $profile->born_date; ?>">
                  <p>ex. 1990-09-09</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                  <input type="radio" name="gender" <?php if(isset($profile->gender) && $profile->gender=="male") echo "checked" ; ?> value="male"/>Male
                  <input type="radio" name="gender" <?php if(isset($profile->gender) && $profile->gender=="female") echo "checked" ; ?> value="female"/>Female
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-success" value="Update">
                  <a href="<?php echo site_url('admin/view') ?>" class="btn btn-danger" >Back</a>
                </div>
              </div>
              <?php form_close(); ?> <!-- menutup form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('templateadmin/footer'); ?>

