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
                  <div class="col-md-3 col-sm-3 col-xs-12 " >
                    <div class="profile_img" >
                      <div id="crop-avatar"  >
                        <!-- Current avatar -->
                        <img class="img-responsive avatar-view" src="<?php echo base_url()?>assets/user.png" alt="Avatar" >
                      </div>
                    </div>
                    <br>
                    <ul class="list-unstyled user_data">
                      <li><i class="fa fa-map-marker user-profile-icon"></i> Unit : <?php echo $this->session->userdata('username'); ?>
                      </li>
                    </ul>

              

                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Program Report</h2>
                      </div>

                    </div>
                    <br>
                    <div class="x_panel ui-ribbon-container ">
                      <p style="font-size:14px"><?php echo $programunit->cc_desc?></p>
                    </div>
                    <div class="x_panel ui-ribbon-container ">
                      <div class="x_title">
                        <h2>Daftar Evaluasi</h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <?php 
                              $a=count($daftarevaluasi);
                              if ($a>=1) {
                              ?>
                          <table class="table table-hover table-bordered" style="font-size:14px">
                            <thead style="font-size:12px">
                              <tr>
                                <th style="width:30%">Bulan</th>
                                <th style="width:10%">Target</th>
                                <th>Capaian Dalam <?php echo $daftarevaluasi[0]->input_satuan;?></th>
                                <th style="width:15%">Capaian (%)</th>
                                <th style="width:10%">Gap (%)</th>
                                <th style="width:10%">Metode Tracking</th>
                                <th style="width:10%">Reinforcement Positif</th>
                                <th style="width:10%">Reinforcement Negatif</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php for ($i=0; $i <$a ; $i++) { 
                              ?>
                                <tr style="font-size:12px">
                                  <td><?php echo $daftarevaluasi[$i]->last_modified_c;?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_target ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_realisasi ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_realisasi_ ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_gap ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_metodologi ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_reinforcement_positif ?></td>
                                  <td><?php echo $daftarevaluasi[$i]->input_reinforcement_negatif ?></td>
                                </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                          <p style="font-size:14px">Ingin mengubah Target atau Evaluasi? Hubungi Admin</a></p>
                          <?php
                          } else { ?>
                          <table class="table table-hover table-bordered" style="font-size:14px">
                            <thead style="font-size:12px">
                              <tr>
                                <th style="width:30%">Bulan</th>
                                <th style="width:10%">Target</th>
                                <th>Capaian</th>
                                <th style="width:15%">Capaian (%)</th>
                                <th style="width:10%">Gap (%)</th>
                                <th style="width:10%">Metode Tracking</th>
                                <th style="width:10%">Reinforcement Positif</th>
                                <th style="width:10%">Reinforcement Negatif</th>
                              </tr>
                            </thead>
                            <tbody thead style="font-size:12px">
                                <tr> 
                                  <td colspan="8" class="text-center">Anda Belum Melakukan Evaluasi Target</td>
                                </tr>

                            </tbody>
                          </table>
                          <?php } ?>
                      </div>
                    </div>
                    <?php 
                    date_default_timezone_set("Asia/Jakarta");
                    $mydate=getdate(date("U"));
                    $date = "$mydate[month]";
                    $mon2= substr($date,0,3);
                    
                    $a=count($daftarevaluasi);
                    if ($a>0) {
                      
                           
                      $last_mod=$listevaluasi[$a-1]->last_modified_c;
                      $mon= substr("$last_mod",0,3);
                      if ($mon==$mon2) {
                        
                        ?>
                        <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Kembali</button></a>
                        <?php
                        echo '<script language="javascript">';
                        echo 'alert("Anda Sudah Mengisi Target Bulan Ini")';
                        echo '</script>';
                      }  else { ?>
                        <div class="x_panel ui-ribbon-container ">
                          <div class="x_content">
                            <form id="demo-form2" action="<?php echo base_url()?>user/evaluasi_data/<?php echo $programunit->cc_id?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                              <input type="text" id="first-name" name="user" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $this->session->userdata('username');?>" style="display:none">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Program 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="program" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_detail?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target Satuan
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="satuan" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_satuan?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="target" id="first-name" required class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_target?>" readonly>
                                </div>
                              </div>
                              <div class="ln_solid"></div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Capaian
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="number" lang="nb" name="capaian" id="first-name" required class="form-control col-md-7 col-xs-12" value="" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Metode Tracking
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="metodologi">
                                      <option value="">Choose..</option>
                                      <option value="Monitoring pencapaian atau realisasi KPI">Monitoring pencapaian atau realisasi KPI</option>
                                      <option value="Monitoring skedul pelaksanaan program dibandingkan target dan realisasi">Monitoring skedul pelaksanaan program dibandingkan target dan realisasi </option>
                                      <option value="Laporan Pelaksanan Kegiatan">Laporan Pelaksanan Kegiatan </option>
                                      <option value="Minutes of Meeting">Minutes of Meeting </option>
                                      <option value="Monitoring Pengendalian Biaya">Monitoring Pengendalian Biaya</option>
                                      <option value="Monitoring Laporan Pemenuhan SLA">Monitoring Laporan Pemenuhan SLA</option>
                                      <option value="Monitoring Penurunan Error Rate">Monitoring Penurunan Error Rate</option>
                                      <option value="Simple Behavior Survey">Simple Behavior Survey</option>
                                      <option value="Simple Customer Survey (Internal/External)">Simple Customer Survey (Internal/External)</option>
                                      <option value="Other">Other..</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Reinforcement Positif
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="r_positif">
                                      <option value="">Choose..</option>
                                      <option value="Plakat">Plakat</option>
                                      <option value="Pin">Pin</option>
                                      <option value="Sertifikat">Sertifikat</option>
                                      <option value="Banner">Banner</option>
                                      <option value="Ribbon">Ribbon</option>
                                      <option value="Throphie">Throphie</option>
                                      <option value="Flag">Flag</option>
                                      <option value="Voucher">Voucher</option>
                                      <option value="Best Employee Award">Best Employee Award</option>
                                      <option value="Happy Icon">Happy Icon</option>
                                      <option value="Recognition Letter">Recognition Letter</option>
                                      <option value="Thank You Note in Post It">Thank You Note in Post It</option>
                                      <option value="Appreciation Card for good performance">Appreciation Card for good performance</option> 
                                      <option value="Appreciation for employee “Personal Days” (birthdays, pension, anniversaries, etc.)">Appreciation for employee “Personal Days” (birthdays, pension, anniversaries, etc.)</option>
                                      <option value="Recognition Speeches">Recognition Speeches</option>
                                      <option value="Recognition Words (Bravo,Wow,Thank You)">Recognition Words (Bravo,Wow,Thank You)</option>
                                      <option value="Other">Other..</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Reinforcement Negatif
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="r_negatif">
                                      <option value="">Choose..</option>
                                      <option value="Sad Icon">Sad Icon</option>
                                      <option value="Black Flag">Black Flag</option>
                                      <option value="Pegawai Telatan of the month">Pegawai Telatan of the month</option>
                                      <option value="Punishment Card">Punishment Card</option>
                                      <option value="Punishment Letter">Punishment Letter</option>
                                      <option value="Punishment Speeches">Punishment Speeches</option>
                                      <option value="Coaching">Coaching</option>
                                      <option value="Berdiri di depan lift">Berdiri di depan lift</option>
                                      <option value="Other">Other..</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bukti
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="file" id="file" name="file" required  value="" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <p><i>*Bukti harus dengan format .zip atau .rar dan ukuran max 4MB</i></p>
                                  <p><i>*Bukti berisi 3 folder dengan konten 1. Bukti Capaian Program, 2. Bukti  Metode Tracking, 3. Bukti Reinforcement</i></p>
                                  <p><i>*Jika file lebih dari 4MB, harap upload video di drive, copy link kedalam file txt dan upload dalam format .zip atau .rar</i></p>
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Cancel</button></a>
                                  <button type="submit" name="submit" class="btn btn-success" value="simpan">Submit</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        
                        <?php }  ?>
                        <?php
                      
                    } 
          
                else {

                      if ( $mon2=='Des') {
                        
                        ?>
                        <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Kembali</button></a>
                        <?php
                        echo '<script language="javascript">';
                        echo 'alert("Anda tidak dapat mengisi pada Bulan Ini. Silahkan isi dimulai dari Bulan Januari")';
                        echo '</script>';
                      } else {

                        ?>
                        <div class="x_panel ui-ribbon-container ">
                          <div class="x_content">
                            <form id="demo-form2" action="<?php echo base_url()?>user/evaluasi_data/<?php echo $programunit->cc_id?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                              <input type="text" id="first-name" name="user" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $this->session->userdata('username');?>" style="display:none">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Program 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="program" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_detail?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target Satuan
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="satuan" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_satuan?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="target" id="first-name" required class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->input_target?>" readonly>
                                </div>
                              </div>
                              <div class="ln_solid"></div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Capaian
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="number" lang="nb" name="capaian" id="first-name" required class="form-control col-md-7 col-xs-12" value="" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Metode Tracking
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="metodologi">
                                      <option value="">Choose..</option>
                                      <option value="Monitoring pencapaian atau realisasi KPI">Monitoring pencapaian atau realisasi KPI</option>
                                      <option value="Monitoring skedul pelaksanaan program dibandingkan target dan realisasi">Monitoring skedul pelaksanaan program dibandingkan target dan realisasi </option>
                                      <option value="Laporan Pelaksanan Kegiatan">Laporan Pelaksanan Kegiatan </option>
                                      <option value="Minutes of Meeting">Minutes of Meeting </option>
                                      <option value="Monitoring Pengendalian Biaya">Monitoring Pengendalian Biaya</option>
                                      <option value="Monitoring Laporan Pemenuhan SLA">Monitoring Laporan Pemenuhan SLA</option>
                                      <option value="Monitoring Penurunan Error Rate">Monitoring Penurunan Error Rate</option>
                                      <option value="Simple Behavior Survey">Simple Behavior Survey</option>
                                      <option value="Simple Customer Survey (Internal/External)">Simple Customer Survey (Internal/External)</option>
                                      <option value="Other">Other..</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Reinforcement Positif
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="r_positif">
                                      <option value="">Choose..</option>
                                      <option value="Plakat">Plakat</option>
                                      <option value="Pin">Pin</option>
                                      <option value="Sertifikat">Sertifikat</option>
                                      <option value="Banner">Banner</option>
                                      <option value="Ribbon">Ribbon</option>
                                      <option value="Throphie">Throphie</option>
                                      <option value="Flag">Flag</option>
                                      <option value="Voucher">Voucher</option>
                                      <option value="Best Employee Award">Best Employee Award</option>
                                      <option value="Happy Icon">Happy Icon</option>
                                      <option value="Recognition Letter">Recognition Letter</option>
                                      <option value="Thank You Note in Post It">Thank You Note in Post It</option>
                                      <option value="Appreciation Card for good performance">Appreciation Card for good performance</option> 
                                      <option value="Appreciation for employee “Personal Days” (birthdays, pension, anniversaries, etc.)">Appreciation for employee “Personal Days” (birthdays, pension, anniversaries, etc.)</option>
                                      <option value="Recognition Speeches">Recognition Speeches</option>
                                      <option value="Recognition Words (Bravo,Wow,Thank You)">Recognition Words (Bravo,Wow,Thank You)</option>
                                      <option value="Other">Other..</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Reinforcement Negatif
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" required="true" name="r_negatif">
                                      <option value="">Choose..</option>
                                      <option value="Sad Icon">Sad Icon</option>
                                      <option value="Black Flag">Black Flag</option>
                                      <option value="Pegawai Telatan of the month">Pegawai Telatan of the month</option>
                                      <option value="Punishment Card">Punishment Card</option>
                                      <option value="Punishment Letter">Punishment Letter</option>
                                      <option value="Punishment Speeches">Punishment Speeches</option>
                                      <option value="Coaching">Coaching</option>
                                      <option value="Berdiri di depan lift">Berdiri di depan lift</option>
                                      <option value="Other">Other..</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bukti
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="file" id="file" name="file" required  value="" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <p><i>*Bukti harus dengan format .zip atau .rar dan ukuran max 4MB</i></p>
                                  <p><i>*Bukti berisi 3 folder dengan konten 1. Bukti Capaian Program, 2. Bukti Metode Tracking, 3. Bukti Reinforcement</i></p>
                                  <p><i>*Jika file lebih dari 4MB, harap upload video di drive, copy link kedalam file txt dan upload dalam format .zip atau .rar</i></p>
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Cancel</button></a>
                                  <button type="submit" name="submit" class="btn btn-success" value="simpan">Submit</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <?php 
                      }
                    }
                    
                    ?>
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
</body>
</html>
