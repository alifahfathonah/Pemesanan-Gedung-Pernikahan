<?php
$session_id = $this->session->userdata('username');
$this->load->helper('text');
$user = $this->uri->segment(3);
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
				<?php if($flag > 0): ?>
                    <a href="<?php echo site_url('home/pemesanan') ?>">Pemesanan<span class="new badge"><?php echo $flag ?></span></a>
                <?php endif;?>
                <?php if($flag <= 0): ?>
				<a href="<?php echo site_url('home/pemesanan') ?>">Pemesanan</a>
				<?php endif; ?>
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
                    <p class="section-subtitle">Laporan Pemesanan Gedung Pernikahan</p>                    
                </div>
                <!--end col-md-12-->
            
            </div>
            <!--end row-->
            
            <!--begin row-->
			
            <div class="row">
                    <div class="col-lg-12" style="background: #ffffff; padding: 15px 15px; border-style: solid; border-width: 1px; border-color: #f9f9; border-radius: 10px;">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table id="pemesanan" class="table">
                                    <thead>
                                    <tr>
                                        <th>ID Pemesanan</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Paket Catering</th>
                                        <th>Nama Gedung</th>
                                        <th>Satus Pemesanan</th>
                                        <th>Detail</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php foreach($res as $row): 
                                        $id_pemesanan = $row['ID_PEMESANAN'];?>
                                            <td>
                                                <?php echo $id_pemesanan; ?>
                                            </td>
                                            <td>
                                                <?php $date = date_create($row['TANGGAL_PEMESANAN']); echo date_format($date, 'd F Y') ?>
                                            </td>
                                            <td>
                                                <?php echo $row['NAMA_PAKET']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['NAMA_GEDUNG']; ?>
                                            </td>
                                            <td>
                                            <?php
                                                $status = $row['STATUS'];
                                                if($status == "DITOLAK") {
                                                    echo '<font color="red">'.$status.'</font>';
                                                } else if($status == "DISETUJUI") {
                                                    echo '<font color="blue">'.$status.'</font>';
                                                } else if($status == "PENDING") {
                                                    echo '<font color="black">'.$status.'</font>';
                                                } else {
                                                    echo $status;
                                                }
                                            ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url('home/pemesanan/details/'.$id_pemesanan.''); ?>" class="btn btn-success waves-effect waves-light m-r-10">Lihat Detail</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?php if($rows < 1): ?>
                                    <p class="section-subtitle" align="center">------------- <?php echo $no_data; ?> -----------</p>
                                <?php endif; ?>
                            </div>
                        </div>
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

</body>
</html>