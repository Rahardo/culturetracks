<?php
if($this->input->post('is_submitted')){
            $skala        = set_value('skala');
            $label1        = set_value('label1');
            $label2        = set_value('label2');
            $tahun_aktif = set_value('tahun_aktif');
            $periode_aktif = set_value('periode_aktif');
}
else {
            $skala        = $setting->skala;
            $label1        = $setting->label1;
            $label2        = $setting->label2;
            $tahun_aktif = $setting->tahun_aktif;
            $periode_aktif = $setting->periode_aktif;
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Innovation Awards | Dashboard</title>

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
                        <a href="<?php echo base_url()?>admin/index"><i class="fa fa-th-large"></i> <span class="nav-label">Homepage</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/setup_people"><i class="fa fa-users"></i> <span class="nav-label">Setup People</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/setup_question"><i class="fa fa-question-circle"></i> <span class="nav-label">Setup Question</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/upload"><i class="fa fa-upload"></i> <span class="nav-label">Upload Nilai Kinerja</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/status_people"><i class="fa fa-check"></i> <span class="nav-label">Lihat Status</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/nilai_akhir"><i class="fa fa-user"></i> <span class="nav-label">Nilai Akhir</span></a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>admin/setting"><i class="fa fa-cog"></i> <span class="nav-label">Setting</span></a>
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
                      <span class="m-r-sm text-muted welcome-message">Welcome to Garuda Sincerity 360.</span>
                  </li>
                  <li>
                      <a href="<?php echo base_url()?>admin/logout">
                          <i class="fa fa-sign-out"></i> Log out
                      </a>
                  </li>
              </ul>
          </nav>
        </div>
        
          <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Setting</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url()?>admin">Home</a>
                        </li>
                        <li class="active">
                            <strong>Setting</strong>
                        </li>
                    </ol>
                </div>
            </div>      
          
          <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Setting Pertanyaan <small>Berisi skala dan label pertanyaan yang akan diisi oleh pegawai.</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                        
                          <?php echo form_open_multipart('admin/update_skala')?>
                          <div class="box-body">
                          
                          <div class="row">
                            <input type="hidden" class="form-control" name="sampel" value="">
                            <div class="col-md-4">
                              <h5><strong>Skala</strong></h5>
                              <h5>Isi dengan skala likert terbesar</h5>
                            </div>
                            <div class="col-md-4">
                            <br>
                              <div class="input-group">                  
                                <input type="number" class="form-control" name="skala" placeholder="skala" style="font-size: 11px" value="<?= $skala?>">
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <input type="hidden" class="form-control" name="sampel" value="">
                            <div class="col-md-4">
                              <h5><strong>Label Setuju</strong></h5>
                            </div>
                            <div class="col-md-4">
                            <br>
                              <div class="input-group">                  
                                <input type="input" class="form-control" name="label1" placeholder="ex : Selalu" style="font-size: 11px" value="<?= $label1?>">
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <input type="hidden" class="form-control" name="sampel" value="">
                            <div class="col-md-4">
                              <h5><strong>Label Tidak Setuju</strong></h5>
                            </div>
                            <div class="col-md-4">
                            <br>
                              <div class="input-group">                  
                                <input type="input" class="form-control" name="label2" placeholder="ex : Tidak Pernah" style="font-size: 11px" value="<?= $label2?>">
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <input type="hidden" class="form-control" name="sampel" value="">
                            <div class="col-md-4">
                              <h5><strong>Tahun Aktif</strong></h5>
                            </div>
                            <div class="col-md-4">
                            <br>
                              <div class="input-group">                  
                               <select class="form-control" name="tahun_aktif">
                                    <option value="<?=$tahun_aktif?>"><?=$tahun_aktif?></option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <input type="hidden" class="form-control" name="sampel" value="">
                            <div class="col-md-4">
                              <h5><strong>Periode Aktif</strong></h5>
                            </div>
                            <div class="col-md-4">
                            <br>
                              <div class="input-group">                  
                               <select class="form-control" name="periode_aktif">
                                    <option value="<?=$periode_aktif?>"><?=$periode_aktif?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="hr-line-dashed"></div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-success" onclick="return confirm(\'Apakah Anda Yakin?\')">Simpan</button>
                          </div>
                        <?php echo form_close()?>  
                            
                          </div>
                        </div>
                      </div>
                    </div>
                            <?php $a=count($rekomendasi);  $b=0; for ($i=0; $i < $a; $i++) { $b++; ?> 
                  <div class="col-lg-12"> 
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Nilai Garuda Indonesia</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="widget-text-box">
                                
                                <p style="font-size: 14px;">
                                    <h4><?php echo $b?>. <?php echo $rekomendasi[$i]->kriteria?></h4>
                                </p>
                                <div class="hr-line-dashed"></div>
                                <div class="row">
                                    <div class="col-lg-12">                                
                                        <h5 class="text-navy">Rekomendasi Top</h5>
                                        <p style="font-size: 14px; text-align: justify;">
                                            <strong><?php echo $rekomendasi[$i]->top?></strong>
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="text-navy">Rekomendasi Bottom</h5>
                                        <p style="font-size: 14px; text-align: justify;">
                                            <strong><?php echo $rekomendasi[$i]->bottom?></strong>
                                            <button type="button" class="btn btn-warning btn-xs table-hover pull-right" data-toggle="modal" data-target="#<?php echo $rekomendasi[$i]->id_rekomendasi ?>">Edit</button>                                    
                                        </p>
                                    </div>
                                </div>
                            <?php 
                            if($this->input->post('is_submitted')){

                                        $id_rekomendasi     = set_value('id_rekomendasi');
                                        $kriteria           = set_value('kriteria');
                                        $top                = set_value('top');
                                        $bottom             = set_value('bottom');       
                            }
                            else {
                                        $id_rekomendasi      = $rekomendasi[$i]->id_rekomendasi;
                                        $kriteria            = $rekomendasi[$i]->kriteria;
                                        $top                 = $rekomendasi[$i]->top;
                                        $bottom              = $rekomendasi[$i]->bottom;  
                            }
                            ?>
                                <!-- Modal -->
                            <div class="modal fade" id="<?php echo $rekomendasi[$i]->id_rekomendasi?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Rekomendasi <small class="text-navy"> Sesuaikan dengan kriteria.</small></h4>
                                  </div>
                                  <div class="modal-body">
                                        <!-- Isi Modal -->
                                        <div class="box-body">
                                        <?php echo form_open_multipart('admin/edit_rekomendasi/' .$id_rekomendasi)?>
                                        <div class="row">
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label>Kriteria</label>
                                                <input type="text" disabled class="form-control" name="kriteria" value="<?=$kriteria?>">
                                              </div>
                                            </div>                   
                                          </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label>Rekomendasi Bottom</label>
                                                <textarea style="height: 100px;" type="text" class="form-control " required name="top" value="<?=$top?>"><?=$top?></textarea>
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label>Rekomendasi Bottom</label>
                                                <textarea style="height: 100px;" type="text" class="form-control " required name="bottom" value="<?=$bottom?>"><?=$bottom?></textarea>
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
                    </div>
                </div>
                </div>
        </div>
        <br>
                <?php } ?> 
                    </div>
                  </div>

                    
          
          <div class="footer">
            <div class="row">

                <div class="footer">
                    <div>
                        <strong>Copyright</strong> &copy; 2017 Garuda Indonesia. All rights reserved.
                    </div>
                </div>
          </div>
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

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });
    </script>
    <style>
      .table-responsive {
          min-height: .01%;
          overflow-x: hidden;
      }
    </style>
</body>
</html>
    