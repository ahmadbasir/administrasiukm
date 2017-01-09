<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar') ?>
<div class="content-wrapper">
<section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('user');?>">Home</a></li>
        <li><a href="<?php echo site_url('user/view');?>">Profile</a></li>
        <li><a class="active">Edit Profile</a></li>
      </ol>
       <?php echo $this->session->flashdata('error_edit'); ?>
    </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-12 col-md-7">
        <div class="box box-solid box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Profil</h3>
          </div>
          <div class="box-body">
            <div class="col-xs-12 col-md-offset-1 col-md-8">
                       <?php echo form_open_multipart('user/update','class="form-horizontal"'); ?>  <!--mengarahkan hasil inputan ke controller--> 
              <div class="form-group">
                <label class="col-sm-3 control-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="hidden" name="id" value="<?php echo $profile->id; ?>">
                    <input type="text" class="form-control" name="nama" value="<?php echo $profile->nama; ?>">
                    <?php echo form_error('nama', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="username" value="<?php echo $profile->username; ?>">
                    <?php echo form_error('username', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" value="<?php echo $profile->password; ?>">
                    <?php echo form_error('password', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" value="<?php echo $profile->email; ?>">
                    <?php echo form_error('email', '<div class="error" style="color: #d50000">', '</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Bio</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="bio" value="<?php echo $profile->bio; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd" name="born_date" value="<?php echo $profile->born_date; ?>">
                    <p>ex. 1990-09-09</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Gender</label>
                <div class="col-sm-9">
                    <input type="radio" name="gender" <?php if(isset($profile->gender) && $profile->gender=="male") echo "checked" ; ?> value="male"/>Male
                    <input type="radio" name="gender" <?php if(isset($profile->gender) && $profile->gender=="female") echo "checked" ; ?> value="female"/>Female
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-success pull-right" value="Ubah">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('templateuser/footer'); ?>

