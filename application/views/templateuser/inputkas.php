<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Data Kas
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
            <div class="col-md-7">
            <div class="box box-primary">
              <div class="box-header with-border">
              <h3 class="box-title">Form Data Kas</h3>
              </div><!— /.box-header —>
              <!— form start —>
                <form method="post" role="form" action="<?php echo site_url('User/input_datakas') ?>">
                <div class="box-body">
                <div class="form-group">
                <label for="exampleInputText1">Aliran Dana</label>
                <input type="text" class="form-control" id="aliran" name="aliran" placeholder="aliran" required>
                </div>
                <div class="form-group">
                <label for="exampleInputText1">Keperluan Dana</label>
                <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="keperluan" required>
                </div>
                <div class="form-group">
                <label for="exampleInputNumber1">Jumlah Dana</label>
                <input type="number" class="form-control" id="no_hp" name="jml_dana" placeholder="jumlah dana" required>
                </div>
                <div class="form-group">
                <label for="exampleInputDate1">Tanggal Input</label>
                
                  <input type="text" class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd" name="tanggal">
                  <p>ex. 1990-09-09</p>
                  <?php echo form_error('born_date', '<div class="error" style="color: #d50000">', '</div>'); ?>
                
              </div>

              <div class="form-group">
                <label>Termasuk</label>
                <select class="form-control" id="termasuk" name="termasuk" required>
                <option value=""> == Pilih  == </option>
                <option value="pemasukkan" >Pemasukkan</option>
                <option value="pengeluaran" >Pengeluaran</option>
 
                </select>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" onclick='return swal("Good job!", "Kamu Telah Mengisi Form dengan Benar!", "success");'>Simpan</button>
                </div>
                </div><!— /.box-body —>
                
                </form>
              </div><!— /.box —>
              </div>
            </div>
          </section>
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