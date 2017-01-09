<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar') ?>
<div class="content-wrapper">
  <section class="content-header">
  <?php echo $this->session->flashdata('error') ?>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="box box-solid box-info">
          <div class="box-header">
            <h3 class="box-title">Input Data Anggota</h3>
          </div>
          <div class="box-body">
              <?php echo form_open('User/input_dataanggota','class="form-horizontal"');?>
              <div class="form-group">
                <label class="col-md-2 control-label">Full Name</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Address</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="address" placeholder="address">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">No Handphone</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="nohp" placeholder="Insert No Handphone">
                    
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Email</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="email" placeholder="Example@gmail.com">
                    
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd" name="born_date">
                  <p>ex. 1990-09-09</p>
                  
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Gender</label>
                <div class="col-sm-7">
                    <input type="radio" name="gender" value="male" />Male
                    <input type="radio" name="gender" value="female" />Female
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
<?php $this->load->view('templateuser/footer'); ?>

