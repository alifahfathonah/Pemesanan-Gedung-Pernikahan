<?php
$session_id = $this->session->userdata('username');
$this->load->helper('text');
$no = 1;
$first_date_period = date_create($first_period);
$second_date_period = date_create($last_period);
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
                        <div class="white-box p-0">
                            <!-- .left-right-aside-column-->
                            <div class="page-aside">
                                <div class="right-aside">
                                    <div class="right-page-header">
                                        <h3 class="box-title">Rekap Aktivitas </h3> </div>
                                    <div class="clearfix"></div>
                                    <div class="scrollable">
                                        <div class="table-responsive">
                                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Gedung</th>
                                                    <th>Tanggal Pemesanan</th>
                                                    <th>Tanggal Approval</th>
                                                    <th>Acara</th>
                                                    <th>Nama Pemesan</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($hasil as $row): ?>
                                                <?php $date = date_create($row['TANGGAL_FINAL_PEMESANAN']) ?>
                                                <?php $date_approval = date_create($row['TANGGAL_APPROVAL']) ?>
                                                <tr>
                                                    <td><?php echo $no++?></td>
                                                    <td><?php echo $row['NAMA_GEDUNG']?></td>
                                                    <td><?php echo date_format($date, 'd M Y')?></td>
                                                    <td><?php echo date_format($date_approval, 'd M Y')?></td>
                                                    <td><?php echo $row['DESKRIPSI_ACARA']?></td>
                                                    <td><?php echo $row['NAMA_LENGKAP']?></td>
                                                </tr>
                                                <?php endforeach;?>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td><b>Periode:</b></td>
                                                    <td colspan="2"><?php echo date_format($first_date_period, 'd F Y') ?></td>
                                                    <td><b>sampai</b></td>
                                                    <td colspan="2"><?php echo date_format($second_date_period, 'd F Y') ?></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="<?php echo site_url('admin/kegiatan_download_pdf/'.$first_period.'/'.$last_period.'') ?>">Ekspor ke PDF</a>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- .left-aside-column-->
                            </div>
                            <!-- /.left-right-aside-column-->
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
            var startDate = document.getElementById("start_date");
            var label = document.getElementById("labelDari");
            var labelsampai = document.getElementById("labelSampai");
            var endDate = document.getElementById("end_date");
            var btnProses = document.getElementById("btnProses");
            var btnFilter = document.getElementById("btnFilter");
            function unhideElement() {
                if(startDate.hidden = true) {
                    startDate.hidden = false;
                    label.hidden = false;
                    labelsampai.hidden = false;
                    endDate.hidden = false;
                    btnProses.hidden = false
                    btnFilter.disabled = true;

                } else {
                    hideElement();
                }
            }
            function hideElement() {
                startDate.hidden = true;
                label.hidden = true;
                endDate.hidden = true;
                btnProses.hidden = true;
            } 
            function btnProsesAlert() {
                if(startDate.value == "") {
                    alert("Harap Isi Form Tanggal!");
                    return false;
                } else if(endDate.value == "") {
                    alert("Harap Isi Form Tanggal!");
                    return false;
                }
            }
        </script>


</body>

</html>