<?php $this->load->view('navbaruser') ?>
<!--carousel-->
<section class="section-color carousel">
  <div class="row">
    <div class="col-sm-12">
      <div class="container-fluid">
        <div id="tipsCarousel" class="carousel slide carousel-fade" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="row tengah">
            <div class="col-xs-offset-2 col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-8 col-sm-6 col-md-6 col-lg-6">
              <div class="carousel-inner" role="listbox" id="item-carousel-infopage">
                <div class="item active">
                  <div class="carousel-content">
                    <div>
                      <h2>Apa itu Pantau Sampah ?</h2>
                      <h4>Pantau Sampah sebuah project yang terdedikasi untuk memperingatkan tentang bahaya sampah dan bahaya yang ditimbulkannya.</h4>
                    </div>
                  </div>
                </div>
                <?php foreach ($get as $row) { ?>
                <div class="item">
                  <div class="carousel-content">
                    <div class="col-xs-offset-2 col-sm-offset-3 col-lg-offset-2 col-md-offset-3 col-xs-8 col-sm-6 col-md-6 col-lg-12">
                      <h1><?php echo $row->title; ?></h1>
                      <h4><?php echo $row->content; ?></h4>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control left" data-slide="prev" href="#tipsCarousel"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="carousel-control right" data-slide="next" href="#tipsCarousel"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>  
</section>
<!--ends of carousel-->
<section class="chart-lines">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="clear: both; text-align: center;">
          <br>
          <img alt="ha" src="<?php echo base_url('asset/img/ha.png')?>">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="chart-1" style="clear: both; text-align: center;">
            <img alt="ha" src="<?php echo base_url('asset/img/girl.png')?>">
          </div>
        </div>
        <div class="col-md-7 col-sm-8 col-xs-12">
          <div class="chart-1">
            <canvas id="weeks" width="90" height="60"></canvas>
          </div>
        </div>
      </div>  
    </div>
</section>
<section class="bar background-image-fixed-2 no-mb color-white text-center">
    <div class="dark-mask"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>"Tahu kah anda, Sterofoam tidak dapat terurai secara alami"</h2>
                <p class="lead"> - Fact - </p>
                <p>So, Thinks before you throwing garbage :)</p>
            </div>
        </div>
    </div>
</section>
<section class="chart-bars">
    <div class="container">
      <div class="row">
        <h2 class="text-center">Garbage Productivity Graph</h2>
          <!--Grafik per inputan-->
          <div class="col-md-6 col-md-offset-1">
            <div class="chart-2">
              <canvas id="diagram" width="700" height="400"></canvas>
            </div>
          </div>
      </div>
    </div>
</section>
<!-- end grafik per inputan-->
<section class="no-padding" id="trash">
     <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tahukah Anda Sampah ini Terurai Dalam Waktu Lama ?</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <span class="trash-box">
                        <img src="<?php echo base_url();?>asset/img/trash/jacket.png" class="img-responsive-1" alt="">
                        <div class="trash-box-caption">
                            <div class="trash-box-caption-content">
                                <div class="project-category text-faded">
                                    Jaket
                                </div>
                                <div class="project-name">
                                    Secara Alami Jaket Dapat Terurai Dalam Waktu
                                    30 - 40 Tahun
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <span class="trash-box">
                        <img src="<?php echo base_url();?>asset/img/trash/kaleng.png" class="img-responsive-1 img-trash" alt="">
                        <div class="trash-box-caption">
                            <div class="trash-box-caption-content">
                                <div class="project-category text-faded">
                                    Kaleng
                                </div>
                                <div class="project-name">
                                    Secara Alami Kaleng Dapat Terurai Dalam Waktu
                                    80 - 100 tahun
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <span class="trash-box">
                        <img src="<?php echo base_url();?>asset/img/trash/paper.png" class="img-responsive-1" alt="">
                        <div class="trash-box-caption">
                            <div class="trash-box-caption-content">
                                <div class="project-category text-faded">
                                    Kertas
                                </div>
                                <div class="project-name">
                                    Secara Alami Kertas Dapat Terurai Dalam Waktu
                                    2 - 5 Bulan
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <span class="trash-box">
                        <img src="<?php echo base_url();?>asset/img/trash/battery.png" class="img-responsive-1" alt="">
                        <div class="trash-box-caption">
                            <div class="trash-box-caption-content">
                                <div class="project-category text-faded">
                                    Baterai
                                </div>
                                <div class="project-name">
                                    Secara Alami Baterai Dapat Terurai Dalam Waktu
                                    100 Tahun
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <span class="trash-box">
                        <img src="<?php echo base_url();?>asset/img/trash/plastic.png" class="img-responsive-1" alt="">
                        <div class="trash-box-caption">
                            <div class="trash-box-caption-content">
                                <div class="project-category text-faded">
                                    Plastik
                                </div>
                                <div class="project-name">
                                    Secara Alami Plastik Dapat Terurai Dalam Waktu
                                    10 - 20 Tahun
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <span class="trash-box">
                        <img src="<?php echo base_url();?>asset/img/trash/bottle.png" class="img-responsive-1" alt="">
                        <div class="trash-box-caption">
                            <div class="trash-box-caption-content">
                                <div class="project-category text-faded">
                                    Botol
                                </div>
                                <div class="project-name">
                                    Secara Alami Botol Dapat Terurai Dalam Waktu
                                    1 Juta Tahun
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </section>
<!--grafik jenis sampah-->
<section>
    <div class="container">
      <div class="row">
          <h2 class="text-center">Grafik Jenis Sampah</h2>
          <p class="text-center">berikut adalah presentase grafik dari jenis sampah yang pernah anda buang</p>
          <hr class="primary">
          <div class="col-md-7 col-sm-12 col-xs-12 col-md-offset-2">
            <div class="chart">
              <canvas id="kind"></canvas>
            </div>
          </div>
          <br>
          <div class="col-md-2">
            <div id="js-legend" class="chart-legend"></div>
          </div>
      </div>
    </div>
    <br/><br/>
</section>
<!--end grafik jenis sampah-->

<script>
var data = {
    labels: ["Maksimum inputan", "Minimum Inputan", "Rata-rata Inputan"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(255,99,132,0.2)",
            strokeColor: "rgba(255,99,132,1)",
            highlightFill: "rgba(255,99,132,0.4)",
            highlightStroke: "rgba(255,99,132,1)",
            data: [<?php echo $getdata_max->input_sampah; ?>,  <?php echo $getdata_min->input_sampah; ?> , <?php echo $getdata_avg->input_sampah;?>]
        }
    ]
};

var context = document.getElementById('weeks').getContext('2d');
var clientsChart = new Chart(context).Bar(data,{
  responsive : true,
  scaleShowVerticalLines : true,
  tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + ' Kilo' %>"
});

var data = [
    {
      value: <?php echo $getdata_cnt1->plastic; ?>,
      color:"#FF6384",
      label:"plastik"
    },
    {
      value : <?php echo $getdata_cnt2->paper; ?>,
      color : "#E7E9ED",
      label : "Kertas"
    },
    {
      value : <?php echo $getdata_cnt3->glass; ?>,
      color : "#FFCE56",
      label : "Kaca"
    },
    {
      value : <?php echo $getdata_cnt4->logam; ?>,
      color : "#FF8153",
      label : "logam"
    },
    {
      value : <?php echo $getdata_cnt5->leftover; ?>,
      color : "#4BC0C0",
      label : "Sisa Makanan"
    },
    {
      value : <?php echo $getdata_cnt6->other; ?>,
      color : "#4caf50",
      label : "Lainnya"
    }
    ];

  var options = {
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
      tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + '%' %>"
  }

  var ctx = document.getElementById("kind").getContext("2d");
  var kind = new Chart(ctx).Doughnut(data, options);
  document.getElementById('js-legend').innerHTML = kind.generateLegend();

var weekData = {
  labels : [<?php $no=0; foreach ($getdata_input as $row) {
                  $no++;
                  echo $no.',';
                    } ?>],
  datasets : [
    {
      label : "Grafik Produktifitas Anda",
      fillColor : "#b2dfdb",
      strokeColor : "#00796b",
      pointColor : "#fff",
      pointStrokeColor : "#004d40",
      data : [<?php foreach ($getdata_input as $row) {
                    echo $row->input_sampah.',';
      } ?>]
    }
  ]
}

var weeks = document.getElementById('diagram').getContext('2d');
new Chart(weeks).Line(weekData,{
  responsive : true,
  scaleShowVerticalLines : true,
  tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + ' Kilo' %>"
});

</script>

<div class="bottom" id="contact">
        <div class="container">
            <div class="col-md-8 col-sm-4">
                <h4>Pantau Sampah</h4>
            </div>
        </div>
    </div>

<!--end of footer-->

<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>asset/plugins/chartjs/Chart.min.js"></script>
<script src="<?php echo base_url()?>asset/js/scriptGrafik.js"></script>
<script src="<?php echo base_url()?>asset/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url()?>asset/js/jquery.fittext.js"></script>
<script src="<?php echo base_url()?>asset/js/wow.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url()?>asset/js/creative.js"></script>

</body>
</html>

