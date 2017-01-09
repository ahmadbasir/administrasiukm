<?php $this->load->view('navbar') ?>

<!--carousel-->
  <div id="myCarousel" class="carousel slide carousel-fade latar" data-ride="carousel">
    <div class="row tengah">
        <div class="col-xs-offset-0 col-sm-offset-0 col-lg-offset-3 col-md-offset-4 col-xs-8 col-sm-6 col-md-6 col-lg-6">
            <div class="carousel-inner" role="listbox" id="item-carousel-homepage">
                <div class="item active">
                    <div class="carousel-content">
                        <div class="col-xs-offset-0 col-sm-offset-0 col-lg-offset-3 col-md-offset-4 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h1>Join with us Now</h1>
                            <a href="<?php echo site_url('file/register'); ?>" class="btn-reg">Sign Up</a>
                        </div>
                    </div>
                </div>
                <?php foreach ($tips_homepage as $row) { ?>
                <div class="item">
                    <div class="carousel-content">
                        <div class="col-xs-offset-2 col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-8 col-sm-6 col-md-6 col-lg-6">
                            <h1><strong><?php echo $row->title; ?></strong></h1>
                            <h4><?php echo $row->content; ?></h4>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <a class="carousel-control left" data-slide="prev" href="#myCarousel"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="carousel-control right" data-slide="next" href="#myCarousel"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!--ends of carousel-->

<section class="bar background-white">
    <div class="container">
     <div class="col-md-12">
                &nbsp;
        <div class="row" style="padding-bottom:20px">
            <div class="col-md-6">
                <img src="http://berita.suaramerdeka.com/konten/uploads/2014/10/20140306_233643_ilustrasi-palu-hakim-ok1-400x241.jpg">
            </div>
            <div class="col-md-6">
                <h1>Did You Know ??</h1>
                <p>
                Pemkab Sleman mulai menindak tegas warga yang kedapatan membuang sampah sembarangan.
                Tidak cukup hanya dengan memberi peringatan,
                Satpol PP menyeret tujuh pelaku pembuang sampah liar ke meja hijau.
                Masing-masing berinisial S dan YN warga Mlati,
                RE dan W warga Gamping, D dan IW warga Sleman,
                serta Ak warga Depok. Mereka dijerat dengan Perda Nomer 14 Tahun 2007 tentang
                Pengelolaan Sampah. Ancaman dendanya maksimal adalah Rp 5 juta. ...
                <a href="http://berita.suaramerdeka.com/pembuang-sampah-liar-disidang/">(More)</a>
                </p>
            </div>
        </div>
    </div>
</section>


<br />
<br />
<br />

<div class="section scrollspy" id="tentang">
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="col-sm-4 col-sm-offset-1">
                    <hr class="primary" />
                </div>
                <div class="col-sm-3 text-center">
                    <h2 class="title-section">About Pantau Sampah</h2>
                </div>
                <div class="col-sm-4">
                    <hr class="primary" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <i class="fa fa-4x fa-pencil wow bounceIn text-primary"></i>
                            <div class="about-box">
                                <h3 class="title-section">What is Pantau Sampah?</h3>
                                <p class="text-muted">Pantau Sampah is our project, dedicated to warn people about how dangerous garbage can be.</p>
                                <p class="text-muted">The solution is take care of the garbage carefully. Carefully means we throw garbage in
                                garbage dump, sorting the chemical waste from household waste, and doing recycle.
                                </p>
                            </div>
                        </div>         
                        <div class="col-md-3">
                            <i class="fa fa-4x fa-rocket wow bounceIn text-primary" data-wow-delay=".1s"></i>
                            <div class="about-box">
                                <h3 class="title-section">What Pantau Sampah function?</h3>
                                <p class="text-muted">This application can help people counting their own garbage and acoumulate it with other's people garbage.</p>
                                <p class="text-muted">In return we will acquire how many garbage this city produce, and we will now
                                what happend to that garbage.<br/>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-4x fa-gift wow bounceIn text-primary" data-wow-delay=".2s"></i>
                            <div class="about-box"> 
                                <h3 class="title-section">Useful Tips from Pantau Sampah</h3>
                                <p class="text-muted">We provide information and fun fact about garbage. The information we provide will be update
                                    regulary, so the information will be up to date.</p>
                                <p class="text-muted">From this information we hope people more aware about how garbage
                                    can affect our surrounding and our future.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-4x fa-group wow bounceIn text-primary" data-wow-delay=".3s"></i>
                            <div class="about-box">
                                <h3 class="title-section">Join Pantau Sampah now</h3><br />
                                <p class="text-muted">We can't educate people about garbage hazard alone. Joining Pantau Sampah can help us
                                tell you about garbage hazard and hopefully you will spread the information into your famiy, your friends,
                                your collagues, and your neigbour. Let's save our earth.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>-->
        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!--script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      </body>
</html>

<?php $this->load->view('footer') ?>


