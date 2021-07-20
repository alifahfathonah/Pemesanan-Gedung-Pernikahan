<?php
$session_id = $this->session->userdata('username');
$this->load->helper('text');
$id_gedung = $this->uri->segment(3);
$tax = 0.1 * $result->HARGA_SEWA;
$tanggal_pesan = $result->TANGGAL_PEMESANAN;
$c_tanggal_pesan = str_replace('-', '/', $tanggal_pesan);
$min_refund = date('Y-m-d', time());
$perbedaan = date_diff(new DateTime($tanggal_pesan), new DateTime($min_refund));
$temp_id = substr($result->ID_PEMESANAN, 7);
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
                    <p class="section-subtitle">Detail Pemesanan Sewa Gedung</p>                    
                </div>
                <!--end col-md-12-->
            
            </div>
            <!--end row-->
            
            <!--begin row-->
			
            <div class="row">
                    <div class="col-lg-12" style="background: #ffffff; padding: 15px 15px; border-style: solid; border-width: 1px; border-color: #f9f9; border-radius: 10px;">
                    <div class="form-group">
                                    <form>
                                            <label for="id_pemesanan">ID Pemesanan</label>
                                            <input type="text" class="form-control" id="id_pemesanan" name="id_pemesanan" value="<?php echo $result->ID_PEMESANAN; ?>" disabled> </div>
                                        <div class="form-group">
                                            <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
                                            <input type="text" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" disabled value="<?php $date = date_create($result->TANGGAL_PEMESANAN); echo date_format($date, 'd F Y')?>" require> </div>
                                        <div class="form-group col-lg-4">
                                            <label for="paket_catering">Paket Catering</label>
                                            <input type="text" class="form-control" id="paket_catering" name="paket_catering" disabled value="<?php echo $result->NAMA_PAKET; ?>"> </div>
                                        <div class="form-group col-lg-4">
                                            <label for="jumlah_catering">Jumlah Pemesanan</label>
                                            <input type="text" class="form-control" id="jumlah_catering" name="jumlah_catering" disabled value="<?php echo $result->JUMLAH_CATERING; ?>"> </div>
                                        <div class="form-group col-lg-4">
                                            <label for="harga_catering">Harga Catering / Porsi</label>
                                            <input type="text" class="form-control" id="harga_catering" name="harga_catering" disabled value="Rp. <?php echo number_format($result->HARGA_SATUAN); ?>"> </div>
                                        <div class="form-group">
                                            <label for="total_catering">Total Harga Catering</label>
                                            <input type="text" class="form-control" id="total_catering" name="total_catering" disabled value="Rp. <?php echo number_format($result->TOTAL_HARGA); ?>"> </div>
                                        <div class="form-group">
                                            <label for="nama_gedung">Gedung Sewa</label>
                                            <input type="text" class="form-control" id="nama_gedung" name="nama_gedung" disabled value="<?php echo $result->NAMA_GEDUNG; ?>"> </div>
                                        <div class="form-group col-lg-4">
                                            <label for="harga_gedung">Total Harga Gedung</label>
                                            <input type="text" class="form-control" id="harga_gedung" name="harga_gedung" disabled value="Rp. <?php echo number_format($result->HARGA_SEWA); ?>"> </div>
                                        <div class="form-group col-lg-4">
                                            <label for="pajak_gedung">Pajak 10%</label>
                                            <input type="text" class="form-control" id="pajak_gedung" name="pajak_gedung" disabled value="Rp. <?php echo number_format($tax) ?>"> </div>
                                        <div class="form-group col-lg-4">
                                            <label for="harga_catering_gedung">Total Harga Gedung + Catering</label>
                                            <input type="text" class="form-control" id="harga_catering_gedung" name="harga_catering_gedung" disabled value="Rp. <?php echo number_format($result->TOTAL_KESELURUHAN); ?>"> </div>
                                        <div class="form-group">
                                            <label for="total_semua">Total Keseluruhan + Pajak</label>
                                            <input type="text" class="form-control" id="total_semua" name="total_semua" disabled value="Rp. <?php echo number_format($result->TOTAL_KESELURUHAN + $tax) ?>"> </div>
                                        <div class="form-group">
                                            <label for="deskripsi_acara">Deskripsi Acara</label>
                                            <input type="text" class="form-control" id="deskripsi_acara" name="deskripsi_acara" disabled value="<?php echo $result->DESKRIPSI_ACARA; ?>"> </div>
                                        <div class="form-group col-lg-6">
                                            <label for="status_pesanan">Status Pemesanan</label>
                                            <input type="text" class="form-control" id="status_pesanan" name="status_pesanan" disabled value="<?php echo $result->STATUS; ?>"> </div>
                                        <div class="form-group col-lg-6">
                                            <label for="catatan">Catatan</label>
                                            <input type="text" class="form-control" id="catatan" name="catatan" disabled value="<?php echo $result->REMARKS; ?>"> </div>

                                            <a href="<?php echo site_url('home/cancel-order/'.$temp_id.'') ?>" name="batal" id="batal" class="btn btn-success waves-effect waves-light m-r-10" onclick="return dialog();">Batalkan Pesanan</a>
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
<script type="text/javascript">
            var perbedaan = <?php echo $perbedaan->format('%d') ?>;
            function dialog() {
                if(perbedaan <= 7) {
                    if(confirm("Pembatalan anda kurang dari 7 hari, dana tidak akan direfund Lanjutkan?")) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    if(confirm("Pembatalan anda lebih dari 7 hari, dana akan dikembalikan Lanjutkan?")) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
</script>
</body>
</html>