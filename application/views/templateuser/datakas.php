<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kas
      </h1>
      <ol class="breadcrumb">
        <li><a class="active" href="<?php echo site_url('user');?>">Home</a></li>
      </ol>
       <?php echo $this->session->flashdata('sukses') ?>
       <?php echo $this->session->flashdata('success') ?>
       <?php echo $this->session->flashdata('success_insert'); ?>
       <?php echo $this->session->flashdata('success_edit'); ?>
       <?php echo $this->session->flashdata('success_delete'); ?>
    </section>
          <!-- /.box -->
          <section class="content">
           <div class="row">
           <div class="col-xs-12">
        <div class="box box-solid box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Data Kas</h3> 
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table id="example" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Aliran Dana</th>
                          <th>Keperluan Dana</th>
                          <th>Jumlah Dana</th>
                          <th>Tanggal Input</th>
                          <th>Termasuk</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $no = 1 ;
                        $total=0;
                        foreach($datakas as $dk){

                        if($dk->termasuk == "pemasukkan"){
                          $total = $total + $dk->jumlah_dana;
                        }else if($dk->termasuk == "pengeluaran"){
                          $total = $total - $dk->jumlah_dana;
                        }else{
                          $total=0;
                        }

                        

                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $dk->aliran_dana ?></td>
                          <td><?php echo $dk->keperluan_dana ?></td>
                          <td><?php echo $dk->jumlah_dana ?></td>
                          <td><?php echo $dk->tanggal_input ?></td>
                          <td><?php echo $dk->termasuk ?></td>
                          <td>
                            <a href="#" class="btn btn-warning btn-flat">Edit</a> 
                            <a href="<?php echo site_url('User/hapus_datakas/'.$dk->id_dana);?>" id="confirm" class="btn btn-danger delete">Delete</a>
                            <a href="#" class="btn btn-info btn-flat">View More</a>
                          </td>
                        </tr>
                <?php }
                ?>
                      </tbody>
                    </table>
                  </div> <!-- /.table-responsive -->
                </div>
              </div>
            </div>
            <br><br><br>

            <div class="col-xs-12">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Total Kas</h3> 
                </div><!-- /.box-header -->
                <div class="box-body">
                <h3><?php echo "Rp. $total"; ?></h3>
                </div>
              </div>
            </div>

        </div> 
          <div class="col-xs-12">
          </div>
        </div></div>
          <section>
          <!-- /.row -->
        </div>

<?php $this->load->view('templateuser/footer'); ?>

<script>

    $("a.delete").confirm({
      text: "Apakah anda yakin ingin menghapus data ini ?",
      title: "Konfirmasi",
      confirmButton: "Hapus",
      cancelButton: "Batal",
      post: true,
      confirmButtonClass: "btn-danger",
      cancelButtonClass: "btn-default",
      dialogClass: "modal-dialog modal-md"
    });
//datatables output garbage user
  $(document).ready(function() {
    $('#table1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      columnDefs: [{ targets: 'action', orderable: false}],
      dom: 'Bfrtip',
      lengthMenu: [
        [ 10, 25, 50, -1 ],
        [ '10 rows', '25 rows', '50 rows', 'Show all' ]
      ],
       buttons: [
        {
          extend: 'pdf',
          download: 'open',
          text: 'Cetak PDF',
          orientation: 'portrait',
          pageSize: 'A4',
          exportOptions: {
                  columns: [ 0, 3, 4, 5 ]
              }
        }
    ]
    });
    $('#table').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false
    });
} );
  </script>
