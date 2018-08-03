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
                        <a href="<?php echo base_url()?>admin_radar/index"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Performance</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/dashboard_warrior"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Warrior</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/dashboard_implementasi_budaya"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard TIB</span></a>

                    </li>
                    <li class="active">
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
                    <h2>List Program</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url()?>admin">Home</a>
                        </li>
                        <li class="active">
                            <strong>List Program</strong>
                        </li>
                    </ol>
                </div>
            </div>
       
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-3">
                    <a href="<?php echo base_url()?>admin/tambah_program"><div class="widget navy-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-paper-plane fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <h2 class="font-bold">Tambah Program</h2>                       
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-9">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Daftar Program</h5>
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
                          <th class="text-center" style="width:12%">Program</th>
                          <th class="text-center" style="width:30%">Deskripsi</th>
                          <th class="text-center" style="width:7%">Start Date</th>
                          <th class="text-center" style="width:7%">End Date</th>
                          <th class="text-center" style="width:5%">Status</th>
                          <th class="text-center" style="width:13%">Action</th>
                          </th>
                          
                        </tr>
                      </thead>
                <tbody class="text-center">
                  <?php $a=count($program);  $b=0; for ($i=0; $i < $a; $i++) { $b++; ?> 
                  <tr>
                  <td style="width:3%"><?php echo $b?></td> 
                  <td style="width:12%"><?php echo $program[$i]->cc_detail?></td>
                  <td style="width:30%"><?php echo $program[$i]->cc_desc?></td>
                  <td style="width:10%"><?php echo $program[$i]->start_month?></td>
                  <td style="width:10%"><?php echo $program[$i]->end_month?></td>
                  <td style="width:5%"><?php if ($program[$i]->status=='Disable') { ?> <small class="label label-danger" style="font-size: 12px">Disable</small>
                  <?php } else if ($program[$i]->status=='Default'){?> <small class="label label-info" style="font-size: 12px">Active</small><?php }?></td>
                  <td style="width:13%" class="text-center">
                                        <button type="button" class="btn btn-warning btn-xs table-hover" data-toggle="modal"  data-target="#<?php echo $program[$i]->cc_id?>">Edit</button>
                                        <?=anchor( 'admin/delete_program/' . $program[$i]->cc_id,
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
                                                    $id=$program[$i]->cc_id;
                                                    if($this->input->post('is_submitted')){

                                                                $namaprogram                = set_value('program');
                                                                $deskripsi                  = set_value('deskripsi');
                                                                $status                     = set_value('status');
                                                                $waktu_pelaksanaan1          = set_value('waktu_pelaksanaan');       
                                                                $batas_pelaksanaan2         = set_value('batas_pelaksanaan');
                                                    }
                                                    else {
                                                                $namaprogram                = $program[$i]->cc_detail;
                                                                $deskripsi                  = $program[$i]->cc_desc;
                                                                $status                     = $program[$i]->status;
                                                                $waktu_pelaksanaan1          = $program[$i]->start_month;       
                                                                $batas_pelaksanaan2          = $program[$i]->end_month;
                                                    }
                                                    ?>
                                                        <!-- Modal -->
                                                    <div class="modal fade" id="<?php echo $program[$i]->cc_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                      <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Edit Program</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                                <!-- Isi Modal -->
                                                                <div class="box-body">
                                                                <?php echo form_open_multipart('admin/edit_program/' .$id)?>
                                                                <div class="row">
                                                                  <div class="col-md-12">
                                                                    <div class="form-group">
                                                                      <h5>Nama Program</h5>
                                                                      <input type="text" class="form-control" name="program" autocomplete="off" required value="<?=$namaprogram?>">
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-12">
                                                                    <div class="form-group">
                                                                      <h5>Deskripsi Program</h5>
                                                                      <textarea id="desca" name="deskripsi" class="resizable_textarea form-control input" required><?=$deskripsi?></textarea>
                                                                    </div>
                                                                  </div>    
                                                                   <div class="col-md-6">
                                                                        <div class="form-group" id="data_1">
                                                                            <label>Waktu Pelaksanaan</label>
                                                                            <div class="input-group date">
                                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                                <input type="date" class="form-control" name="waktu_pelaksanaan" value="<?=$waktu_pelaksanaan1?>"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" id="data_1">
                                                                            <label>Batas Waktu Pelaksanaan</label>
                                                                            <div class="input-group date">
                                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" class="form-control" name="batas_pelaksanaan" value="<?=$batas_pelaksanaan2?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  <div class="col-md-12">
                                                                    <div class="form-group">
                                                                      <input type="radio" name="status" value="Default" <?php if($status=='Default') echo "checked"; ?> > Jadikan Pertanyaan Default<br>
                                                                      <input type="radio" name="status" value="Disable" <?php if($status=='Disable') echo "checked"; ?>> Jangan Jadikan Pertanyaan Default
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
          overflow-x: visible;
      }
    </style>


</body>
</html>
    