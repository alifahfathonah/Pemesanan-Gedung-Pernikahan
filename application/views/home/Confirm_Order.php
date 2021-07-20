<?php
$session_id = $this->session->userdata('username');
$this->load->helper('text');
$this->load->helper('form');
$id_gedung = $this->uri->segment(4);
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Website Pemesanan Gedung Pernikahan</title>
    
    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/layout/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="<?php echo base_url(); ?>assets/layout/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/layout/css/style-magnific-popup.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:500,600,700" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/layout/css/pe-icon-7-stroke.css">

	<!-- Optional - Adds useful class to manipulate icon font display -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/layout/css/helper.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/layout/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/layout/css/owl.theme.default.min.css">
	
    <!-- Font Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/layout/images/fav-nikahan.png">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>assets/layout/js/html5shiv.js"></script>
      <script src="<?php echo base_url(); ?>assets/layout/js/respond.min.js"></script>
    <![endif]-->

    <!--headerIncludes-->
    
</head>

<body>

    <!--begin header -->
    <header class="header">

        <!--begin nav -->
        <nav class="navbar navbar-default navbar-fixed-bottom" style="padding-top:5px !important; padding-bottom:5px !important; background-color: #88AD45; border-color: #88AD45 !important;">
            
            <!--begin container -->
            <div class="container">
        
                <!--begin navbar -->
                <div class="navbar-header" style="padding-bottom: 10px;">

                    <button data-target="#navbar-collapse-03" data-toggle="collapse" class="navbar-toggle" type="button" style="border-color: #fff !important;">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar" style="background-color: #ffffff !important;"></span>
                        <span class="icon-bar" style="background-color: #ffffff !important;"></span>
                        <span class="icon-bar" style="background-color: #ffffff !important;"></span>
                    </button>
                        
                    <!--logo -->
                </div>
                        
                <div id="navbar-collapse-03" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-left">

                        <li><a href="<?php echo site_url('home/jadwal') ?>">Jadwal Gedung</a></li>

                        <li>
    				<a href="<?php echo site_url('home/pemesanan') ?>">Pemesanan</a>
				</li>

                        <li><a href="<?php echo site_url('home/view-catering') ?>">Menu Catering</a></li>

                        <li><a href="<?php echo site_url('pembayaran/frm_pembayaran') ?>">Konfirmasi Pembayaran</a></li>

					     <li><a href="<?php echo site_url('home/pembayaran') ?>">Transaksi</a></li>
                       
                    </ul>
                </div>
                <!--end navbar -->
                                    
            </div>
    		<!--end container -->
            
        </nav>
    	<!--end nav -->


        <!--begin nav -->
        <nav class="navbar navbar-default navbar-fixed-top">
            
            <!--begin container -->
            <div class="container">
        
                <!--begin navbar -->
                <div class="navbar-header">

                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        
                    <!--logo -->
                    <a href="<?php echo site_url('home/'.$session_id.'/') ?>#beranda"  class="navbar-brand" id="logo"><img src="<?php echo base_url(); ?>assets/layout/images/logo-nikahan.png"></a>

                </div>
                        
                <div id="navbar-collapse-02" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="<?php echo site_url('home/'.$session_id.'/') ?>#beranda" onclick="location.href = '<?php echo site_url('home/'.$session_id.'/') ?>#beranda'" class="waves-effect waves-teal">Beranda</a></li>

                        <li><a href="<?php echo site_url('home/'.$session_id.'/') ?>#tentang" onclick="location.href = '<?php echo site_url('home/'.$session_id.'/') ?>#tentang'">Tentang Kami</a></li>

                        <li><a href="<?php echo site_url('home/'.$session_id.'/') ?>#gedung" onclick="location.href = '<?php echo site_url('home/'.$session_id.'/') ?>#gedung'">List Gedung</a></li>

                        <li><a href="<?php echo site_url('home/'.$session_id.'/') ?>#prasmanan" onclick="location.href = '<?php echo site_url('home/'.$session_id.'/') ?>#prasmanan'">Catering</a></li>
						
                        <li><a href="#login" class="discover-btn" onclick="location.href = '<?php echo site_url('home/home/logout'); ?>';" id="login">Logout | <?php echo $session_id ?></a></li>
                       
                    </ul>
                </div>
                <!--end navbar -->
                                    
            </div>
    		<!--end container -->
            
        </nav>
    	<!--end nav -->
        
    </header>
    <!--end header -->

    <!--begin home section -->
    <section class="home-section" id="atasan" style="padding-top: 45px;padding-bottom: 45px;">

    </section>
    <!--end home section -->


    <!--begin blog -->
    <section class="section-grey" id="gedung">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-12-->
                <div class="col-md-10 col-md-offset-1 text-center">
                    <p class="section-subtitle">Form Pengajuan Sewa Gedung</p>                    
                </div>
                <!--end col-md-12-->
            
            </div>
            <!--end row-->
            
            <!--begin row-->
			
            <div class="row">
                    <div class="col-lg-12" style="background: #ffffff; padding: 15px 15px; border-style: solid; border-width: 1px; border-color: #f9f9; border-radius: 10px;">
                    <div class="row line-steps">
                                <div class="col-md-4 column-step start">
                                    <div class="step-number">1</div>
                                    <div class="step-title">Data Diri</div>
                                    <div class="step-info">Lengkapi data pemesanan</div>
                                </div>
                                <div class="col-md-4 column-step active">
                                    <div class="step-number">2</div>
                                    <div class="step-title">Verifikasi</div>
                                    <div class="step-info">Detail Acara & Proposal</div>
                                </div>
                                <div class="col-md-4 column-step finish">
                                    <div class="step-number">3</div>
                                    <div class="step-title">Selesai</div>
                                    <div class="step-info">Proposal dalam Verifikasi</div>
                                </div>
                            </div>

                                            <?php foreach($res as $res): ?>
                                        <div class="form-group">
                                            <label for="username">Nama User : </label>
                                            <?php echo $session_id; ?></div>
                                        <div class="form-group">
                                            <label for="tgl_pesan">Tanggal Pemesanan</label>
                                            <?php $date = date_create($res['TANGGAL_PEMESANAN']); echo date_format($date, 'd F Y') ?> </div>
                                        <div class="form-group">
                                            <label for="email">Alamat Email</label>
                                            <?php echo $res['EMAIL']; ?> </div>
                                        <div class="form-group">
                                            <label for="nama-gedung">Nama Gedung : </label>
                                            <?php echo $res['NAMA_GEDUNG']; ?></div>
                                        <div class="form-group">
                                            <label for="selected_catering">Paket Catering</label>
                                            <?php echo $res['NAMA_PAKET']; ?></div>
                                        <div class="form-group">
                                            <label for="jumlah-porsi">Jumlah Porsi</label>
                                            <?php echo $res['JUMLAH_CATERING'] ?></div>
                                        <div class="form-group">
                                            <label for="harga-satuan">Harga Satuan</label>
                                            Rp. <?php echo number_format($res['HARGA_SATUAN']) ?></div>
                                        <div class="form-group">
                                            <label for="total-harga">Total Harga Catering</label>
                                            Rp. <?php echo number_format($res['TOTAL_HARGA']) ?></div>
                                        <?php endforeach; ?>
                                        <?php echo form_open_multipart('home/home/upload_proposal'); ?>
                                        <div class="form-group">
                                            <label for="keperluan-acara">Keperluan Acara</label>
                                            <input type="text" class="form-control" name="deskripsi-acara" id="textarea1" require placeholder="Nikahan, Gathering, Meeting ..."> </div>
                                        <div class="form-group">
                                            <label for="proposal">Upload Proposal (extensi .pdf|.doc|.docx)</label>
                                            <input type="file" class="form-control" id="proposal" name="proposal" require> </div>  

                                            <input type="submit" name="action" id="submit" class="btn btn-success" value="Selanjutnya">
                                    </form>

                    </div>
                </div>
    
    </section>
    <!--end blog -->
       
    <!--begin footer -->
    <div class="footer">
            
        <!--begin container -->
        <div class="container">
        
            <!--begin row -->
            <div class="row">
            
                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">
                   
                    <p>Copyright © 2018 Pemesanan Gedung Pernikahan. Designed by <a href="#" target="_blank">Tomodachi Tech</a></p>
                    
                </div>
                <!--end col-md-6 -->
                
            </div>
            <!--end row -->
            
        </div>
        <!--end container -->
                
    </div>
    <!--end footer -->


<!-- Load JS here for greater good =============================-->
<script src="<?php echo base_url(); ?>assets/layout/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/layout/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/layout/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/layout/js/jquery.scrollTo-min.js"></script>
<script src="<?php echo base_url(); ?>assets/layout/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/layout/js/jquery.nav.js"></script>
<script src="<?php echo base_url(); ?>assets/layout/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/layout/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/waves.js"></script>

    <!-- Date Picker Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/admin/components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/admin/components/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script>
            function onclinik() {
                if(document.getElementById('ya').checked) {
                    $(document).ready(function() {
                        document.getElementById('selected_catering').disabled=false;
                        document.getElementById('jumlah-porsi').disabled=false;
                    }); 
                }
            }
            function onclinik2() {
                if(document.getElementById('tidak').checked) {
                    $(document).ready(function() {
                        document.getElementById('selected_catering').disabled=true;
                        document.getElementById('jumlah-porsi').disabled=true;
                    });                    
                }
            }
        </script>
</body>
</html>