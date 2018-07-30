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
                <ul class="nav navbar-top-links navbar-left"  style="color:black">
                    <li>
                           <h4></h4>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>user/warrior" style="color:black">
                            <i class="fa fa-user"></i> Data Warrior
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>user/timbudaya" style="color:black">
                            <i class="fa fa-users"></i> Data Tim Implementasi Budaya
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
                      <li class="center"><i class="fa fa-map-marker user-profile-icon"></i> Unit : <?php echo $this->session->userdata('username'); ?>
                      </li>
                    </ul>

                    
                    <br />
                    <div style="text-align:center">
                      <a href="<?php echo base_url()?>user/history"><button type="submit" class="btn btn-primary btn-xs" style="width: 80% ; font-size: 100%" >Lihat Histori</button></a>
                    </div>

                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Program Report</h2>
                      </div>
                      
                    </div>
                    <br>
                    <div class="x_panel ui-ribbon-container ">

                      <div class="x_content">
                       
                         <table class="table  table-hover dataTables-example" style="font-size:14px">
                          <thead>
                            <tr>
                              <th style="width:5%">#</th>
                              <th style="width:40%">Program</th>
                              <th style="width:20%; text-align:center">Target</th>
                              <th style="width:20%; text-align:center">Satuan</th>
                              <th style="width:15%; text-align:center">Opsi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $a=count($program);
                              for ($i=0; $i <$a ; $i++) { 
                              ?>
                              <tr>

                                <?php
                                if ($program[$i]->input_id) {

                                  ?>
                                  <th scope="row"><?php echo $i+1; ?></th>
                                  <td><?php echo $program[$i]->cc_detail; 

                                  ?></td>
                                  <td style="text-align:center">
                                    <?php echo $program[$i]->input_target;?>
                                  </td> 
                                  <td style="text-align:center">
                                    <?php echo $program[$i]->input_satuan;?>
                                  </td>
                                  <td class=" last" style="vertical-align: middle; text-align: center; ">
                                  <a href="<?php echo base_url()?>user/evaluasi_data/<?php echo $program[$i]->cc_id?>"><button type="submit" class="btn btn-primary btn-s">Evaluasi</button></a>

                                  </td>
                                  <?php
                                } else {
                                  ?>
                                  <th scope="row"><?php echo $i+1; ?></th>
                                  <td><?php echo $program[$i]->cc_detail; ?></td>
                                  <td style="text-align:center">
                                    -
                                  </td> 
                                  <td style="text-align:center">
                                    -
                                  </td>
                                  <td class=" last" style="vertical-align: middle; text-align: center; ">
                                    <button type="button" class="btn btn-success table-hover btn-s" data-toggle="modal"  data-target="#isi<?php echo $program[$i]->cc_id?>">Isi</button>

                                  </td>
                                  <?php
                                }
                                ?>


                              </tr>
                              <div class="modal fade" id="isi<?php echo $program[$i]->cc_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                      <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Isi Program</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                                <!-- Isi Modal -->
                                                                <div class="box-body">
                                                                <?php echo form_open_multipart('user/isi_data/' .$program[$i]->cc_detail)?>
                                                                <div class="row">
                                                                  <div class="col-md-12">
                                                                    <div class="form-group">
                                                                      <h5>Nama Program</h5>
                                                                      <input type="text" class="form-control" autocomplete="off" disabled="true" value="<?php echo $program[$i]->cc_detail?>">
                                                                      <input type="hidden" class="form-control" name="program" autocomplete="off" value="<?php echo $program[$i]->cc_detail?>">
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                    <div class="form-group">
                                                                      <h5>Deskripsi Program</h5>
                                                                      <textarea id="desc" name="deskripsi" style="height: 200px" class="resizable_textarea form-control input" disabled="true" value="<?php echo $program[$i]->cc_desc?>"><?php echo $program[$i]->cc_desc?></textarea>
                                                                    </div>
                                                                  </div> 
                                                                  </div>
                                                                  <div class="row">   
                                                                   <div class="col-md-6">
                                                                      <div class="form-group" id="data_1">
                                                                          <label>Target Satuan</label>
                                                                          <select id="heard" class="form-control col-md-7 col-xs-12" name="satuan" required>
                                                                          <option disabled selected hidden>Choose..</option>
                                                                          <option disabled ></option>
                                                                          <option value="Uang (Rp)">Uang (Rp)</option>
                                                                          <option value="Persentase (%)">Persentase (%)</option>
                                                                          <option value="Waktu (Hari)">Waktu (Hari)</option>
                                                                          <option value="Jumlah (kali)">Jumlah (kali)</option>
                                                                        </select>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group" id="data_1">
                                                                          <label>Target</label>
                                                                          <input type="number" name="target" id="first-name" min="1" required class="form-control col-md-7 col-xs-12" value="">
                                                                      </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane "></i>  Submit</button>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <?php echo form_close()?>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    </div>
                              <div class="modal fade" id="evaluasi<?php echo $program[$i]->cc_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                      <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Evaluasi Program</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                                <!-- Isi Modal -->
                                                                <div class="box-body">
                                                                <?php echo form_open_multipart('user/evaluasi_data/' .$program[$i]->cc_detail)?>
                                                                <div class="row">
                                                                  <div class="col-md-12">
                                                                    <div class="form-group">
                                                                      <h5>Nama Program</h5>
                                                                      <input type="text" class="form-control" autocomplete="off" disabled="true" value="<?php echo $program[$i]->cc_detail?>">
                                                                      <input type="hidden" class="form-control" name="program" autocomplete="off" value="<?php echo $program[$i]->cc_detail?>">
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                    <div class="form-group">
                                                                      <h5>Deskripsi Program</h5>
                                                                      <textarea id="desc" name="deskripsi" class="resizable_textarea form-control input" disabled="true" value="<?php echo $program[$i]->cc_desc?>"><?php echo $program[$i]->cc_desc?></textarea>
                                                                    </div>
                                                                  </div> 
                                                                  </div>
                                                                  <div class="row">   
                                                                   <div class="col-md-6">
                                                                      <div class="form-group" id="data_1">
                                                                          <label>Target Satuan</label>
                                                                          <select id="heard" class="form-control col-md-7 col-xs-12" name="satuan" required>
                                                                          <option disabled selected hidden>Choose..</option>
                                                                          <option disabled ></option>
                                                                          <option value="Uang (Rp)">Uang (Rp)</option>
                                                                          <option value="Persentase (%)">Persentase (%)</option>
                                                                          <option value="Waktu (Hari)">Waktu (Hari)</option>
                                                                          <option value="Jumlah (kali)">Jumlah (kali)</option>
                                                                        </select>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group" id="data_1">
                                                                          <label>Target</label>
                                                                          <input type="number" name="target" id="first-name" min="1" required class="form-control col-md-7 col-xs-12" value="">
                                                                      </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane "></i>  Submit</button>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <?php echo form_close()?>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    </div>
                              <?php } ?>
                          </tbody>
                        </table>
                    </div>
                  </div>

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

</body>
</html>
