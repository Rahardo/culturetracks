<?php
session_start();
include('connection/conn.php');
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Garuda Indonesia | Dashboard</title>

    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url()?>css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url()?>js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url()?>img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('username')?></strong>
                             </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="<?php echo base_url()?>admin/logout">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            GI
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/index"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Progress</span></a>

                    </li>
                    <li >
                        <a href="<?php echo base_url()?>admin/dashboard_warrior"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Warrior</span></a>

                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>admin/dashboard_implementasi_budaya"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard TIB</span></a>

                    </li>
                    <li >
                        <a href=""><i class="fa fa-edit"></i> <span class="nav-label">Culture Programs</span><span class="fa fa-caret-down pull-right"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url()?>admin/program"><i class="fa fa-pencil"></i> List Program</a></li>
                            <li><a href="<?php echo base_url()?>admin/tambah_program"><i class="fa fa-bar-chart-o"></i> Tambah Program</a></li>
                            <!-- <li><a href="<?php echo base_url()?>admin/progress_program"><i class="fa fa-bar-chart-o"></i> Progress Program</a></li> -->
                        </ul>
                    </li>
                    <li >
                        <a href="<?php echo base_url()?>admin/daftar_user"><i class="fa fa-users"></i> <span class="nav-label">Daftar User</span></a>

                    </li>
                    <li >
                        <a href="<?php echo base_url()?>admin/daftar_warrior"><i class="fa fa-users"></i> <span class="nav-label">Daftar Warrior</span></a>

                    </li>
                    <li >
                        <a href="<?php echo base_url()?>admin/daftar_tib"><i class="fa fa-users"></i> <span class="nav-label">Daftar TIB</span></a>

                    </li>
                    <li>
                        <!-- <a href="<?php echo base_url()?>admin/setting"><i class="fa fa-cog"></i> <span class="nav-label">Setting</span>< -->
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
          <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
              
          </div>
              <ul class="nav navbar-top-links navbar-right">
                  <li>
                      <span class="m-r-sm text-muted welcome-message">Welcome to Garuda Culture Program.</span>
                  </li>
                  <li>
                      <a href="<?php echo base_url()?>admin/logout">
                          <i class="fa fa-sign-out"></i> Log out
                      </a>
                  </li>
              </ul>
          </nav>
        </div>
          <div class="row  border-bottom white-bg dashboard-header">
                <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12 widget_tally_box">
            <div class="x_panel">
              <div class="x_title">
                <h2>Jakarta Raya and <br>International Region</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table class="table table-hover table-bordered" style="font-size:14px">
                  <thead>
                    <tr>
                      <th style="width:80%">Unit</th>
                      <th style="text-align:center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $n=1;
                    $queries=mysqli_query($con,"SELECT a.*,b.nama_unit,b.kode_dir FROM (SELECT DISTINCT unit_name,direktorat,kode FROM ca_performance_upload LEFT JOIN baru_tim_implementasi_budaya on ca_performance_upload.unit_name=baru_tim_implementasi_budaya.unit where ca_performance_upload.kode='5')a JOIN unit b on a.unit_name=b.kode_unit");
                    while ($row=mysqli_fetch_array($queries)) {

                      ?>
                      <?php 
                      if ($row['direktorat']==null&&empty($row['direktorat'])) {
                        ?>
                        <tr style=" background:#f7f7f7">
                          <td><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</td>
                          <td style="text-align:center" >
                            <i class="fa fa-circle" style="color:red"></i>
                          </td>
                        </tr>
                        <?php                        
                      } else {
                        ?>
                        <tr>
                          <td><a href="<?php echo base_url()?>admin/progress_program/<?php echo $row['unit_name']?>"><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</a></td>
                          <td style="text-align:center" >
                            <i class="fa fa-check-circle" style="color:green"></i>
                          </td>
                        </tr>
                        <?php 

                      }
                      ?>
                      <?php 
                    }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="x_panel">
              <div class="x_title">
                <h2>Kalimantan, Sulawesi, & <br>Papua Region</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table class="table table-hover table-bordered" style="font-size:14px">
                  <thead>
                    <tr>
                      <th style="width:80%">Unit</th>
                      <th style="text-align:center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $n=1;
                    $queries=mysqli_query($con,"SELECT a.*,b.nama_unit,b.kode_dir FROM (SELECT DISTINCT unit_name,direktorat,kode FROM ca_performance_upload LEFT JOIN baru_tim_implementasi_budaya on ca_performance_upload.unit_name=baru_tim_implementasi_budaya.unit where ca_performance_upload.kode='4')a JOIN unit b on a.unit_name=b.kode_unit");
                    while ($row=mysqli_fetch_array($queries)) {

                      ?>
                      <?php 
                      if ($row['direktorat']==null&&empty($row['direktorat'])) {
                        ?>
                        <tr style=" background:#f7f7f7">
                          <td><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</td>
                          <td style="text-align:center" >
                            <i class="fa fa-circle" style="color:red"></i>
                          </td>
                        </tr>
                        <?php                        
                      } else {
                        ?>
                        <tr>
                          <td><a href="<?php echo base_url()?>admin/progress_program/<?php echo $row['unit_name']?>"><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</a>)</td>
                          <td style="text-align:center" >
                            <i class="fa fa-check-circle" style="color:green"></i>
                          </td>
                        </tr>
                        <?php 

                      }
                      ?>
                      <?php 
                    }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
            <div class="col-md-4 col-sm-4    col-xs-12">
              </div>

              <div class="col-md-8 col-sm-8    col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Head Office</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-hover table-bordered" style="font-size:14px">
                      <thead>
                        <tr>
                          <th style="width:80%">Unit</th>
                          <th style="text-align:center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $n=1;
                        $queries=mysqli_query($con,"SELECT a.*,b.nama_unit,b.kode_dir FROM (SELECT DISTINCT unit_name,direktorat,kode FROM ca_performance_upload LEFT JOIN baru_tim_implementasi_budaya on ca_performance_upload.unit_name=baru_tim_implementasi_budaya.unit where ca_performance_upload.kode='1')a JOIN unit b on a.unit_name=b.kode_unit");
                        while ($row=mysqli_fetch_array($queries)) {

                          ?>
                          <?php 
                          if ($row['direktorat']==null&&empty($row['direktorat'])) {
                            ?>
                            <tr style=" background:#f7f7f7">
                              <td><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</td>
                              <td style="text-align:center" >
                                <i class="fa fa-circle" style="color:red"></i>
                              </td>
                            </tr>
                            <?php                        
                          } else {
                            ?>
                            <tr>
                              <td><a href="<?php echo base_url()?>admin/progress_program/<?php echo $row['unit_name']?>"><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</a></td>
                              <td style="text-align:center" >
                                <i class="fa fa-check-circle" style="color:green"></i>
                              </td>
                            </tr>
                            <?php 

                          }
                          ?>
                          <?php 
                        }

                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sumatera Region</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-hover table-bordered" style="font-size:14px">
                      <thead>
                        <tr>
                          <th style="width:80%">Unit</th>
                          <th style="text-align:center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $n=1;
                        $queries=mysqli_query($con,"SELECT a.*,b.nama_unit,b.kode_dir FROM (SELECT DISTINCT unit_name,direktorat,kode FROM ca_performance_upload LEFT JOIN baru_tim_implementasi_budaya on ca_performance_upload.unit_name=baru_tim_implementasi_budaya.unit where ca_performance_upload.kode='2')a JOIN unit b on a.unit_name=b.kode_unit");
                        while ($row=mysqli_fetch_array($queries)) {

                          ?>
                          <?php 
                          if ($row['direktorat']==null&&empty($row['direktorat'])) {
                            ?>
                            <tr style=" background:#f7f7f7">
                              <td><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</td>
                              <td style="text-align:center" >
                                <i class="fa fa-circle" style="color:red"></i>
                              </td>
                            </tr>
                            <?php                        
                          } else {
                            ?>
                            <tr>
                              <td><a href="<?php echo base_url()?>admin/progress_program/<?php echo $row['unit_name']?>"><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</a></td>
                              <td style="text-align:center" >
                                <i class="fa fa-check-circle" style="color:green"></i>
                              </td>
                            </tr>
                            <?php 

                          }
                          ?>
                          <?php 
                        }

                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jawa, Bali,<br>Nusa Tenggara Region </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-hover table-bordered" style="font-size:14px">
                      <thead>
                        <tr>
                          <th style="width:80%">Unit</th>
                          <th style="text-align:center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $n=1;
                        $queries=mysqli_query($con,"SELECT a.*,b.nama_unit,b.kode_dir FROM (SELECT DISTINCT unit_name,direktorat,kode FROM ca_performance_upload LEFT JOIN baru_tim_implementasi_budaya on ca_performance_upload.unit_name=baru_tim_implementasi_budaya.unit where ca_performance_upload.kode='3')a JOIN unit b on a.unit_name=b.kode_unit");
                        while ($row=mysqli_fetch_array($queries)) {

                          ?>


                          <?php 
                          if ($row['direktorat']==null&&empty($row['direktorat'])) {
                            ?>
                            <tr style=" background:#f7f7f7">
                              <td><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</td>
                              <td style="text-align:center" >
                                <i class="fa fa-circle" style="color:red"></i>
                              </td>
                            </tr>
                            <?php                        
                          } else {
                            ?>
                            <tr>
                              <td><a href="<?php echo base_url()?>admin/progress_program/<?php echo $row['unit_name']?>"><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</a></td>
                              <td style="text-align:center" >
                                <i class="fa fa-check-circle" style="color:green"></i>
                              </td>
                            </tr>
                            <?php 

                          }
                          ?>


                          <?php 
                        }

                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
                <div class="footer">
                    <div>
                        <strong>Copyright</strong> &copy; 2017 Garuda Indonesia. All rights reserved.
                    </div>
                </div>
          </div>
        </div>
        </div>
          
        </div>

  

    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url()?>js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url()?>js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>js/inspinia.js"></script>
    <script src="<?php echo base_url()?>js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url()?>js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url()?>js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url()?>js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url()?>js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url()?>js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url()?>js/plugins/toastr/toastr.min.js"></script>
    <!-- ECharts -->
    <script src="<?php echo base_url()?>vendors/echarts/dist/echarts.min.js"></script>
    <script src="<?php echo base_url()?>vendors/echarts/map/js/world.js"></script>
     <!-- Knob -->
    <script src="<?php echo base_url()?>js/plugins/jsKnob/jquery.knob.js"></script>
</body>
</html>
    