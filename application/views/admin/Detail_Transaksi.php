<?php
$session_id = $this->session->userdata('username');
$this->load->helper('text');
$this->load->helper('form');
$tax = 0.1 * $hasil->HARGA_SEWA;
$total_stl_pajak = $hasil->TOTAL_KESELURUHAN + $tax;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/admin/images/favicon.png">
    <title>Administrator Website Pemesanan Gedung Pernikahan</title>
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
    <div id="wrapper">
        <!-- ===== Top-Navigation ===== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="<?php echo site_url('admin/dashboard'); ?>">
                        <span>
                            <img src="<?php echo base_url(); ?>assets/layout/images/logo-nikahan.png" width="180px" alt="homepage" style="padding: 10px 10px;" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        <aside class="sidebar" role="navigation">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="side-menu">
                        <li>
                            <a class="waves-effect" href="<?php echo site_url('admin/dashboard') ?>" ><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu"> Dashboard </span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="<?php echo site_url('admin/list') ?>" ><i class="icon-user-follow fa-fw"></i> <span class="hide-menu"> List Pengguna </span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="<?php echo site_url('admin/gedung') ?>" ><i class="icon-book-open fa-fw"></i> <span class="hide-menu"> List Gedung </span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="<?php echo site_url('admin/catering') ?>" ><i class="icon-cup fa-fw"></i> <span class="hide-menu"> List Paket Catering </span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="<?php echo site_url('admin/pemesanan2') ?>" ><i class="icon-note fa-fw"></i> <span class="hide-menu"> List Pemesanan </span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="<?php echo site_url('admin/transaksi') ?>" ><i class="icon-envelope-letter fa-fw"></i> <span class="hide-menu"> Inbox Pemesanan</span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="<?php echo site_url('admin/pembayaran') ?>" ><i class="icon-credit-card fa-fw"></i> <span class="hide-menu"> Transaksi </span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-calculator fa-fw"></i> <span class="hide-menu"> Rekapitulasi </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo site_url('admin/rekap_aktivitas') ?>">Rekap Aktivitas</a></li>
                                <li><a href="<?php echo site_url('admin/rekap_transaksi') ?>">Rekap Transaksi</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/log_out') ?>" aria-expanded="false"><i class="icon-logout fa-fw"></i> <span class="hide-menu"> Log Out</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- /row -->
                            <!-- .row -->
                            <div class="row">
                            <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Detail Transaksi <?php echo $hasil->ID_PEMESANAN; ?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                        <div class="form-body">
                                            <h3 class="box-title">Informasi</h3>
                                            <hr class="m-t-0 m-b-40">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">ID Pemesanan:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> <?php echo $hasil->ID_PEMESANAN; ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Nama Gedung:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> <?php echo $hasil->NAMA_GEDUNG; ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Username:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> <?php echo $hasil->USERNAME; ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Pajak Gedung 10%:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> Rp. <?php echo number_format($tax) ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Tanggal Pemesanan:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> <?php $date = date_create($hasil->TANGGAL_PEMESANAN); echo date_format($date, 'd F Y') ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Paket Catering:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> <?php echo $hasil->NAMA_PAKET; ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Alamat Email:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> <?php echo $hasil->EMAIL; ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Jumlah Porsi:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> <?php echo $hasil->JUMLAH_CATERING; ?> Porsi </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <h3 class="box-title">Informasi Biaya</h3>
                                            <hr class="m-t-0 m-b-40">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Total Harga Catering:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> Rp. <?php echo number_format($hasil->TOTAL_HARGA); ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Harga Gedung:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> Rp. <?php echo number_format($hasil->HARGA_SEWA); ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Total Harga Gedung + Catering:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> Rp. <?php echo number_format($hasil->TOTAL_KESELURUHAN); ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Total Harga Keseluruhan (Gedung + Catering + Pajak):</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> Rp. <?php echo number_format($total_stl_pajak) ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Deskripsi Acara:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> <?php echo $details->DESKRIPSI_ACARA; ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Proposal Acara:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> <a href="<?php echo site_url('admin/admin_controls/download_proposal/'.$hasil->ID_PEMESANAN.'')?>"><?php echo $details->FILE_NAME; ?></a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <?php echo form_open('admin/detail_transaksi/'.$hasil->ID_PEMESANAN.''); ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Pilihan Aksi:</label>
                                                        <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="radio-inline p-0">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="status-proposal" id="ya" value="1" onclick="return showInput();">
                                                                    <label for="ya">Terima Proposal</label>
                                                                </div>
                                                            </label>
                                                            <label class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="status-proposal" id="tidak" value="2" onclick="return showInput();">
                                                                    <label for="tidak">Tolak Proposal </label>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                        <tr>
                                                        <input class="btn btn-success" name="submit" id="submit" tabindex="10" value="submit" onclick="return dialog();" type="submit">
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer t-a-c">
            Copyright © 2018 Pemesanan Gedung Pernikahan.
            </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
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
    <!-- jQuery peity -->
    <script src="<?php echo base_url(); ?>assets/admin/components/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/components/peity/jquery.peity.init.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url(); ?>assets/admin/components/styleswitcher/jQuery.style.switcher.js"></script>
    <script type="text/javascript">
            function dialog() {
                if(confirm("Lanjutkan? ")) {
                    return true;
                } else {
                    return false;
                }
            }
            function showInput() {
                var tolak = document.getElementById("tidak").checked;
                var terima = document.getElementById("ya").checked;
                if(tolak == true) {
                    document.getElementById("title").hidden = false;
                    document.getElementById("colon").hidden = false;
                    document.getElementById("remarks").hidden = false;
                } else if(terima == true) {
                    document.getElementById("title").hidden = true;
                    document.getElementById("colon").hidden = true;
                    document.getElementById("remarks").hidden = true;
                }
            }
        </script>
</body>

</html>