<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <?php echo $this->session->flashdata('error'); ?>
      <ol class="breadcrumb">
          <li><a href="<?php echo site_url('user');?>">Home</a></li>
          <li><a class="active">Input Anggota</a></li>
      </ol>
    
  </div>

<?php $this->load->view('templateuser/footer'); ?>