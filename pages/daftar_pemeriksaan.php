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
                          <a href="dokter.php"><i class="fa fa-edit fa-fw"></i> Dokter</a>
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
                    <h1 class="page-header">Daftar Pemeriksaan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--Tambah data pasien-->
            <a data-toggle="modal" data-target="#TambahData" href="" class="btn btn-primary" style="margin-bottom:8px;">Tambah Pemeriksaan</a>
       
                                        <div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Tambah Data Pemeriksaan</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <form method="POST" >
                                                      <label><b>Jenis Pemeriksaan</b></label><br>
                                                      <input type="text" class="form-control" name="pemeriksaan" required><br>
                                                      <label><b>Biaya </b></label>
                                                      <!--<input type="text" class="form-control" name="goldar"  required><br>-->
                                                      <label><b>Klinik</b></label>
                                                      <input type="text" class="form-control" name="biayaklinik"  required><br>
                                                      <label><b>Biaya Dokter</b></label>
                                                      <input type="text" class="form-control" name="biayadokter"  required><br>
                                                      <label><b>Biaya Administrasi</b></label>
                                                      <input type="text" class="form-control" name="biayaadministrasi"  required><br>
                                                      <label><b>Total Biaya</b></label><br>
                                                      <input type="text" class="form-control" name="totalbiaya"  required><br>
                                                  
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
                                                  <input type="submit" class="btn btn-sm btn-success" value="Simpan" name="simpan"/>
                                                </div>
                                                </form>
                                                <?php
                                                if(@$_POST['simpan']){
                                                  $biayaklinik = @$_POST ['biayaklinik'];
                                                  $biayadokter = @$_POST ['biayadokter'];
                                                  $biayaadministrasi = @$_POST ['biayaadministrasi'];
                                                  
                                                  
                                                  mysqli_query($connect, "INSERT INTO informasi_pemeriksaan(biaya_klinik,biaya_dokter,biaya_administrasi) values('$biayaklinik','$biayadokter','$biayaadministrasi')") or die ($connect->error);
                                                    //header("location:?page=daftar_pasien");
                                                }


                                                ?>
                                              </div>
                                            </div>
                                          </div>
            <!--Tambah data pasien selesai-->

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th rowspan="2">ID Pemeriksaan</th>
                                        <th rowspan="2">Jenis Pemeriksaan</th>
                                        <th colspan="3">Biaya</th>
                                        <th rowspan="2">Total Biaya</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>Klinik</th>
                                        <th>Dokter</th>
                                        <th>Administrasi</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $sql = "SELECT * FROM informasi_pemeriksaan  ORDER BY id_pemeriksaan ASC" ;
                                      $jalan = mysqli_query($connect, $sql);
  
                                      while ($rows = mysqli_fetch_array($jalan)){
                                    ?>
                                    <tr>
                                        <td><?php echo $rows['id_pemeriksaan']; ?></td>
                                        <td><?php echo $rows['nama_pemeriksaan']; ?></td>
                                        <td><?php echo $rows['biaya_klinik']; ?></td>
                                        <td><?php echo $rows['biaya_dokter']; ?></td>
                                        <td><?php echo $rows['biaya_administrasi']; ?></td>
                                        <?php $tott = $rows['biaya_klinik']+$rows['biaya_dokter']+$rows['biaya_administrasi'];
                                                       ?>
                                        <td><?php echo $tott; ?></td>
                                        <!--Tampil data pemeriksaan selesai-->

                                        <!--Edit data pasien-->
                                        <td>
                                          <div>
                                            <a data-toggle="modal" data-target="#EditDesignerDataModal">
                                            <i class="fa fa-pencil fa-fw"></i>Edit
                                            </a>
                                          </div>
                                          <div class="modal fade" id="EditDesignerDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Edit Data Jenis Pemeriksaan</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <form action="/action_page.php">
                                                      
                                                      <label><b>Nama Pemeriksaan</b></label><br>
                                                      <input type="hidden" name="id" value="<?php echo $rows['id_pemeriksaan']; ?>" >
                                                      <input type="text" class="form-control" name="pasien" value="<?php echo $rows['nama_pemeriksaan']; ?>" required><br>
                                                      <label><b>Biaya :</b></label><br><br>
                                                      <!-- <input type="text" class="form-control" name="title" value="Wahyu" required><br> -->
                                                      <label><b>Klinik</b></label><br>
                                                      <input type="text" class="form-control" name="goldar" value="<?php echo $rows['biaya_klinik']; ?>" required><br>
                                                      <label><b>Dokter</b></label><br>
                                                      <input type="text" class="form-control" name="goldar" value="<?php echo $rows['biaya_dokter']; ?>" required><br>
                                                      <label><b>Administrasi</b></label><br>
                                                      <input type="text" class="form-control" name="goldar" value="<?php echo $rows['biaya_administrasi']; ?>" required><br>
                                                      <label><b>Total Biaya</b></label><br>
                                                      <?php
                                                        $total_biaya=$rows['biaya_klinik']+$rows['biaya_dokter']+$rows['biaya_administrasi'];
                                                      ?>
                                                      <input type="text" class="form-control" name="goldar" value="<?php echo $total_biaya; ?>" required><br>
                                          				</form>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
                                                  <button type="button" class="btn btn-sm btn-success">Simpan</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <a href=""><i class="fa fa-close fa-fw"></i>Delete</a>
                                          <?php
                                            };
                                          ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
