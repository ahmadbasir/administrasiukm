<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
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
