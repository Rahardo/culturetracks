<?php 
    date_default_timezone_set('Asia/Bangkok');
    $sekarang = date("Y-m-d");
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <title>Garuda Indonesia Group</title>

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
                                <li><a href="<?php echo base_url()?>user/profile">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url()?>user/logout">Logout</a></li>
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
                    <li class="active">
                        <a href="<?php echo base_url()?>admin/status_people"><i class="fa fa-check"></i> <span class="nav-label">Lihat Status</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/nilai_akhir"><i class="fa fa-user"></i> <span class="nav-label">Nilai Akhir</span></a>
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
                      <span class="m-r-sm text-muted welcome-message">Welcome to Garuda Sincerity 360.</span>
                  </li>
                  <li>
                      <a href="<?php echo base_url()?>user/logout">
                          <i class="fa fa-sign-out"></i> Log out
                      </a>
                  </li>
              </ul>
          </nav>
        </div>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Status People</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url()?>admin">Home</a>
                        </li>
                        <li class="active">
                            <strong>Status People</strong>
                        </li>
                    </ol>
                </div>
         </div>
        
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Daftar Status Pegawai</h5>
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
                  <th class="text-center">Target</th>
                  <th class="text-center">Penilai</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php foreach($status_people as $p) : ?>
                  <tr>
                  <td class="text-center"><?php echo $p->name?><br><?php echo $p->target?></td>
                  <td class="text-center"><?php echo $p->nama_penilai?><br><?php echo $p->penilai?></td>
                  <td class="text-center"><?php if($p->status==1) { ?> 
                        <small class="label label-primary" style="font-size: 12px"><?php echo "sudah melakukan penilaian";?></small>
                    <?php } else { ?> 
                        <small class="label label-danger" style="font-size: 12px"><?php echo "belum melakukan penilaian";?></small>
                    <?php }?></td>
                  <td class="text-center"><?php if($p->status==1) { ?> 
                        <?=anchor( 'admin/delete_isian/' . $p->id_assessment,
                                       'Hapus isian',
                                       ['class'=>'btn btn-w-m btn-danger btn-xs',
                                       'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                                       ])?>
                    <?php }?></td>
                  </tr>
                <?php endforeach; ?>
                
                </tbody>
              </table>
              <label>*klik pada judul untuk melihat detail</label>
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
