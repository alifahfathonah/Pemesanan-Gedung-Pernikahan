<?php
$session_id = $this->session->userdata('username');
$this->load->helper('text');
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
                        <?php if($result > 0): ?>
                            <a class="waves-effect" href="<?php echo site_url('admin/transaksi') ?>" ><i class="icon-envelope-letter fa-fw"></i> <span class="hide-menu"> Inbox Pemesanan <span class="label label-rounded label-primary pull-right"><?php echo $result ?></span></span></a>
                        <?php endif;?>
                            <?php if($result <= 0): ?>
                        <li>
                            <a class="waves-effect" href="<?php echo site_url('admin/transaksi') ?>" ><i class="icon-envelope-letter fa-fw"></i> <span class="hide-menu"> Inbox Pemesanan</span></a>
                        </li>
                        <?php endif; ?>
                        </li>
                        <li>
                        <?php if($get_transaction > 0): ?>
                            <a class="waves-effect" href="<?php echo site_url('admin/pembayaran') ?>" ><i class="icon-credit-card fa-fw"></i> <span class="hide-menu"> Transaksi <span class="label label-rounded label-primary pull-right"><?php echo $get_transaction ?></span></span></a>
                        <?php endif;?>
                            <?php if($get_transaction <= 0): ?>
                        <li>
                            <a class="waves-effect" href="<?php echo site_url('admin/pembayaran') ?>" ><i class="icon-credit-card fa-fw"></i> <span class="hide-menu"> Transaksi </span></a>
                        </li>
                        <?php endif; ?>
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
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Jadwal Gedung Ter-booking</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Pemesanan</th>
                                        <th>Gedung</th>
                                        <th>Username</th>
                                        <th>Tanggal Acara</th>
                                        <th>Status Pemesanan</th>
                                        <th>Detail</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; foreach($front_data as $data): ?>
                                    <?php $id_gedung = $data['ID_PEMESANAN']; ?>
                                    <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo "PMSN000".$id_gedung."" ?></td>
                                            <td><?php echo $data['NAMA_GEDUNG'] ?></td>
                                            <td><?php echo $data['USERNAME'] ?></td>
                                            <td><?php echo $data['TANGGAL_FINAL_PEMESANAN'] ?></td>
                                            <td><i><?php echo $data['FINAL_STATUS'] ?></i></td>
                                            <td>
                                            <a href="<?php echo site_url('admin/detail_pemesanan/PMSN000'.$id_gedung.'') ?>" class="btn btn-success waves-effect waves-light m-r-10">Lihat Detail</a>
                                            </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
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
</body>

</html>