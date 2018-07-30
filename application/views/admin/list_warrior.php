<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Garuda Indonesia | Dashboard</title>
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/iCheck/custom.css" rel="stylesheet">
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
                    <li>
                        <a href="<?php echo base_url()?>admin/dashboard_warrior"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Warrior</span></a>

                    </li>
                    <li>
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
                    <li class="active">
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
                      <span class="m-r-sm text-muted welcome-message">Welcome to Garuda Culture Program</span>
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
                    <h2>List Warrior</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url()?>admin">Home</a>
                        </li>
                        <li class="active">
                            <strong>List Warrior</strong>
                        </li>
                    </ol>
                </div>
            </div>
       
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-3">
                    <button class="widget navy-bg" data-toggle="modal"  data-target="#daftar">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-paper-plane fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <h2 class="font-bold" data-toggle="modal"  data-target="#daftara">Tambah Warrior</h2>                       
                            </div>
                        </div>
                    </button>
                                        <div class="modal fade" id="daftara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                      <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Tambah Warrior</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                                <!-- Isi Modal -->
                                                                <?php echo form_open_multipart('admin/tambah_warrior')?>
                                                                <div class="row">
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Nomer Pegawai</h5>
                                                                      <input type="text" class="form-control" name="nopeg" autocomplete="off" required >
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Unit</h5>
                                                                      <input type="text" name="unit" class="form-control" autocomplete="off" required >
                                                                    </div>
                                                                  </div> 
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Direktorat</h5>
                                                                      <input type="text" name="direktorat" class="form-control" autocomplete="off" required >
                                                                    </div>
                                                                  </div>    
                                                                </div>
                                                                <div class="row">
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Status Aktif</h5>
                                                                      <select class="form-control" required="true" name="status_aktif" value="<?php echo $status_aktif?>">
                                                                          <option value="1">Aktif</option>
                                                                          <option value="0">Tidak Aktif</option>
                                                                      </select>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-8">
                                                                    <div class="form-group">
                                                                      <h5>Email</h5>
                                                                      <input type="text" class="form-control" name="email" autocomplete="off" required >
                                                                    </div>
                                                                  </div>   
                                                                </div>
                                                                <div class="row">
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane "></i>  Submit</button>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>
                                                                <?php echo form_close()?>
                                                          </div>
                                                       
                                                      </div>
                                                    </div>
                                                  </div>
                    <center><h1>OR</h1></center>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Upload Data <small>Berisi data warrior dari setiap unit.</small></h5>
                            <a href="<?php echo base_url()?>assets/warrior.xlsx">Download Template Pengisian</a>
                        </div>
                        <div class="ibox-content">
                        <?php echo form_open_multipart('admin/upload_warrior')?>
                                                       
                                    <div class="form-group">                                     
                                      <input type="hidden" class="form-control" name="judul" autocomplete="off" value="a" placeholder="Judul">
                                    </div> 
                                    <div class="form-group">
                                        <label>File (Max 2MB dan XLS)</label>
                                        <input type="file" name="userfile" >
                                    </div>
                                
                                                                                         
                                    <div class="hr-line-dashed"></div>
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane "></i>   Submit</button>
                                    <?php echo form_close()?>               
                        </div>
                      </div>
                </div>
                <div class="col-lg-9">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Daftar Warrior</h5>
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
                        <tr class="headings">
                          <th class="text-center" style="width:5%">No</th>
                          <th class="text-center" style="width:5%">Nopeg</th>
                          <th class="text-center" style="width:12%">Unit</th>
                          <th class="text-center" style="width:12%">Direktorat</th>
                          <th class="text-center" style="width:12%">Status</th>
                          <th class="text-center" style="width:12%">Email</th>
                          <th class="text-center" style="width:7%">Action</th>
                          </th>
                          
                        </tr>
                      </thead>
                <tbody class="text-center">
                  <?php $a=count($warrior);  $b=0; for ($i=0; $i < $a; $i++) { $b++; ?> 
                  <tr>
                  <td style="width:3%"><?php echo $b?></td> 
                  <td style="width:12%"><?php echo $warrior[$i]->nopeg?></td>
                  <td style="width:12%"><?php echo $warrior[$i]->unit?></td>
                  <td style="width:10%"><?php echo $warrior[$i]->direktorat?></td>
                  <td style="width:10%"><?php if ($warrior[$i]->status_aktif==1) echo "Aktif"; else echo "Tidak Aktif";?></td>
                  <td style="width:10%"><?php echo $warrior[$i]->email?></td>
                  <td style="width:13%" class="text-center">
                                        <button type="button" class="btn btn-warning btn-xs table-hover" data-toggle="modal"  data-target="#<?php echo $warrior[$i]->nopeg?>">Edit</button>
                                        <?=anchor( 'admin/delete_warrior/' . $warrior[$i]->nopeg,
                                       'Delete',
                                       ['class'=>'btn btn-w-m btn-danger btn-xs',
                                       'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                                       ])?>
                  </td>
                </tr>
                    </div>
                  </div>
                </div>
                                                    <?php 
                                                    $id=$warrior[$i]->nopeg;
                                                    if($this->input->post('is_submitted')){

                                                                $nopeg          = set_value('nopeg');
                                                                $unit           = set_value('unit');
                                                                $direktorat     = set_value('direktorat');
                                                                $status_aktif   = set_value('status_aktif');       
                                                                $email          = set_value('email');
                                                    }
                                                    else {
                                                                $nopeg          = $warrior[$i]->nopeg;
                                                                $unit           = $warrior[$i]->unit;
                                                                $direktorat     = $warrior[$i]->direktorat;
                                                                $status_aktif   = $warrior[$i]->status_aktif;
                                                                $email          = $warrior[$i]->email;       
                                                    }
                                                    ?>
                                                        <!-- Modal -->
                                                    <div class="modal fade" id="<?php echo $warrior[$i]->nopeg?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                      <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Edit Warrior</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                                <!-- Isi Modal -->
                                                                <?php echo form_open_multipart('admin/edit_warrior/' .$id)?>
                                                                <div class="row">
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Nomer Pegawai</h5>
                                                                      <input type="text" class="form-control" name="nopeg" autocomplete="off" required value="<?=$nopeg?>">
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Unit</h5>
                                                                      <input type="text" name="unit" readonly class="form-control" autocomplete="off" required value="<?=$unit?>">
                                                                    </div>
                                                                  </div> 
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Direktorat</h5>
                                                                      <input type="text" name="direktorat" readonly class="form-control" autocomplete="off" required value="<?=$direktorat?>">
                                                                    </div>
                                                                  </div>    
                                                                </div>
                                                                <div class="row">
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Status Aktif</h5>
                                                                      <select class="form-control" required="true" name="status_aktif" value="<?php echo $status_aktif?>">
                                      <option value="<?php echo $status_aktif?>"><?php if ($status_aktif==1) echo "Aktif"; else echo "Tidak Aktif"; ?></option>
                                      <option value="1">Aktif</option>
                                      <option value="0">Tidak Aktif</option>
                                  </select>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-8">
                                                                    <div class="form-group">
                                                                      <h5>Email</h5>
                                                                      <input type="text" class="form-control" name="email" autocomplete="off" required value="<?=$email?>">
                                                                    </div>
                                                                  </div>   
                                                                </div>
                                                                <div class="row">
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane "></i>  Submit</button>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>
                                                                <?php echo form_close()?>
                                                           
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
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'csv'},
                    {extend: 'excel', title: 'List Warrior'},
                    {extend: 'pdf', title: 'List Warrior'},

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
          overflow-x: visible;
      }
    </style>


</body>
</html>
    