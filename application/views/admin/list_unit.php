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
                    <li >
                        <a href=""><i class="fa fa-edit"></i> <span class="nav-label">Culture Programs</span><span class="fa fa-caret-down pull-right"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url()?>admin/program"><i class="fa fa-pencil"></i> List Program</a></li>
                            <li><a href="<?php echo base_url()?>admin/tambah_program"><i class="fa fa-bar-chart-o"></i> Tambah Program</a></li>
                            <!-- <li><a href="<?php echo base_url()?>admin/progress_program"><i class="fa fa-bar-chart-o"></i> Progress Program</a></li> -->
                        </ul>
                    </li>
                    <li class="active">
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
                    <h2>List User</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url()?>admin">Home</a>
                        </li>
                        <li class="active">
                            <strong>List User</strong>
                        </li>
                    </ol>
                </div>
            </div>
       
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-3">
                    <a href="<?php echo base_url()?>admin/tambah_user"><div class="widget navy-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-paper-plane fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <h2 class="font-bold">Tambah User</h2>                       
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-9">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Daftar Unit</h5>
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
                          <th class="text-center" style="width:5%">Unit</th>
                          <th class="text-center" style="width:12%">Username</th>
                          <th class="text-center" style="width:12%">Password</th>
                          <th class="text-center" style="width:7%">Action</th>
                          </th>
                          
                        </tr>
                      </thead>
                <tbody class="text-center">
                  <?php $a=count($unit);  $b=0; for ($i=0; $i < $a; $i++) { $b++; ?> 
                  <tr>
                  <td style="width:3%"><?php echo $b?></td> 
                  <td style="width:12%"><?php echo $unit[$i]->username?></td>
                  <td style="width:12%"><?php echo $unit[$i]->username?></td>
                  <td style="width:10%"><?php echo $unit[$i]->password?></td>
                  <td style="width:13%" class="text-center">
                                        <button type="button" class="btn btn-warning btn-xs table-hover" data-toggle="modal"  data-target="#<?php echo $unit[$i]->iduser?>">Edit</button>
                                        <?=anchor( 'admin/delete_user/' . $unit[$i]->iduser,
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
                                                    $id=$unit[$i]->iduser;
                                                    if($this->input->post('is_submitted')){

                                                                $username                = set_value('username');
                                                                $password                  = set_value('password');
                                                    }
                                                    else {
                                                                $username                = $unit[$i]->username;
                                                                $password                  = $unit[$i]->password;
                                                    }
                                                    ?>
                                                        <!-- Modal -->
                                                    <div class="modal fade" id="<?php echo $unit[$i]->iduser?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                      <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                                <!-- Isi Modal -->
                                                                <?php echo form_open_multipart('admin/edit_user/' .$id)?>
                                                                <div class="row">
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Username</h5>
                                                                      <input type="text" class="form-control" name="username" autocomplete="off" required value="<?=$username?>">
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Password Lama</h5>
                                                                      <input type="text" class="form-control" autocomplete="off" required value="<?=$password?>">
                                                                    </div>
                                                                  </div> 
                                                                  <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <h5>Password Baru</h5>
                                                                      <input type="password" class="form-control" autocomplete="off" name="password" required>
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
    