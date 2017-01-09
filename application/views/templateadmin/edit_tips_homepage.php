<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
  <section class="content-header">
    <?php echo $this->session->flashdata('error_edit'); ?>
  </section>
  <section class="content">
    <div class="row">
    <div class="col-xs-12 col-md-7">
      <div class="box box-solid box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Tips in Homepage</h3>
        </div>
          <div class="box-body">
            <?php echo form_open('admin/update_tips_homepage','class="form-horizontal"');?>  <!--mengarahkan hasil inputan ke controller-->
            <div class="form-group">
              <label class="col-sm-2 control-label">Title</label>
              <div class="col-sm-6">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Content</label>
              <div class="col-sm-6">
                <textarea class="form-control" name="content" rows="5" cols="50"> <?php echo $content ?></textarea>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-success" name="submit" value="Update">
                <a href="<?php echo site_url('admin/view_input_tips_homepage') ?>" class="btn btn-danger" >Back</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php $this->load->view('templateadmin/footer'); ?>

