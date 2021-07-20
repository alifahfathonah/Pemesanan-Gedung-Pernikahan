<?php
$session_id = $this->session->userdata('username');
$this->load->helper('text');
$user = $this->uri->segment(2);
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

                        <li><a href="<?php echo site_url('home/jadwal') ?>" onclick="location.href = '<?php echo site_url('home/jadwal'); ?>';">Jadwal Gedung</a></li>

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
                    <a href="<?php echo site_url('home/'.$session_id.'/') ?>#beranda" class="navbar-brand" id="logo"><img src="<?php echo base_url(); ?>assets/layout/images/logo-nikahan.png"></a>

                </div>
                        
                <div id="navbar-collapse-02" class="collapse navbar-collapse" style="font-color: #000;">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="<?php echo site_url('home/'.$session_id.'/') ?>#beranda" class="waves-effect waves-teal">Beranda</a></li>

                        <li><a href="<?php echo site_url('home/'.$session_id.'/') ?>#tentang">Tentang Kami</a></li>

                        <li><a href="<?php echo site_url('home/'.$session_id.'/') ?>#gedung">List Gedung</a></li>

                        <li><a href="<?php echo site_url('home/'.$session_id.'/') ?>#prasmanan">Catering</a></li>
						
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
    <section class="home-section" id="beranda">

		<!--begin container -->
		<div class="container">

	        <!--begin row -->
	        <div class="row">
	          
	            <!--begin col-md-7-->
	            <div class="col-md-7 padding-top-40">

	          		<h1>Anda Sedang Mencari Gedung Untuk Keperluan Pernikahan?</h1>

	          		<p>Kami menyediakan berbagai gedung pernikahan pilihan yang ada di wilayah Kota Bandung.</p>

	        		<ul class="home-benefits">
						<li><i class="fa fa-check"></i> Terdapat banyak pilihan Gedung.</li>
						<li><i class="fa fa-check"></i> Lokasi Strategis.</li>
						<li><i class="fa fa-check"></i> Tersedia paket catering.</li>
						<li><i class="fa fa-check"></i> Gratis konsultasi seputar Budget & Lokasi.</li>
					</ul>

	            </div>
	            <!--end col-md-7-->
	       
				<!--begin col-md-5-->
	            <div class="col-md-5">

	          		<!--begin register-form-wrapper-->
	          		<div class="register-form-wrapper">

		          		<h3>Hubungi kami untuk mendapatkan Penawaran</h3>

	                    <!--begin form-->
	                    <div>
	                         
	                        <!--begin success message -->
	                        <p class="register_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
	                        <!--end success message -->
	                        
	                        <!--begin register form -->
	                        <form class="register-form register" action="<?php echo base_url(); ?>assets/layout/php/register.php" method="post">
	                            
	                
	                            <input class="register-input white-input" required="" name="register_names" placeholder="Nama Lengkap*" type="text">
	                        
	                            <input class="register-input white-input" required="" name="register_email" placeholder="Alamat Email*" type="email">

	                            <select class="register-input white-input" required="" name="register_ticket">
	                                <option value="Konsultasi">Konsultasi</option>
	                                <option value="Saran & Masukan">Saran & Masukan</option>
	                                <option value="Seputar Gedung Pernikahan">Seputar Gedung Pernikahan</option>
	                            </select>

								<textarea class="register-textarea" required="" name="pesan" placeholder="Masukan pesan anda disini..."></textarea>
	                           
	                            <input value="Kirim" class="register-submit-top" type="submit">
	                                
	                        </form>
	                        <!--end register form -->
	                        
	                    </div>
	                    <!--end form-->

                    </div>
                    <!--end register-form-wrapper-->

	            </div>
	            <!--end col-md-5-->

	        </div>
	        <!--end row -->

		</div>
		<!--end container -->

    </section>
    <!--end home section -->

    <!--begin section-grey -->
    <section class="section-grey" id="tentang">

		<!--begin container -->
		<div class="container">

	        <!--begin row -->
	        <div class="row">

				<!--begin col-md-12 -->
				<div class="col-md-12 text-center">

					<h2 class="section-title">Mengapa harus kami?</h2>

					<p class="section-subtitle">Terdapat beberapa kelebihan yang ada di aplikasi kami<br />diantaranya adalah seperti dibawah ini</p>
					
				</div>
				<!--end col-md-12 -->

				<!--begin col-md-4 -->
				<div class="col-md-4">

					<div class="main-services">

						<img src="<?php echo base_url(); ?>assets/layout/images/main-service1.png" class="width-100" alt="pic">

						<h3>List Gedung Banyak</h3>

						<p>Kami mempunyai kerjasama dengan berbagai pemilik gedung yang dapat di sewa untuk berbagai acara yang anda butuhkan.</p>
						
					</div>

				</div>
				<!--end col-md-4 -->

				<!--begin col-md-4 -->
				<div class="col-md-4">

					<div class="main-services">

						<img src="<?php echo base_url(); ?>assets/layout/images/main-service2.png" class="width-100" alt="pic">

						<h3>Konsultasi Online</h3>

						<p>Anda dapat melakukan konsultasi terlebih dahulu untuk mendapatkan informasi yang rinci mengenai gedung dan biaya.</p>
						
					</div>

				</div>
				<!--end col-md-4 -->

				<!--begin col-md-4 -->
				<div class="col-md-4">

					<div class="main-services">

						<img src="<?php echo base_url(); ?>assets/layout/images/main-service3.png" class="width-100" alt="pic">

						<h3>Mudah & Cepat</h3>

						<p>Aplikasi pemesanan kami dapat digunakan dengan mudah, anda hanya tinggal memilih gedung dan kami yang mengaturnya.</p>
						
					</div>

				</div>
				<!--end col-md-4 -->
	       
	        </div>
	        <!--end row -->
			
		</div>
		<!--end container -->

    </section>
    <!--end section-grey -->

  	<!--begin testimonials section -->
  	<section class="section-lyla">

	    <!--begin container -->
	    <div class="container">

	      <!--begin row -->
	      <div class="row">
	        
		        <!--begin col-md-10 -->
		        <div class="col-md-8 col-md-offset-2">

		        	<!--begin owl carousel -->
		        	<div id="owl1" class="owl-carousel owl-theme">

						<!--begin testim-inner -->
						<div class="testim-inner">

							<img src="<?php echo base_url(); ?>assets/layout/images/testimoni-1.jpg" alt="testimonials" class="testim-img">
							
							<p>The attention of a traveller, should be particularly turned, in the first place, to the various works of Nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>

							<h6>Jennifer Smith<span class="job-text"> - Web Designer</span></h6>

						</div>
						<!--end testim-inner -->

						<!--begin testim-inner -->
						<div class="testim-inner">

							<img src="<?php echo base_url(); ?>assets/layout/images/testimoni-2.jpg" alt="testimonials" class="testim-img">
							
							<p>The attention of a traveller, should be particularly turned, in the first place, to the various works of Nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>

							<h6>John Doe<span class="job-text"> -  General Manager</span></h6>

						</div>
						<!--end testim-inner -->

					</div>
					<!--end owl carousel -->

					<!--begin owl carousel -->
					<div class="owl-dots">

						<div class="owl-dot active"><span></span></div>

						<div class="owl-dot"><span></span></div>

						<div class="owl-dot"><span></span></div>

					</div>
					<!--end owl carousel -->

		        </div>
		        <!--end-col-md-10 -->

	      	</div>
	      	<!--end row -->

	    </div>
	    <!--end container -->

  	</section>
  	<!--end testimonials section -->

    <!--begin blog -->
    <section class="section-grey" id="gedung">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-12-->
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2 class="section-title">List Gedung Terbaru</h2>
                    
                    <div class="separator_wrapper">
                        <i class="icon icon-star-two blue"></i>
                    </div>
            
                    <p class="section-subtitle">Terdapat berbagai gedung yang bisa anda pilih<br />untuk keperuan acara pernikahan, gathering dan juga acara lainnya.</p>
                </div>
                <!--end col-md-12-->
            
            </div>
            <!--end row-->
            
            <!--begin row-->
			
            <div class="row">
			<?php if(isset($res)){ foreach($res as $row):
            $path = $row['PATH']; $img_name = $row['IMG_NAME']; ?>  

                <!--begin col-sm-3 -->
                <div class="col-sm-3">
                    
                    <!--begin blog-item -->
                    <div class="blog-item">
                        
                        <!--begin popup image -->
                        <div class="popup-wrapper">
                            <div class="popup-gallery">
                                <a href="<?php echo site_url('home/details/'.$row['ID_GEDUNG']) ?>">
                                	<img src="<?php echo $path . $img_name; ?>" class="width-100" alt="pic">
                                	<span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                </a>
                            </div>
                        </div>
                        <!--end popup image -->
                            
                        <!--begin blog-item_inner -->
                        <div class="blog-item-inner">
                        
                            <h3 class="blog-title"><a href="<?php echo site_url('home/details/'.$row['ID_GEDUNG']) ?>"><?php echo $row['NAMA_GEDUNG']; ?></a></h3>
                            
                            <a href="<?php echo site_url('home/details/'.$row['ID_GEDUNG']) ?>" class="blog-icons"><i class="fa fa-tags"></i>ID: <?php echo $row['ID_GEDUNG']; ?></a>
                            
                            <a href="<?php echo site_url('home/details/'.$row['ID_GEDUNG']) ?>" class="blog-icons last"><i class="fa fa-user"></i><?php echo $row['KAPASITAS']; ?> Orang</a>
                            
                            <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>
                            <a href="#detail" class="discover-btn" onclick="location.href = '<?php echo site_url('home/details/'.$row['ID_GEDUNG']) ?>';" id="login">Detail Gedung</a>                      
                        </div>
                        <!--end blog-item-inner -->
                        
                    </div>
                    <!--end blog-item -->
                      
                </div>
				<?php endforeach; }?>  
                <!--end col-sm-3-->
                
    
        </div>
        <!--end container-->
    
    </section>
    <!--end blog -->

	<!--begin pricing section -->
	<section class="section-white bottom-shape z-100" id="prasmanan">

<!--begin container -->
<div class="container">

	<!--begin row -->
	<div class="row">

		<!--begin col-md-12 -->
		<div class="col-md-12 text-center padding-bottom-40">

			<h2 class="section-title">Daftar Catering</h2>

			<p class="section-subtitle">Kami juga menyediakan berbagai menu catering<br />pilihan yang dapat anda pesan sesuai dengan kuota / jumlah pengunjung yang ditentukan.</p>
			
		</div>
		<!--end col-md-12 -->

		<?php foreach($cat as $row): ?>
                    <div class="col-lg-4">
                        <div class="well">
                            <h4><?php echo $row['NAMA_PAKET'] ?></h4>
                            <div class="table-responsive">
                            <table class="table">
                                <tr>
                                <td><b>Menu Pembuka</b></td>
                                <td>:</td>
                                <td><?php echo $row['MENU_PEMBUKA'] ?></td>
                                </tr>
                                <tr>
                                <td><b>Menu Utama</b></td>
                                <td>:</td>
                                <td><?php echo $row['MENU_UTAMA'] ?></td>
                                </tr>
                                <tr>
                                <td><b>Menu Penutup</b></td>
                                <td>:</td>
                                <td><?php echo $row['MENU_PENUTUP'] ?></td>
                                </tr>
                                <tr>
                                <td><b>Harga Per Porsi</b></td>
                                <td>:</td>
                                <td><?php echo "Rp. " .number_format($row['HARGA']) ?></td>
                                </tr>
                            </table>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
	</div>
	<!--end row -->

</div>
<!--end container -->

</section>
<!--end pricing section -->
       
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


</body>
</html>