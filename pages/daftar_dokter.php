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
                    <h1 class="page-header">Daftar Dokter</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!--Tambah data pasien-->
            <a data-toggle="modal" data-target="#TambahData" href="" class="btn btn-primary" style="margin-bottom:8px;">Tambah Dokter</a>

                                        <div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Tambah Dokter</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <form method="POST" >
                                                      <label><b>Nama Dokter</b></label><br>
                                                      <input type="text" class="form-control" name="namadokter"  required><br>
                                                      <label><b>No HP Dokter</b></label><br>
                                                      <input type="text" class="form-control" name="hpdokter"  required><br>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
                                                  <input type="submit" class="btn btn-sm btn-success" value="Simpan" name="simpan"/>
                                                </div>
                                                </form>
                                                <?php
                                                if(@$_POST['simpan']){
                                                  $namadokter = @$_POST ['namadokter'];
                                                  $hpdokter = @$_POST ['hpdokter'];
                                                  mysqli_query($connect, "INSERT INTO dokter(nama_dokter,no_telpon_dokter) values('$namadokter','$hpdokter')") or die ($connect->error);
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
                                        <th>ID Dokter</th>
                                        <th>Nama Dokter</th>
                                        <th>No HP</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                      <?php
                                        $sql = "SELECT * FROM dokter  ORDER BY id_dokter ASC" ;
                                        $jalan = mysqli_query($connect, $sql);
                                        while ($rows = mysqli_fetch_array($jalan)){
                                      ?>
                                      <tr>
                                        <td><?php echo $rows['id_dokter']; ?></td>
                                        <td><?php echo $rows['nama_dokter']; ?></td>
                                        <td><?php echo $rows['no_telpon_dokter']; ?></td>
                                        <td>
                                        <!--Tampil data pasien selesai-->

                                        <!--Edit data dokter-->
                                          <div>
                                            <a href="#edit<?php echo $rows['id_dokter']; ?>" data-toggle="modal"
                                            class="btn btn-info" style="margin:8px;">Edit</a>
                                          </div>

                                          <div class="modal fade" id="edit<?php echo $rows['id_dokter'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Edit Data Dokter</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <form method="POST">
                                                    <label><b>Nama Dokter</b></label><br>
                                                    <input type="hidden" name="id" value="<?php echo $rows['id_dokter']; ?>" >
                                                    <input type="text" class="form-control" name="namadokter" value="<?php echo $rows['nama_dokter']; ?>" required><br>
                                                    <label><b>No HP Dokter</b></label><br>
                                                    <input type="number" class="form-control" name="hpdokter" value="<?php echo $rows['no_telpon_dokter']; ?>" required><br>

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
                                                  <input type="submit" class="btn btn-sm btn-success" value="Edit" name="edit"/>
                                                </div>
                                                </form>
                                                <?php

                                                if(isset($_POST['edit'])){
                                                  $id = $_POST['id'];
                                                  $namadokter = $_POST['namadokter'];
                                                  $hpdokter = $_POST['hpdokter'];
                                                  $sql = "UPDATE dokter SET
                                                  nama_dokter='$namadokter', no_telpon_dokter='$hpdokter'
                                                  WHERE id_dokter ='$id'";
                                                  if ($connect->query($sql) === TRUE) {
                                                      echo '<script>window.location.href="daftar_dokter.php"</script>';
                                                  } else {
                                                      echo "Error updating record: " . $connect->error;
                                                  }
                                              }

                                                      ?>


                                              </div>
                                            </div>
                                          </div>
                                          <!--Edit data pasien selesai-->

                                          <!--Delete data pasien-->
                                              <a onclick="return confirm('Yakin ingin menghapus data dokter?')" href="hub_delete_dokter.php?id=<?php echo $rows['id_dokter'] ?>" class="btn btn-danger" style="margin:8px;">Delete</a>
                                          <!--Delete data pasien selesai-->


                                            </div>
                                          </td>
                                      </tr>
                                      <?php }  ?>
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
