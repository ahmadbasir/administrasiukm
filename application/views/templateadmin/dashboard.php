<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content">
    <div class="row">
      <div class="col-md-7">
        <div class="box box-solid box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Produktifitas User</h3>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="data" style="height:400px"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-md-5">
        <div class="box box-solid box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Input Data Anggota</h3>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="action" style="height:320px"></canvas>
            </div>
            <div id="legend-chart" class="chart-legend"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">User</h3>
          </div>
          <div class="box-body">
            <div class="col-md-12">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Grafik Produktivitas User</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="data-2"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">satu</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="kind" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">dua</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="kind-1" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">tiga</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="kind-2" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="js-legend" class="chart-legend"></div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- /.box -->
<?php $this->load->view('templateadmin/footer'); ?>
