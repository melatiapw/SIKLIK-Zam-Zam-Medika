<!DOCTYPE html>
<html lang="en">

<?php 
    include 'connect.php';
    if(!isset($_SESSION['login_user']))
        header("Location: login.php");
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siklik Zam-Zam Medika</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
        date_default_timezone_set('Asia/Jakarta');
        //$date = date('Y-m-d H:i:s');
        //echo $date;

    ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sistem Informasi Klinik Zam-Zam Medika</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>

                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Pasien<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>

                                    <a href="daftar_pasien.php">Daftar Pasien</a>

                                </li>
                                <li>
                                    <a href="buku_pasien.php">Buku Register Pasien</a>
                                </li>
                                <li>
                                    <a href="laporan_kunjungan.php">Laporan Kunjungan Pasien</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="laporan_keuangan.php"><i class="fa fa-edit fa-fw"></i>Laporan Keuangan</a>
                        </li>
                        <li>

                            <a href="daftar_dokter.php"><i class="fa fa-edit fa-fw"></i> Dokter</a>
                        </li>
                        <li>
                            <a href="obst_pemeriksaan.php"><i class="fa fa-sitemap fa-fw"></i>Obat dan Pemeriksaan<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="daftar_obat.php">Daftar Obat</a>
                                </li>
                                <li>
                                    <a href="daftar_pemeriksaan.php">Daftar Jenis Pemeriksaan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php 
                                        $pasien_query = "SELECT * FROM pasien";
                                        $query = mysqli_query($connection, $pasien_query);
                                        $total_pasien = mysqli_num_rows($query);
                                        echo $total_pasien;
                                    ?></div>
                                    <div>Pasien Terdaftar</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php 
                                        $bulan_query = "SELECT * FROM pasien WHERE MONTH(tanggal_daftar)=MONTH(CURDATE())";
                                        $b_query = mysqli_query($connection, $bulan_query);
                                        $total_bulan_query = mysqli_num_rows($b_query);
                                        echo $total_bulan_query;
                                    ?></div>
                                    <div>Pasien Bulan Ini</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1,7 Juta</div>
                                    <div>Pemasukan</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1,5 Juta</div>
                                    <div>Pengeluaran</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                

                <div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Frekuensi Jenis Pengobatan
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="flot-chart">
                              <div class="flot-chart-content" id="pie-chart-treatment"></div>
                          </div>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Login Pegawai
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pegawai</th>
                                        <th>Waktu Logout</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            $i = 1;
                                            $sql = "SELECT * FROM user WHERE username != '$user_check'";
                                            $data = mysqli_query($connection, $sql);
                                            if (mysqli_num_rows($data)==0){
                                                echo 'Belum ada user lain terdaftar';
                                            }else{
                                                while($d = mysqli_fetch_assoc($data)){
                                    ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $d['username'] ?></td>
                                        <td><?php echo $d['last_logout'] ?></td>
                                    </tr>
                                    <?php
                                            $i++;

                                            };
                                        };
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
              </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


    <!-- Query buat data pie chart -->
    <?php
        $r_medis_query1 = "SELECT * FROM rekam_medis WHERE id_pemeriksaan = '1'";
        $query1 = mysqli_query($connection, $r_medis_query1);
        $var1 = mysqli_num_rows($query1);

        $r_medis_query2 = "SELECT * FROM rekam_medis WHERE id_pemeriksaan = '2'";
        $query2 = mysqli_query($connection, $r_medis_query2);
        $var2 = mysqli_num_rows($query2);

        $r_medis_query3 = "SELECT * FROM rekam_medis WHERE id_pemeriksaan = '3'";
        $query3 = mysqli_query($connection, $r_medis_query3);
        $var3 = mysqli_num_rows($query3);

        $r_medis_query4 = "SELECT * FROM rekam_medis WHERE id_pemeriksaan = '4'";
        $query4 = mysqli_query($connection, $r_medis_query4);
        $var4 = mysqli_num_rows($query4);

        $r_medis_query5 = "SELECT * FROM rekam_medis WHERE id_pemeriksaan = '5'";
        $query5 = mysqli_query($connection, $r_medis_query5);
        $var5 = mysqli_num_rows($query5);

        $r_medis_query6 = "SELECT * FROM rekam_medis WHERE id_pemeriksaan = '6'";
        $query6 = mysqli_query($connection, $r_medis_query6);
        $var6 = mysqli_num_rows($query6);

        $r_medis_query7 = "SELECT * FROM rekam_medis WHERE id_pemeriksaan = '7'";
        $query7 = mysqli_query($connection, $r_medis_query7);
        $var7 = mysqli_num_rows($query7);
    ?>

    <script type="text/javascript">
        var jenis1 = <?php echo $var1 ?>;
        var jenis2 = <?php echo $var2 ?>;
        var jenis3 = <?php echo $var3 ?>;
        var jenis4 = <?php echo $var4 ?>;
        var jenis5 = <?php echo $var5 ?>;
        var jenis6 = <?php echo $var6 ?>;
        var jenis7 = <?php echo $var7 ?>;

    </script>
</body>

</html>
