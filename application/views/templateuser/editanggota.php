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
            <h3 class="box-title">Edit Data Anggota</h3>
          </div>
          <div class="box-body">
              <?php   
                foreach ($dataanggota as $da) {
                # code...
                
              ?>
              <?php echo form_open('User/update_dataanggota','class="form-horizontal"');?>

                <div class="form-group">
                <label class="col-md-2 control-label">Id Anggota</label>
                <div class="col-md-7">
                    <input type="text" readonly="readonly" class="form-control" name="id_anggota" value="<?php echo $da->id_anggota ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Full Name</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="name" value="<?php echo $da->name_anggota ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Address</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="address" value="<?php echo $da->address_anggota ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">No Handphone</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="nohp" value="<?php echo $da->nohp_anggota ?>">
                    
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Email</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="email" value="<?php echo $da->email_anggota ?>">
                    
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd" name="born_date" value="<?php echo $da->tgllahir_anggota ?>">
                  <p>ex. 1990-09-09</p>
                  
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Gender</label>
                <div class="col-sm-7" type="hidden">
                    <input type="text" readonly="readonly" class="form-control" name="gender"  value="<?php echo $da->gender_anggota ?>"/>
                    
                </div>
              </div>

              <?php 
            }
            ?>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-md-7">
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                    <a href="<?php echo site_url('User/dataanggota') ?>" class="btn btn-danger" >Back</a>
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

