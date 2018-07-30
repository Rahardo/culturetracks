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
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <title>Garuda Indonesia</title>

    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

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
                           <h4><i class="fa fa-user"></i> Unit <?php echo $this->session->userdata('username') ?></h4>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>user/logout" style="color:black">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
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
                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="x_title" style="text-align:center">
                      <h4 >Index Pencapaian Unit</h4>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div style="text-align: center; margin-bottom: 17px">
                        <?php $ppp=0; for ($i=0; $i <count($program) ; $i++) {
                            if ($program[$i]->persen_realisasi) $ppp=$ppp+$program[$i]->persen_realisasi;
                        } ?>
                        <span class="chart" data-percent="<?php echo $ppp/count($program); ?>">
                          <span class="percent"></span>
                        </span>persen
                      </div>
                    </div>
                    <h3 style="text-align:center"><?php echo $this->session->userdata('username'); ?></h3>
                    <div class="divider"></div>
                    <br />
                    <div style="text-align:center">
                      <a href="<?php echo base_url()?>user"><button type="submit" class="btn btn-primary btn-xs" style="width: 80% ; font-size: 100%" >Kembali</button></a>
                    </div>
                    <br>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Program Progress Report</h2>
                      </div>

                    </div>
                    <br>
                      <table class="table table-hover table-bordered" style="font-size:14px">
                        <?php  if ($jumlahprogram!=0)  {?>
                        <thead>
                          <tr>
                            <th style="width:5%; text-align:center">#</th>
                            <th style="width:35%; text-align:center">Program</th>
                            <th style="width:15%; text-align:center">Target</th>
                            <th style="width:15%; text-align:center">Satuan</th>
                            <th style="width:15%; text-align:center">Gap (%)</th>

                          </tr>
                        </thead>
                        <tbody> 
                               <?php $ppp=0; for ($i=0; $i <count($program) ; $i++) { 
                                $unit=$this->session->userdata('username');
                                $xmen=$program[$i]->cc_detail;
                               $sudah=mysqli_query($con, "SELECT * FROM cc_program_input where input_user='$unit' and input_detail='$xmen'");
                              $gap=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='$unit' and input_detail_c='$xmen'");
                              $isimen=mysqli_fetch_array($sudah);
                              $gapmen=mysqli_fetch_array($gap);?>
                               <tr>
                              <td scope="row" style="text-align:center; vertical-align:middle"><?php echo $i+1; ?></td>
                              <td><?php echo $program[$i]->cc_detail?> </td>
                              <td style="text-align:center">
                                  <?php if (!$program[$i]->input_target) echo "-"; else echo $program[$i]->input_target; $ppp=$ppp+$program[$i]->input_target;?>
                                </td> 
                                <td style="text-align:center">
                                  <?php if (!$program[$i]->input_satuan) echo "-"; else echo $program[$i]->input_satuan; ?>
                                </td>
                                <td style="text-align:center">
                                  <?php echo round($program[$i]->persen_gap);?>
                                </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                      </table>
                      <?php 

                    } else {
                      echo "Saat ini tidak ada program berjalan";
                    }
                    ?>


                    <!-- after 1 -->
                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Program Progress History</h2>
                      </div>

                    </div>
                    <br>
                    <?php 
                    $p=count($programdefault);
                    $cc=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default'");
                    $cc2=mysqli_query($con, "SELECT MAX(cc_time) as max FROM cc_program where status= 'Default'");
                    $cc3=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default'");
                    if ($p>0)
                    {
                      $max=$max[0]->max;
                      $bulan= 01;
                    

                      ?>
                      <table class="table table-hover table-bordered" style="font-size:14px">
                        <thead>
                          <tr>
                            <th style="width:5%; text-align:center; vertical-align:middle" rowspan="2" >#</th>
                            <th style="width:35%; text-align:center; vertical-align:middle" rowspan="2">Program</th>
                            <th style=" text-align:center" colspan="<?php echo $max; ?>">Capaian (%)</th>
                          </tr>
                          <tr>
                            <?php
                            $x=1;
                            while ($x <= $max) {
                              if ($bulan>12) {
                                $bulan=$bulan-12;
                              }
                              if ($bulan==1) {
                                $bulan1='Jan';
                              }
                              if ($bulan==2) {
                                $bulan1='Feb';
                              }
                              if ($bulan==3) {
                                $bulan1='Mar';
                              }
                              if ($bulan==4) {
                                $bulan1='Apr';
                              }
                              if ($bulan==5) {
                                $bulan1='Mei';
                              }
                              if ($bulan==6) {
                                $bulan1='Jun';
                              }
                              if ($bulan==7) {
                                $bulan1='Jul';
                              }
                              if ($bulan==8) {
                                $bulan1='Agu';
                              }
                              if ($bulan==9) {
                                $bulan1='Sep';
                              }
                              if ($bulan==10) {
                                $bulan1='Okt';
                              }
                              if ($bulan==11) {
                                $bulan1='Nov';
                              }
                              if ($bulan==12) {
                                $bulan1='Des';
                              }
                              ?>
                              <th style=" text-align:center"><?php echo $bulan1;?></th>
                              <?php
                              $bulan++;
                              $x++;  
                            }
                            ?>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no=1;
                          while ($cc_program=mysqli_fetch_array($cc)) {
                            $xmen=$cc_program['cc_detail'];
                              // echo $xmen;
                            ?>
                            <tr>

                              <?php
                              $sudah=mysqli_query($con, "SELECT * FROM cc_program_eval JOIN cc_program_input on cc_program_eval.input_user_c=cc_program_input.input_user  and cc_program_input.input_detail=cc_program_eval.input_detail_c where input_user='$unit' and input_detail='$xmen' ORDER BY input_id DESC");
                        

                              $cc4=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default'");
                              $bulan2=mysqli_fetch_array($cc4 )['start_month'];
                              $bulan2= 12;

                              ?>
                              <th scope="row" style="text-align:center; vertical-align:middle"><?php echo $no++; ?></th>
                              <td><?php echo $cc_program['cc_detail'];?></td>
                              <?php
                              $o2=1;
                              while ($o2 <= $max) {
                                ?>
                                <td style="text-align:center">
                                  <?php 
                                  $bulan2++;
                                  if ($bulan2>12) {
                                    $bulan2=$bulan2-12;
                                  }
                                  if ($bulan2<10) {
                                    $bulan2="0".$bulan2;
                                  }

                                  $pro=$cc_program['cc_detail'];
                                  $cc5=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='$unit'  and input_bulan='$bulan2' and input_detail_c='$pro'");

                                  $isi5=mysqli_fetch_array($cc5 )['input_realisasi_'];
                                  if ($isi5==null && empty($isi5)) {
                                    echo "-";
                                  } else {
                                    echo $isi5;
                                  }
                                  ?>
                                </td>
                                <?php
                                $o2++;
                              }
                              ?>
                            </tr>
                            <?php
                          }
                          ?>
                        </tbody>
                      </table>
                      <?php 

                    } else {
                      echo "Saat ini tidak ada program berjalan";
                    }
                    ?>

                    <?php 

                    $cc=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default'");
                    $cc2=mysqli_query($con, "SELECT MAX(cc_time) as max FROM cc_program where status= 'Default'");
                    $cc3=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default'");
                    if (mysqli_num_rows($cc)>0)
                    {
                      $cuntu=mysqli_fetch_array($cc2);
                      $max=$cuntu['max'];
                      $bulan=12;

                      ?>
                      <table class="table table-hover table-bordered" style="font-size:14px">
                        <thead>
                          <tr>
                            <th style="width:5%; text-align:center; vertical-align:middle" rowspan="2" >#</th>
                            <th style="width:35%; text-align:center; vertical-align:middle" rowspan="2">Program</th>
                            <th style=" text-align:center" colspan="<?php echo $max; ?>">Evidence</th>
                          </tr>
                          <tr>
                            <?php
                            $x=1;
                            $bulan++;
                            while ($x <= $max) {
                              if ($bulan>12) {
                                $bulan=$bulan-12;
                              }
                              if ($bulan==1) {
                                $bulan1='Jan';
                              }
                              if ($bulan==2) {
                                $bulan1='Feb';
                              }
                              if ($bulan==3) {
                                $bulan1='Mar';
                              }
                              if ($bulan==4) {
                                $bulan1='Apr';
                              }
                              if ($bulan==5) {
                                $bulan1='Mei';
                              }
                              if ($bulan==6) {
                                $bulan1='Jun';
                              }
                              if ($bulan==7) {
                                $bulan1='Jul';
                              }
                              if ($bulan==8) {
                                $bulan1='Agu';
                              }
                              if ($bulan==9) {
                                $bulan1='Sep';
                              }
                              if ($bulan==10) {
                                $bulan1='Okt';
                              }
                              if ($bulan==11) {
                                $bulan1='Nov';
                              }
                              if ($bulan==12) {
                                $bulan1='Des';
                              }
                              ?>
                              <th style=" text-align:center"><?php echo $bulan1;?></th>
                              <?php
                              $bulan++;
                              $x++;  
                            }
                            ?>
                        </thead>
                        <tbody>
                          <?php 
                          $no=1;
                          while ($cc_program=mysqli_fetch_array($cc)) {
                            $xmen=$cc_program['cc_detail'];

                            ?>
                            <tr>

                              <?php
                              $user=$this->session->userdata('username');
                              $sudah=mysqli_query($con, "SELECT * FROM cc_program_eval JOIN cc_program_input on cc_program_eval.input_user_c=cc_program_input.input_user  and cc_program_input.input_detail=cc_program_eval.input_detail_c where input_user='$user' and input_detail='$xmen'");
                              
                              $isimen=mysqli_fetch_array($sudah);
                              $gapmen=mysqli_fetch_array($gap);

                              $cc4=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default'");
                              $bulan2=mysqli_fetch_array($cc4 )['start_month'];
                              $bulan2= 12;

                              ?>
                              <th scope="row" style="text-align:center; vertical-align:middle"><?php echo $no++; ?></th>
                              <td><?php echo $cc_program['cc_detail'];?></td>
                              <?php
                              $o2=1;
                              while ($o2 <= $max) {
                                ?>
                                <td style="text-align:center">
                                  <?php 
                                  $bulan2++;
                                  if ($bulan2>12) {
                                    $bulan2=$bulan2-12;
                                  }
                                  if ($bulan2<10) {
                                    $bulan2="0".$bulan2;
                                  }

                                  $pro=$cc_program['cc_detail'];
                                  $cc5=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='$user'  and input_bulan='$bulan2' and input_detail_c='$pro'");

                                  $isi5=mysqli_fetch_array($cc5 )['input_attach'];
                                  if ($isi5==null && empty($isi5)) {
                                    echo "-";
                                  } else {
                                    echo "<a href='uploads/".$isi5."' download><i class='fa fa-arrow-circle-down'></i> file</a> ";
                                  }
                                  ?>
                                </td>
                                <?php
                                $o2++;
                              }
                              ?>
                            </tr>
                            <?php
                          }
                          ?>
                        </tbody>
                      </table>
                      <?php 

                    } else {
                      echo "Saat ini tidak ada program berjalan";
                    }
                    ?>
                    <p>* Klik pada "file" untuk mengunduh Evidence</p>
                    <!-- after 1 -->

                    <br>

                    <!-- after 2 -->
                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Program Progress Feedback</h2>
                      </div>

                    </div>
                    <br>
                    
                    <?php 

                    $fb=mysqli_query($con, "SELECT * FROM cc_program_feedback where fb_recipient= '$user'");
                    
                    if (mysqli_num_rows($fb)>0)
                    {

                      ?>
                      <table class="table table-hover" style="font-size:15px; border: 1px solid #D9DEE4">
                        <thead>
                          <tr>
                            <th style="width:5%; text-align:center">#</th>
                            <th style="width:70%; text-align:center">Subject</th>
                            <th style="width:20%; text-align:center">Detail</th>
                            <th style="width:5%; text-align:center"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no=1;
                          while ($fb_=mysqli_fetch_array($fb)) {
                            $id_pesan=$fb_['fb_id'];
                            if ($fb_['status']=='unread') {

                              ?>
                              <tr >
                                <th scope="row" style="text-align:center; vertical-align:middle"><?php echo $no++; ?></th>
                                <td style="text-align:center; vertical-align:middle"><a href="<?php echo base_url()?>user/feedback/<?php echo $fb_['fb_id']?>"><b><?php echo $fb_['fb_subject']; ?></b></a></td>
                                <td style="text-align:center; vertical-align:middle"><a href="<?php echo base_url()?>user/feedback/<?php echo $fb_['fb_id']?>">Lihat</a></td>
                                <td style="text-align:center; vertical-align:middle">
                                  <i class="fa fa-circle" style="color:#b7b7b7"></i>
                                </td>
                              </tr>
                              <?php
                            } elseif ($fb_['status']=='read') {
                              ?>
                              <tr style="background-color: #f9f9f9; ">
                                <td scope="row" style="text-align:center; vertical-align:middle"><?php echo $no++; ?></td>
                                <td style="text-align:center; vertical-align:middle"><a href="<?php echo base_url()?>user/feedback/<?php echo $fb_['fb_id']?>"><b><?php echo $fb_['fb_subject']; ?></b></a></td>
                                <td style="text-align:center; vertical-align:middle"><a href="<?php echo base_url()?>user/feedback/<?php echo $fb_['fb_id']?>">Lihat</a></td>
                                <td style="text-align:center; vertical-align:middle"> 
                                </td>
                              </tr>
                              <?php
                            }
                          }
                          ?>
                        </tbody>
                      </table>
                      <?php 

                    } else {
                      echo "<div class='x_panel'>";
                      echo "<div class='x_content'>";
                      echo "<p style='text-align:center'>Anda tidak memiliki Feedback</p>";
                      echo "</div>";
                      echo "</div>";
                    }
                    ?>

                    <!-- after 2 -->

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
    <!-- easy-pie-chart -->
    <script src="<?php echo base_url();?>js/jquery.easypiechart.min.js"></script>
  <script>
  $(function() {
    $('.chart').easyPieChart({
      easing: 'easeOutElastic',
      delay: 3000,
      barColor: '#26B99A',
      trackColor: '#F5F7FA',
      scaleColor: false,
      lineWidth: 20,
      trackWidth: 20,
      lineCap: 'butt',
      onStep: function(from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });
  });
  </script>
</body>
</html>
