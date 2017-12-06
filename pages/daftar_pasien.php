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
              <a class="navbar-brand" href="index.html">Sistem Informasi Klinik Zam-Zam Medika</a>
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
                      <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                          <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                      </li>
                      <li>
                          <a href="tables.html"><i class="fa fa-table fa-fw"></i> Pasien<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="daftar_html.html">Daftar Pasien</a>
                              </li>
                              <li>
                                  <a href="buku_pasien.html">Buku Register Pasien</a>
                              </li>
                              <li>
                                  <a href="laporan_kunjungan.html">Laporan Kunjungan Pasien</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="laporan_keuangan.html"><i class="fa fa-edit fa-fw"></i>Laporan Keuangan</a>
                      </li>
                      <li>
                          <a href="dokter.html"><i class="fa fa-edit fa-fw"></i> Dokter</a>
                      </li>
                      <li>
                          <a href="obst_pemeriksaan.html"><i class="fa fa-sitemap fa-fw"></i>Obat dan Pemeriksaan<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="daftar_obat.html">Daftar Obat</a>
                              </li>
                              <li>
                                  <a href="daftar_pemeriksaan.html">Daftar Jenis Pemeriksaan</a>
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
                    <h1 class="page-header">Daftar Pasien</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            <!--Tambah data pasien-->
            <a data-toggle="modal" data-target="#TambahData" href="" class="btn btn-primary" style="margin-bottom:8px;">Tambah Pasien</a>
       
                                        <div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Tambah Data Pasien</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <form method="POST" >
                                                      <label><b>Nama Pasien</b></label><br>
                                                      <input type="text" class="form-control" name="pasien" required><br>
                                                      <label><b>Golongan Darah</b></label><br>
                                                      <input type="text" class="form-control" name="goldar"  required><br>
                                                      <label><b>Umur</b></label><br>
                                                      <input type="text" class="form-control" name="umur"  required><br>
                                                      <label><b>Jenis Kelamin</b></label><br>
                                                      <input type="text" class="form-control" name="jk"  required><br>
                                                      <label><b>Tensi Darah</b></label><br>
                                                      <input type="text" class="form-control" name="tensi"  required><br>
                                                      <label><b>Alamat</b></label><br>
                                                      <input type="text" class="form-control" name="alamat"  required><br>
                                                      <label><b>No HP</b></label><br>
                                                      <input type="text" class="form-control" name="nomor"  required><br>
                                                  
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
                                                  <input type="submit" class="btn btn-sm btn-success" value="Simpan" name="simpan"/>
                                                </div>
                                                </form>
                                                <?php
                                                if(@$_POST['simpan']){
                                                  $pasien = @$_POST ['pasien'];
                                                  $goldar = @$_POST ['goldar'];
                                                  $umur = @$_POST ['umur'];
                                                  $jk = @$_POST ['jk'];
                                                  $tensi = @$_POST ['tensi'];
                                                  $alamat = @$_POST ['alamat'];
                                                  $nomor = @$_POST ['nomor'];
                                                  mysqli_query($connect, "INSERT INTO pasien(nama_pasien,golongan_darah,umur,jenis_kelamin,tensi_darah,alamat,no_telpon) values('$pasien','$goldar','$umur','$jk','$tensi','$alamat','$nomor')") or die ($connect->error);
                                                    //header("location:?page=daftar_pasien");
                                                }


                                                ?>
                                              </div>
                                            </div>
                                          </div>
            <!--Tambah data pasien selesai-->




            <!--Tampil data pasien-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID Pasien</th>
                                        <th>Nama Pasien</th>
                                        <th>Golongan Darah</th>
                                        <th>Usia</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tensi Darah (mmHg)</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $sql = "SELECT * FROM pasien  ORDER BY id_pasien ASC" ;
                                      $jalan = mysqli_query($connect, $sql);
  
                                      while ($rows = mysqli_fetch_array($jalan)){
                                    ?>
                                    <tr>
                                        <td><?php echo $rows['id_pasien']; ?></td>
                                        
                                        <td><?php echo $rows['nama_pasien']; ?></td>
                                        
                                        <td><?php echo $rows['golongan_darah']; ?></td>
                                        <td><?php echo $rows['umur']; ?></td>
                                        <td><?php echo $rows['jenis_kelamin']; ?></td>
                                        <td><?php echo $rows['tensi_darah']; ?></td>
                                        <td><?php echo $rows['alamat']; ?></td>
                                        <td><?php echo $rows['no_telpon']; ?></td>
                                        <td>
                                        <!--Tampil data pasien selesai-->




                                        <!--Edit data pasien-->
                                          <div>
                                            <a href="#edit<?php echo $rows['id_pasien']; ?>" data-toggle="modal"
                                            class="btn btn-info" style="margin:8px;">Edit</a>

                                          <div class="modal fade" id="edit<?php echo $rows['id_pasien'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Edit Data Pasien</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <form method="POST">
                                                      <label><b>Nama Pasien</b></label><br>
                                                      <input type="hidden" name="id" value="<?php echo $rows['id_pasien']; ?>" >
                                                      <input type="text" class="form-control" name="pasien" value="<?php echo $rows['nama_pasien']; ?>" required><br>
                                                      <label><b>Golongan Darah</b></label><br>
                                                      <input type="text" class="form-control" name="goldar" value="<?php echo $rows['golongan_darah']; ?>" required><br>
                                                      <label><b>Umur</b></label><br>
                                                      <input type="text" class="form-control" name="umur" value="<?php echo $rows['umur']; ?>" required><br>
                                                      <label><b>Jenis Kelamin</b></label><br>
                                                      <input type="text" class="form-control" name="jk" value="<?php echo $rows['jenis_kelamin']; ?>" required><br>
                                                      <label><b>Tensi Darah</b></label><br>
                                                      <input type="text" class="form-control" name="tensi" value="<?php echo $rows['tensi_darah']; ?>" required><br>
                                                      <label><b>Alamat</b></label><br>
                                                      <input type="text" class="form-control" name="alamat" value="<?php echo $rows['alamat']; ?>" required><br>
                                                      <label><b>No HP</b></label><br>
                                                      <input type="text" class="form-control" name="nomor" value="<?php echo $rows['no_telpon']; ?>" required><br>

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
                                                  <input type="submit" class="btn btn-sm btn-success" value="Edit" name="edit"/>
                                                </div>
                                              </form>
                                               <?php

                                          if(isset($_POST['edit'])){
                                            $id = $_POST['id'];
                                            $pasien = $_POST['pasien'];
                                            $goldar = $_POST['goldar'];
                                            $umur = $_POST ['umur'];
                                            $jk = $_POST ['jk'];
                                            $tensi = $_POST ['tensi'];
                                            $alamat = $_POST ['alamat'];
                                            $nomor = $_POST ['nomor'];
                                            $sql = "UPDATE pasien SET 
                                            nama_pasien='$pasien', golongan_darah='$goldar', umur='$umur', 
                                            jenis_kelamin='$jk', tensi_darah='$tensi', alamat='$alamat', no_telpon='$nomor' 
                                            WHERE id_pasien ='$id'";
                                            if ($connect->query($sql) === TRUE) {
                                                echo '<script>window.location.href="daftar_pasien.php"</script>';
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
                                            <a onclick="return confirm('Yakin ingin menghapus data pasien?')" href="hub_delete_pasien.php?id=<?php echo $rows['id_pasien'] ?>" class="btn btn-danger" style="margin:8px;">Delete</a>
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
