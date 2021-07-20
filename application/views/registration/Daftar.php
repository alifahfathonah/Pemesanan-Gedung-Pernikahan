<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/layout/images/fav-nikahan.png">
    <title>Registrasi - Website Pemesanan Gedung Pernikahan</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="<?php echo base_url(); ?>assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <!-- ===== Animation CSS ===== -->
    <link href="<?php echo base_url(); ?>assets/admin/css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="<?php echo base_url(); ?>assets/admin/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="mini-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box" style="width: 550px !important;">
            <div class="white-box form-horizontal form-material">
				<?php echo form_open('registration/status'); ?>
                    <h3 class="box-title m-b-20">Silahkan Registrasi.</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input id="username" name="username" class="form-control" type="text" required="" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input id="nama_lengkap" name="nama_lengkap" class="form-control" type="text" required="" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input id="email" name="email" class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input id="password" name="password" class="form-control" type="password" required="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="confirm_pass" name="confirm_pass" class="form-control" type="password" required="" placeholder="Konfirmasi Password">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input id="no_telepon" name="no_telepon" class="form-control" type="text" required="" placeholder="No. Telepon">
                        </div>
                    </div>
					<div class="form-group ">
						<div class="col-xs-3" style="padding-top:10px !important;">
                            Tanggal Lahir :
                        </div>
                        <div class="col-xs-9">
                            <input id="dob" name="dob" class="form-control" type="date" required="" placeholder="Tanggal Lahir">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <textarea class="form-control" required="" cols="50" rows="6" name="alamat" placeholder="Alamat Lengkap"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">Menyetujui <a href="#">Syarat & Ketentuan</a> yang berlaku.</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Registrasi</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Sudah punya akun? <a href="<?php echo base_url(); ?>index.php/login" class="text-primary m-l-5"><b>Login disini</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/admin/components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/sidebarmenu.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/admin/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url(); ?>assets/admin/components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>