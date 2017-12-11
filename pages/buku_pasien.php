<?php
      include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

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

    <!-- DatePicker Responsive CSS -->
    <link href="../vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">

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

    <!-- Buat Multiple Checkbox -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">


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
                                  <a href="buku_pasien.php">Buku Rekam Medis Pasien</a>
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
                    <h1 class="page-header">Buku Rekam Medis Pasien</h1>
                    <a href="tambahrekammedis.php">Tambah Rekam Medis Baru</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID Rekam Medis</th>
                                        <th>Tanggal</th>
                                        <th>ID Pasien</th>
                                        <th>Nama Pasien</th>
                                        <th>Alamat</th>
                                        <th>Dokter</th>
                                        <th>Keluhan</th>
                                        <th>Diagnosis</th>
                                        <th>Pemeriksaan</th>
                                        <th>Obat</th>
                                        <th>Bayar</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                      $sql = "SELECT rekam_medis.id_rekam, rekam_medis.tanggal, pasien.id_pasien, pasien.nama_pasien, pasien.alamat, dokter.nama_dokter, rekam_medis.keluhan, rekam_medis.diagnosa, informasi_pemeriksaan.nama_pemeriksaan, obat.nama_obat FROM rekam_medis JOIN pasien ON rekam_medis.id_pasien=pasien.id_pasien JOIN dokter ON rekam_medis.id_dokter=dokter.id_dokter JOIN informasi_pemeriksaan ON rekam_medis.id_pemeriksaan=informasi_pemeriksaan.id_pemeriksaan JOIN obat ON rekam_medis.id_obat=obat.id_obat";
                                      $jalan = mysqli_query($connect, $sql);

                                  while ($rows = mysqli_fetch_array($jalan)){
                                    ?>
                                    <tr>
                                        <td><?php echo $rows['id_rekam']; ?></td>
                                        <td><?php echo $rows['tanggal']; ?></td>
                                        <td><?php echo $rows['id_pasien']; ?></td>
                                        <td><?php echo $rows['nama_pasien']; ?></td>
                                        <td><?php echo $rows['alamat']; ?></td>
                                        <td><?php echo $rows['nama_dokter']; ?></td>
                                        <td><?php echo $rows['keluhan']; ?></td>
                                        <td><?php echo $rows['diagnosa']; ?></td>
                                        <td><?php echo $rows['nama_pemeriksaan']; ?></td>
                                        <td><?php echo $rows['nama_obat']; ?></td>
                                        <td>
                                          Rp 150.000
                                          <div>
                                            <button data-toggle="modal" data-target="#LihatKwitansiDataModal" class="btn btn-default" type="button">
                                                Lihat Kwitansi
                                            </button>
                                          </div>

                                          <div class="modal fade" id="LihatKwitansiDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Kwitansi</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <form action="/action_page.php">
                                                      <div class="form-group">
                                                          <label>ID Kwitansi :</label> <p class="form-control-static">001_001</p><br>
                                                          <label>ID Pasien :</label> <p class="form-control-static">001_01092017</p><br>
                                                          <p class="form-control-static">Tn. Jodhi</p><br>
                                                          <p class="form-control-static">20 Tahun 10 Bulan</p><br>
                                                          <p class="form-control-static">Bogor, Perumahan Yasmin</p><br>
                                                      </div>
                                                      <hr>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <label>Pemeriksaan</label>
                                                              <div class="row">
                                                                  <div class="col-md-4">
                                                                      Konsultasi
                                                                  </div>
                                                                  <div class="col-md-4">

                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      Rp 50.000
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <hr>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <label>Obat</label>
                                                              <div class="row">
                                                                  <div class="col-md-4">
                                                                      Konidin
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      10
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      Rp 50.000
                                                                  </div>
                                                              </div>
                                                              <div class="row">
                                                                  <div class="col-md-4">
                                                                      OBH
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      2
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      Rp 50.000
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <hr>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <div class="row">
                                                                  <div class="col-md-4">
                                                                      <label>Total</label>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <label>Rp 150.000</label>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                          				</form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                        </td>
                                        <td>
                                          <div>
                                            <a href="#edit<?php echo $rows['id_rekam']; ?>" data-toggle="modal"
                                            class="btn btn-info" style="margin:8px;">Edit</a>
                                          </div>
                                          <div class="modal fade" id="edit<?php echo $rows['id_rekam'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Edit Data Rekam Medis</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <form action="/action_page.php">
                                                      <label for="disabledSelect"><b>ID Rekam Medis</b></label><br>
                                                      <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rows['id_rekam'];?>" disabled><br>
                                                      
                                                      <label><b>Tanggal</b></label><br>
                                                        <input type="text" class="form-control" value="<?php echo $rows['tanggal'];?>" required>
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span><br>
                                                     
                                                      <label><b>ID Pasien</b></label><br>
                                                      <input type="text" class="form-control" value="<?php echo $rows['id_pasien'];?>" required><br>
                                                      <label><b>Dokter</b></label><br>
                                                        <select class="form-control" value="<?php echo $rows['nama_dokter'];?>" required>
                                                            <option>Adi Santoso</option>
                                                            <option>Yudha Pasetya</option>
                                                            <option>Riana Maharani</option>
                                                        </select><br>
                                                      
                                                      <label><b>Keluhan</b></label><br>
                                                      <textarea class="form-control" rows="3" value="<?php echo $rows['keluhan'];?>" required></textarea><br>
                                                      
                                                      <label><b>Diagnosis</b></label><br>
                                                      <textarea class="form-control" rows="3" value="<?php echo $rows['diagnosa'];?>" required></textarea><br>
                                                      
                                                      <div class="container">
                                                        <label><b>Pemeriksaan</b></label><br>
                                                        <select id="multiple-checkboxes" multiple="multiple">
                                                            <option value="periksa_konsultasi">Konsultasi</option>
                                                            <option value="periksa_suntikkb">Suntik KB</option>
                                                            <option value="periksa_tes darah">Tes Darah</option>
                                                            <option value="periksa_imunisasi">Imunisasi</option>
                                                            <option value="periksa_jahit">Jahit</option>
                                                        </select>
                                                      </div><br>
                                                      <label><b>Obat</b></label><br>
                                                      <input type="text" class="form-control" name="title" value="089977665544" required><br>
                                          				</form>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
                                                  <button type="button" class="btn btn-sm btn-success">Simpan</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        
                                        <!--Delete rekam medis-->                                      
                                            <a onclick="return confirm('Yakin ingin menghapus data rekam medis?')" href="hub_delete_rekam.php?id=<?php echo $rows['id_rekam'] ?>" class="btn btn-danger" style="margin:8px;">Delete</a>
                                        <!--Delete rekam medis selesai-->
                                        
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
    <script src="../vendor/datepicker/css/bootstrap-datepicker.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    //data table
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#multiple-checkboxes').multiselect();
    });
    </script>

</body>
</html>