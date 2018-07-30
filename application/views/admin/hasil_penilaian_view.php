<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Innovation Awards | Dashboard</title>

    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
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
                        <a href="<?php echo base_url()?>admin/index"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/demography"><i class="fa fa-pie-chart"></i> <span class="nav-label">Demography</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/innovation_list"><i class="fa fa-flask"></i> <span class="nav-label">Innovation List</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/assessment"><i class="fa fa-edit"></i> <span class="nav-label">Assessment</span></a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>admin/result"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Assessment Result</span></a>
                    </li>
                    <li>
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
                      <span class="m-r-sm text-muted welcome-message">Welcome to GA Group Innovation Awards.</span>
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
                    <h2>Assessment Result</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url()?>admin">Home</a>
                        </li>
                        <li class="active">
                            <strong>Assessment Result</strong>
                        </li>
                    </ol>
                </div>
            </div>      
          
          <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-9">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Daftar hasil penilaian inovasi</h5>
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

                <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover dataTables-example">
                <thead>
                <tr>
                  <th style="width:10%" class="text-center">NIP</th>
                  <th style="width:50%" class="text-center">Judul</th>
                  <th style="width:20%" class="text-center">Kategori</th>
                  <th style="width:20%" class="text-center">Nilai</th>
                </tr>
                </thead>
                <tbody>
                 <?php foreach($hasil_penilaian as $hasil) : ?>
                  <tr>
                  <td style="width:10%"><?php echo $hasil->nip1?></td>
                  <td style="width:50%"><a class="table-hover" data-toggle="modal" data-target="#<?php echo $hasil->id?>"><?php echo $hasil->judul?></a></td>
                  <td style="width:20%"><?php echo $hasil->kategori?></td>
                  <td style="width:20%" class="text-center">
                                     <large class="label label-danger" style="font-size: 14px;"><?php echo $hasil->rata_rata?></large>
                  </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="<?php echo $hasil->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Detail Inovasi</h4>
                      </div>
                      <div class="modal-body">
                        <!-- /.box-header -->
                        <div class="box-body">
                          <label>Individu</label>
                          <div class="row">
                            <div class="col-md-2">
                              <div class="form-group">
                                <h5>NIP Ketua</h5>
                                <input type="text" class="form-control" disabled="true"  required name="nip1" placeholder="NIP" value="<?php echo $hasil->nip1 ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5>Nama Pegawai</h5>
                                <input type="text" class="form-control " disabled="true" required name="nama1" placeholder="Nama" value="<?php echo $hasil->nama1?>">
                              </div>
                            </div>                   
                          </div>
                          <label>Team*</label>
                          <div class="row">
                            <div class="col-md-2">
                              <div class="form-group">
                                <h5>NIP Anggota 1</h5>
                                <input type="text" class="form-control " disabled="true" name="nip2" placeholder="NIP" value="<?php echo $hasil->nip2; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <h5>NIP Anggota 2</h5>
                                <input type="text" class="form-control " disabled="true" name="nip3" placeholder="NIP" value="<?php echo $hasil->nip3; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <h5>NIP Anggota 3</h5>
                                <input type="text" class="form-control " disabled="true" name="nip4" placeholder="NIP" value="<?php echo $hasil->nip4; ?>">
                              </div>
                            </div>
                          </div>
                          <h5>* Hanya diisi jika pendaftaran dilakukan secara team</h5>
                      <!-- /.box -->
                          <!-- /.box-header -->
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label>Kategori</label>
                                  <select class="form-control" name="kategori">
                                     <option value="<? php $hasil->kategori?>"><?php echo $hasil->kategori?></option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Judul Inovasi</label>
                                <input disabled="true" type="text" class="form-control " required name="judul" placeholder="Judul" value="<?php echo $hasil->judul; ?>">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Latar Belakang</label>
                                <textarea disabled="true" style="height: 100px;"type="text" class="form-control " required name="latar_belakang" placeholder="Berisi latar belakang bagaimana kondisi saat ini dan mengapa inovasi tersebut perlu dilakukan" value="<?php echo $hasil->latar_belakang; ?>"><?php echo $hasil->latar_belakang; ?></textarea>
                              </div>
                            </div> 
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Deskripsi Inovasi</label>
                                <textarea disabled="true" style="height: 200px;"type="text" class="form-control " required name="deskripsi" placeholder="Berisi deskripsi dari ide inovasi dan langkah-langkah pelaksanaannya" value="<?php echo $hasil->deskripsi; ?>"><?php echo $hasil->deskripsi; ?></textarea>
                              </div>
                            </div>
                            <div class="col-md-6">
                                    <label>File Attachment</label>
                                    <div>
                                      <?php if($hasil->userfile == NULL){ ?>
                                       <h5>Tidak ada file</h5>
                                      <?php } else {?>
                                      <a href="<?php echo base_url();?>uploads/<?php echo $hasil->userfile ?>"><?php echo $hasil->userfile ?></a>
                                      <?php }?>
                                    </div>
                            </div>                           
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Lama Pelaksanaan (bulan)</label>
                                <input disabled="true" type="number" class="form-control" required name="waktu" placeholder="ex: 3" value="<?php echo $hasil->waktu; ?>"></div>
                              </div>
                            
                            <div class="col-md-12">
                                <div class="hr-line-dashed"></div>
                                <h3>Potensi<small> Boleh hanya diisi salah satu atau keduanya.</small></h3>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Cost Saving*</label>
                                <input disabled="true" type="text" min="0" class="form-control "  name="cost_saving" placeholder="ex: 2000000" value="<?php echo 'Rp ' . number_format($hasil->cost_saving,0,".","."); ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Revenue*</label>
                                <input disabled="true" type="text" min="0" class="form-control "  name="revenue" placeholder="ex: 2000000" value="<?php echo 'Rp ' . number_format($hasil->revenue,0,".","."); ?>">
                              </div>
                            </div>
                            
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
                </tbody>
              </table>
              <label>*klik pada judul untuk melihat detail</label>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">

                  <div class="ibox-content">
                      <h2>TOP 3</h2>
                      <small>Tiga inovasi dengan nilai tertinggi dari seluruh kategori.</small>
                      
                      <ul class="todo-list m-t">
                          <?php foreach($top_tiga as $hasil) : ?>
                          <li>
                              <span class="m-l-xs"><?php echo $hasil->judul?></span>
                              <small class="label label-warning"></i> <?php echo $hasil->rata_rata?></small>
                          </li>
                          <?php endforeach; ?>                         
                      </ul>
                  </div>
            </div>
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
    