<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
  <section class="content-header">
  <?php echo $this->session->flashdata('success_edit'); ?>
  <?php echo $this->session->flashdata('success_insert'); ?>
  <?php echo $this->session->flashdata('success_delete'); ?>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-solid box-info">
            <div class="box-header with-border">
                <h3 class="box-title">User</h3> 
                <a href="<?php echo site_url('crud/add') ?>" class="fa fa-user-plus fa-3x pull-right"> Tambah Baru</a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table id="example" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th class="hidden"></th>
                          <th>Username</th>
                          <th>Nama</th>
                          <th>Create at</th>
                          <th>Edit at</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php   $no = 0;
                          foreach ($get_data as $row) {
                          $no++;
                    # code...
                   ?>
      					        <tr>
                          <td><?php echo $no ?></td>
      					          <td class="hidden"><?php echo $row->id; ?></td>
      					          <td><?php echo $row->username; ?></td>
      					          <td><?php echo $row->nama; ?></td>
      					          <td><?php echo $row->create_at; ?></td>
                          <td><?php echo $row->edit_at; ?></td>
      					          <td>
      					          	<a href="<?php echo site_url('crud/edit/'.$row->id);?>" class="btn btn-warning btn-flat">Edit</a> 
      					          	<a href="<?php echo site_url('crud/delete_user/'.$row->id);?>" id="confirm" class="btn btn-danger delete">Delete</a>
                            <a href="<?php echo site_url('crud/viewmoreuser/'.$row->id); ?>" class="btn btn-info btn-flat">View More</a>
                          </td>
                        </tr>
					      <?php } ?>
                      </tbody>
                    </table>
                  </div> <!-- /.table-responsive -->
                </div>
              </div>
            </div>
        </div>
      </section>
    </div>
<?php $this->load->view('templateadmin/footer'); ?> 

<script>
    $("a.delete").confirm({
      text: "Anda Yakin Ingin Menghapus Data ini ?",
      title: "Konfirmasi",
      confirmButton: "Ya, Hapus",
      cancelButton: "Tidak, Batal",
      post: true,
      confirmButtonClass: "btn-danger",
      cancelButtonClass: "btn-default",
      dialogClass: "modal-dialog modal-md"
    });

    $(document).ready(function() {
    $('#example').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
