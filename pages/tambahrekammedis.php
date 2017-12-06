<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siklik Zam-Zam Medika</title>

    <!-- Buat Multiple Checkbox -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

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

    <!-- Buat Multiple Checkbox -->
    <title>Jquery multiple select with checkboxes using bootstrap-multiselect.js</title>
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
                                  <a href="daftar_pasien.html">Daftar Pasien</a>
                              </li>
                              <li>
                                  <a href="buku_pasien.html">Buku Rekam Medis Pasien</a>
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
                    <h1 class="page-header">Rekam Medis Baru</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <form action="/action_page.php">
                              <label for="disabledSelect"><b>ID Rekam Medis</b></label><br>
                              <input class="form-control" id="disabledInput" type="text" placeholder="001_00101092017" disabled><br>
                              <label><b>Tanggal</b></label><br>
                              <!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
                              <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

                              <!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
                              <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

                              <!--Font Awesome (added because you use icons in your prepend/append)-->
                              <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

                              <!-- Inline CSS based on choices in "Settings" tab -->
                              <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

                              <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
                              <div class="bootstrap-iso">
                               <div class="container-fluid">
                                <div class="row">
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                  <form action="https://formden.com/post/MlKtmY4x/" class="form-horizontal" method="post">
                                   <div class="form-group ">
                                    <div class="col-sm-10">
                                     <div class="input-group">
                                      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                                      <span class="input-group-btn">
                                          <button type="button" class="btn btn-success">Ya
                                          </button>
                                      </span>
                                     </div>
                                    </div>
                                   </div>

                                  </form>
                                 </div>
                                </div>
                               </div>
                              </div>


                              <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
                              <!-- Include jQuery -->
                              <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

                              <!-- Include Date Range Picker -->
                              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
                              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

                              <script>
                                $(document).ready(function(){
                                  var date_input=$('input[name="date"]'); //our date input has the name "date"
                                  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                                  date_input.datepicker({
                                    format: 'mm/dd/yyyy',
                                    container: container,
                                    todayHighlight: true,
                                    autoclose: true,
                                  })
                                })
                              </script>

                              <label><b>ID Pasien</b></label><br>
                              <div class="form-group input-group">
                                  <input type="text" class="form-control">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-success">Ya
                                      </button>
                                  </span>
                              </div>
                              <label><b>Nama :</b></label> <p class="form-control-static">Tn. Jodhi</p>
                              <label><b>Usia :</b></label><p class="form-control-static">20 Tahun 10 Bulan</p>
                              <label><b>Jenis Kelamin :</b></label><p class="form-control-static">Laki-Laki</p>
                              <label><b>Alamat :</b></label><p class="form-control-static">Bogor, Perumahan Yasmin</p><br>
                              <label><b>Dokter</b></label><br>
                                <select class="form-control">
                                    <option>Adi Santoso</option>
                                    <option>Yudha Pasetya</option>
                                    <option>Riana Maharani</option>
                                </select><br>
                              <label><b>Keluhan</b></label><br>
                              <textarea class="form-control" rows="3" value="Pusing, Mual"></textarea><br>
                              <label><b>Diagnosis</b></label><br>
                              <textarea class="form-control" rows="3" value="Hepatitis C"></textarea><br>

                              <label><b>Pemeriksaan</b></label><br>
                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                                <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
                              <select id="multiple-checkboxes" multiple="multiple">
                                  <option value="periksa_konsultasi">Konsultasi</option>
                                  <option value="periksa_suntikkb">Suntik KB</option>
                                  <option value="periksa_tes darah">Tes Darah</option>
                                  <option value="periksa_imunisasi">Imunisasi</option>
                                  <option value="periksa_jahit">Jahit</option>
                              </select><br>
                              <script type="text/javascript">
                                  $(document).ready(function() {
                                      $('#multiple-checkboxes').multiselect();
                                  });
                              </script>

                              <label><b>Obat</b></label><br>

                              <script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
                              <button class="btn btn-default" type="button" id="tambahobat">Tambah Obat</button>
                              <div id="container"></div><br>
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
                        <div class="modal-footer">
                          <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-sm btn-success">Simpan</button>
                        </div>






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
    <script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../vendor/datepicker/datePicker.bootstrap.min.js" type="text/javascript"></script>
    <script src="../vendor/multiple-checkboxes/multiple-checkboxes.bootstrap.min.js" type="text/javascript"></script>

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

        (function($){
              $countForms = 1;
              $.fn.addForms = function(){
                    var myform = "<form>"+
                    "     <div class='form-row'>"+
                    "        <div class='form-group col-md-5'>"+
                    "        <label for='inputObat'>Obat ("+$countForms+")</label>"+
                    "        <input type='text' name='obat["+$countForms+"]' class='form-control' id='inputObat'>"+
                    "        </div"+

                    "       <button>remove</button>"+
                    
                    "     </div>"+
                    "  </form><br>";

                     myform = $("<div>"+myform+"</div>");
                     $("button", $(myform)).click(function(){ $(this).parent().parent().remove(); });

                     $(this).append(myform);
                     $countForms++;
              };
        })(jQuery);

        $(function(){
            $("#tambahobat").bind("click", function(){
                $("#container").addForms();
            });
        });

    </script>


</body>

</html>
