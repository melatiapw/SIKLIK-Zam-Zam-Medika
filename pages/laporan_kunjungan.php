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

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                      <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                          <a href="obat_pemeriksaan.php"><i class="fa fa-sitemap fa-fw"></i>Obat dan Pemeriksaan<span class="fa arrow"></span></a>
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
                    <h1 class="page-header">Laporan Kunjungan Pasien</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="col-lg-12">
              <div class="panel-body">
                <div class="flot-chart">
                  <div class="flot-chart-content" id="flot-line-chart"></div>
                </div>
              </div>
            </div>
                    <!-- /.panel -->
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Query buat data line chart -->
    <?php
        $bulan_query1 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='1'";
        $b_query1 = mysqli_query($connection, $bulan_query1);
        $b1 = mysqli_num_rows($b_query1);

        $bulan_query2 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='2'";
        $b_query2 = mysqli_query($connection, $bulan_query2);
        $b2 = mysqli_num_rows($b_query2);

        $bulan_query3 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='3'";
        $b_query3 = mysqli_query($connection, $bulan_query3);
        $b3 = mysqli_num_rows($b_query3);

        $bulan_query4 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='4'";
        $b_query4 = mysqli_query($connection, $bulan_query4);
        $b4 = mysqli_num_rows($b_query4);

        $bulan_query5 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='5'";
        $b_query5 = mysqli_query($connection, $bulan_query5);
        $b5 = mysqli_num_rows($b_query5);

        $bulan_query6 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='6'";
        $b_query6 = mysqli_query($connection, $bulan_query6);
        $b6 = mysqli_num_rows($b_query6);

        $bulan_query7 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='7'";
        $b_query7 = mysqli_query($connection, $bulan_query7);
        $b7 = mysqli_num_rows($b_query7);

        $bulan_query8 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='8'";
        $b_query8 = mysqli_query($connection, $bulan_query8);
        $b8 = mysqli_num_rows($b_query8);

        $bulan_query9 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='9'";
        $b_query9 = mysqli_query($connection, $bulan_query9);
        $b9 = mysqli_num_rows($b_query9);

        $bulan_query10 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='10'";
        $b_query10 = mysqli_query($connection, $bulan_query10);
        $b10 = mysqli_num_rows($b_query10);

        $bulan_query11 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='11'";
        $b_query11 = mysqli_query($connection, $bulan_query11);
        $b11 = mysqli_num_rows($b_query11);

        $bulan_query12 = "SELECT * FROM pasien WHERE YEAR(tanggal_daftar)=YEAR(CURDATE()) AND MONTH(tanggal_daftar)='12'";
        $b_query12 = mysqli_query($connection, $bulan_query12);
        $b12 = mysqli_num_rows($b_query12);

        $pasien_query = "SELECT * FROM pasien";
        $query = mysqli_query($connection, $pasien_query);
        $total_pasien = mysqli_num_rows($query);
    ?>

    <script type="text/javascript">
        var jan = <?php echo $b1 ?>;
        var feb = <?php echo $b2 ?>;
        var mar = <?php echo $b3 ?>;
        var apr = <?php echo $b4 ?>;
        var mei = <?php echo $b5 ?>;
        var jun = <?php echo $b6 ?>;
        var jul = <?php echo $b7 ?>;
        var aug = <?php echo $b8 ?>;
        var sep = <?php echo $b9 ?>;
        var okt = <?php echo $b10 ?>;
        var nov = <?php echo $b11 ?>;
        var des = <?php echo $b12 ?>;

        var tot = <?php echo $total_pasien ?>;
    </script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
