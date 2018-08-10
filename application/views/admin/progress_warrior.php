<?php
session_start();
include('connection/conn.php');
$username=$unit;
$user=$unit;
?>
<?php 
                                  $cc1=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='".$username."'  and input_bulan='08' and input_detail_c='AKSELERASI'");

                                  $isi1=mysqli_fetch_array($cc1)['input_realisasi_'];

                                  $cc2=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='".$username."'  and input_bulan='09' and input_detail_c='AKSELERASI'");

                                  $isi2=mysqli_fetch_array($cc2)['input_realisasi_'];

                                  $cc3=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='".$username."'  and input_bulan='10' and input_detail_c='AKSELERASI'");

                                  $isi3=mysqli_fetch_array($cc3)['input_realisasi_'];

                                 

                                  ?>
                  <?php


                        $dataPoints = array( 
                          array("y" => $isi1, "label" => "Agustus" ),
                          array("y" => $isi2, "label" => "September" ),
                          array("y" => $isi3, "label" => "Oktober" ),
                        );
                         
                        ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Garuda Indonesia | Dashboard</title>


    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url()?>css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url()?>js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

    <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Pencapaian Budaya Organisasi"
  },
  axisY: {
    title: "Tahun"
  },
  data: [{
    type: "column",
    yValueFormatString: "#,##0.## tonnes",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>

</head>
<body class="top-navigation">
    <div id="wrapper">
        <div id="page-wrapper" class="white-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="#" class="navbar-brand">Garuda Indonesia</a>
            </div>
            <div class="navbar-collapse collapse blue-bg" id="navbar">
                <ul class="nav navbar-top-links navbar-right"  style="color:black">
                    <li>
                           <h4><i class="fa fa-user"></i> Unit Admin-garuda</h4>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/logout" style="color:black">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-left"  style="color:black">
                    <li>
                           <h4></h4>
                    </li>
                    
                </ul>
            </div>
        </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="container " style="color:black">
          <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-12"></div>
            <div class="col-md-10 col-sm-10 col-xs-12">
              <h3 >Track - Corporate Culture </h3>
              <h4 >Selamat Datang</h4>
              <br/>
              <!-- form grid slider -->
              <div class="x_panel" style="border-top: 6px solid #4F8BB1;">

                <div class="x_content" >
                  <div class="col-md-3 col-sm-3 col-xs-12 " >
                    <div class="profile_img" >
                      <div id="crop-avatar"  >
                        <!-- Current avatar -->
                        <img class="img-responsive avatar-view" src="<?php echo base_url()?>assets/user.png" alt="Avatar" >
                      </div>
                    </div>
                    <br>
                    <ul class="list-unstyled user_data">
                      <li><i class="fa fa-map-marker user-profile-icon"></i> Unit : Admin-garuda
                      </li>
                    </ul>
                    <div style="text-align:center">
                      <a href="<?php echo base_url()?>admin"><button type="submit" class="btn btn-primary btn-xs" style="width: 80% ; font-size: 100%" >Kembali</button></a>
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Data Warrior</h2>
                      </div>

                    </div>
                    <br>
                  <div class="x_panel ui-ribbon-container ">
                          <div class="x_content">
                            <!-- <form id="demo-form2" action="<?php echo base_url()?>user/addwarrior/" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            </form> -->

                                <!-- <?php 
                                                    
                                                                $nopeg          = $progress_warrior[0]->nopeg;
                                                                $unit           = $progress_warrior[0]->unit;
                                                                $direktorat     = $progress_warrior[0]->direktorat;
                                                                $status_aktif   = $progress_warrior[0]->status_aktif;
                                                                $email          = $progress_warrior[0]->email;       
                                                    
                                                    ?> -->
                                <form id="demo-form2" action="<?php echo base_url()?>user/editwarrior/<?php echo $nopeg?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                              <input type="text" id="first-name" name="user" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $username;?>" style="display:none">
                                <?php foreach ($baru_warrior as $b) { ?>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomer Pegawai 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="nopeg" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $b->nopeg; ?>">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $b->unit; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Direktorat
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $b->direktorat; ?>">
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Aktif
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select readonly class="form-control" required="true" name="status_aktif" value="<?php echo $b->status_aktif?>">
                                    <option value="<?php echo $status_aktif?>"><?php if ($b->status_aktif==1) echo "Aktif"; else echo "Tidak Aktif"; ?></option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" readonly name="email" class="form-control col-md-7 col-xs-12" value="<?php echo $b->email; ?>">
                                </div>
                              </div>
                           <?php } ?>
                           
                              <div class="ln_solid"></div>
                              
                            </form>
                          </div>
                        </div>
                        </div>
                        <div class="col-md-3">
                        </div>

                        <div class="col-md-9">
                  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                </div>
              </div>
            </div>
            <br />
            <br />
            <!-- /form grid slider -->

          </div>
          <div class="col-md-1 col-sm-1 col-xs-12"></div>

        </div>
        </div>
        </div>
        <div class="footer">
            <div class="pull-right">
              
            </div>
            <div>
                <strong>Copyright</strong> &copy; 2017 Garuda Indonesia. All rights reserved.
            </div>
        </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="<?php echo base_url();?>js/plugins/dataTables/datatables.min.js"></script>

    <script src="<?php echo base_url()?>js1/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>js1/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js1/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>js1/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>js/inspinia.js"></script>
    <script src="<?php echo base_url();?>js/plugins/pace/pace.min.js"></script>
    <style>
      .x_panel {
  position: relative;
  width: 100%;
  margin-bottom: 10px;
  padding: 10px 17px;
  display: inline-block;
  background: #fff;
  border: 1px solid #E6E9ED;
  -webkit-column-break-inside: avoid;
  -moz-column-break-inside: avoid;
  column-break-inside: avoid;
  opacity: 1;
  transition: all .2s ease; }
  .profile_title {
  background: #F5F7FA;
  border: 0;
  padding: 7px 0;
  display: -ms-flexbox;
  display: flex; }
    </style>
</body>
</html>
