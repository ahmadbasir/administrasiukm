<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-7">
        <div class="box box-solid box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Edit User</h3>
          </div>
          <div class="box-body">
                       <?php echo form_open('crud/update','class="form-horizontal"');
                        echo validation_errors();?>  <!--mengarahkan hasil inputan ke controller--> 
              <div class="form-group">
                <label class="col-sm-3 control-label">Nama Lengkap</label>
                <div class="col-sm-7">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Username</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="username" value="<?php echo $username ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" name="password" value="<?php echo $password ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Bio</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="bio" value="<?php echo $bio ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd" name="born_date" value="<?php echo $born_date ?>">
                  <p>ex. 1990-09-09</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Gender</label>
                <div class="col-sm-8">
                  <input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked" ; ?> value="male"/>Male
                  <input type="radio" name="gender" <?php if(isset($gender) && $gender=="female") echo "checked" ; ?> value="female"/>Female
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Status</label>
                <div class="col-sm-7">
                    <input type="radio" name="role" <?php if (isset($role_id) && $role_id=="1") echo "checked";?> value="1"/>Admin
                    <input type="radio" name="role" <?php if (isset($role_id) && $role_id=="2") echo "checked";?> value="2" />Member
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-success" name="mit" value="Update">
                    <a href="<?php echo site_url('crud') ?>" class="btn btn-danger" >Back</a>
                </div>
              </div>
          <?php form_close(); ?> <!-- menutup form -->
          </div>
        </div>
      </div>
  </section>
</div>
<?php $this->load->view('templateadmin/footer'); ?>

