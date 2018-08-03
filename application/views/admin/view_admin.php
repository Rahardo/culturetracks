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
    <title>Garuda Indonesia Group</title>

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
                        <a href="<?php echo base_url()?>admin/index"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Progress</span></a>

                    </li>
                    <li class="active">
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
        <!--<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <a class="close-canvas-menu"><i class="fa fa-times"></i></a>
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <span>
                                <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                            </span>
                            
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> 
                                    <span class="block m-t-xs"> 
                                        <strong class="font-bold">Admin</strong>
                                    </span> 

                                    <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> 
                                </span> 
                            </a>

                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>

                        <div class="logo-element">
                            IN+
                        </div>
                    </li>

                    <li class="active">
                        <a href="#">
                            <i class="fa fa-desktop"></i> 
                            <span class="nav-label">Survey</span>  
                            <span class="pull-right label label-primary">SPECIAL</span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url()?>admin/forms">Forms</a></li>
                            <li><a href="<?php echo base_url()?>admin/construct">Construct</a></li>
                            <li><a href="<?php echo base_url()?>admin">Question</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>-->

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <!--<div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#">
                            <i class="fa fa-bars"></i>
                        </a>

                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" 
                                       placeholder="Search for something..." 
                                       class="form-control" 
                                       name="top-search" 
                                       id="top-search">
                            </div>
                        </form>
                    </div>-->

                    <div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
              
          </div>
              <ul class="nav navbar-top-links navbar-right">
                  <li>
                      <span class="m-r-sm text-muted welcome-message">Welcome to Garuda Culture Program.</span>
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
                <div class="col-sm-4">
                    <h2>Garuda Indonesia Group</h2>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="<?php echo base_url()?>admin/index">Home</a>
                        </li>
                        <li>
                            <a>Admin</a>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="wrapper wrapper-content  animated fadeInRight article">
                <div class="row">
                    <!-- JKTDC -->                    
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">            
                            <div class="ibox-content">
                                <h2>Direktorat <b>JKTDC</b></h2>
                                <div>
                                    <canvas id="radarChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>                    

                    <div class="col-lg-8">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <p>
                                            <button type="button" 
                                                    class="btn btn-block btn-outline btn-primary" 
                                                    data-toggle="modal" 
                                                    data-target="#myModal">
                                                <i class="fa fa-wrench"></i> Pengaturan Level
                                            </button>
                                        </p>

                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 10%;">No.</th>
                                                <th class="text-center" style="width: 60%;">Level</th>
                                                <th class="text-center" style="width: 25%;">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php $n=0; foreach($list_label as $row =>$value) : $n++;?>
                                            <tr class="gradeX">
                                                <td class="text-center" style="width: 10%;"><?php echo $n; ?></td>
                                                <td><?=$value->label; ?></td>
                                                <td class="text-center">                                                       
                                                        
                                                        <button type="button" class="btn btn-xs btn-primary table-hover" data-toggle="modal" data-target="#myModal<?php echo $value->id ?>">Edit</button>

                                                        <?=anchor( 'admin/delete/' . $value->id,
                                                           'Hapus',
                                                           ['class'=>'btn btn-xs btn-danger',
                                                           'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                                                        ])?>
                                                </td>
                                            </tr>
                                            <?php 
                                                $id=$value->id;
                                                if($this->input->post('is_submitted')){
                                                    $label      =set_value('label');
                                                } else {
                                                    $label      =$value->label;
                                                }
                                            ?>
                                            <!-- Modal Edit -->
                                            <div class="modal inmodal" id="myModal<?php echo $value->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content animated bounceInRight">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                            <i class="fa fa-laptop modal-icon"></i>
                                                            <h4 class="modal-title">Edit Level</h4>
                                                            <small class="font-bold">Sesuaikan level dengan ketentuan dari training yang telah dijalankan.</small>
                                                        </div>
                                                        <?php echo form_open_multipart('admin/edit/'.$id) ?>
                                                        <div class="modal-body">
                                                            <p><strong>Level</strong> : Kalkulasi dari semua evidence yang telah disubmit oleh masing-masing unit, semakin banyak evidence yang telah disubmit oleh masing-masing unit akan membuat level unit tersebut semakin meningkat.</p>
                                                                    <div class="form-group">
                                                                        <label>Edit Level Input</label> 
                                                                        <input type="hidden" name="id" value="<?= $id ?>">
                                                                        <input type="text" 
                                                                               name="label" 
                                                                               value="<?= $label; ?>" 
                                                                               class="form-control">
                                                                    </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                        <?php echo form_close() ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </tbody>
                                    <?php endforeach; ?>
                                        <!-- Modal Tambah Label -->
                                        <div class="modal inmodal" id="myModal" 
                                             tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content animated bounceInRight">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true">&times;</span>
                                                            <span class="sr-only">Close</span>
                                                        </button>
                                                        
                                                        <i class="fa fa-laptop modal-icon"></i>
                                                        <h4 class="modal-title">Tambah Level</h4>
                                                        <small class="font-bold">Input level yang ada dari setiap training yang telah dijalankan.</small>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="<?php echo base_url(). 'admin/tambah_label'?>" method="post">
                                                            <p><strong>Level</strong> : Kalkulasi dari semua evidence yang telah disubmit oleh masing-masing unit, semakin banyak evidence yang telah disubmit oleh masing-masing unit akan membuat level unit tersebut semakin meningkat.</p>
                                                            <div class="form-group">
                                                                <label>Level Input</label> 
                                                                <input type="text" placeholder="Enter your level" class="form-control" name="label">
                                                            </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- JKTDE -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2>Direktorat <b>JKTDE</b></h2>
                                <div>
                                    <canvas id="radarChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- JKTDF -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2>Direktorat <b>JKTDF</b></h2>
                                <div>
                                    <canvas id="radarChart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- JKTDG -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2>Direktorat <b>JKTDG</b></h2>
                                <div>
                                    <canvas id="radarChart4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- JKTDN -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2>Direktorat <b>JKTDN</b></h2>
                                <div>
                                    <canvas id="radarChart6"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <!-- JKTDI -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2>Direktorat <b>JKTDI</b></h2>
                                <div>
                                    <canvas id="radarChart5"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- JKTDO -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2>Direktorat <b>JKTDO</b></h2>
                                <div>
                                    <canvas id="radarChart7"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- JKTDR -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2>Direktorat <b>JKTDR</b></h2>
                                <div>
                                    <canvas id="radarChart8"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- JKTDZ -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2>Direktorat <b>JKTDZ</b></h2>
                                <div>
                                    <canvas id="radarChart9"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>                                       
                </div>

                <div class="hr-line-dashed"></div>

                <div class="row">
                    <!-- SINAM -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2><b>SINAM</b></h2>
                                <div>
                                    <canvas id="radarChart11"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SYDAM -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2><b>SYDAM</b></h2>
                                <div>
                                    <canvas id="radarChart17"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TYOAM -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2><b>TYOAM</b></h2>
                                <div>
                                    <canvas id="radarChart12"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SHAAM -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2><b>SHAAM</b></h2>
                                <div>
                                    <canvas id="radarChart10"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MESAM -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2><b>MESAM</b></h2>
                                <div>
                                    <canvas id="radarChart14"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SUBAM -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2><b>SUBAM</b></h2>
                                <div>
                                    <canvas id="radarChart15"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- UPGAM -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2><b>UPGAM</b></h2>
                                <div>
                                    <canvas id="radarChart16"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>                    

                    <!-- JKTAM -->
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2><b>JKTAM</b></h2>
                                <div>
                                    <canvas id="radarChart13"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2><b>LON&AMS</b></h2>
                                <div>
                                    <canvas id="radarChart18"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                                <h2><b>JED&MED</b></h2>
                                <div>
                                    <canvas id="radarChart19"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>                                                   
                </div>

                <div class="row">
                <!-- KNOB CHART _-->
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div>
                                    <h3 class="font-bold no-margins">
                                        Average Tiap Direktorat
                                    </h3>
                            
                                    <small>Garuda Indonesia</small>
                                </div>

                                <div class="m-t-sm">
                                    <div class="row">                                
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJKTDC[0]->Evidence,2,".","."); ?>
                                                data-min="<?php echo $total_label[0]->Jumlah;?>" 
                                                data-max="100"
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4"
                                                data-readonly="true">                  
                                            <div class="knob-label">JKTDC</div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJKTDE[0]->Evidence,2,".","."); ?>                   
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4"
                                                data-readonly="true">                  
                                            <div class="knob-label">JKTDE</div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJKTDF[0]->Evidence,2,".","."); ?>                  
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4"
                                                data-readonly="true">                  
                                            <div class="knob-label">JKTDF</div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJKTDG[0]->Evidence,2,".","."); ?>                  
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4"
                                                data-readonly="true">                  
                                            <div class="knob-label">JKTDG</div>
                                        </div>                                
                                    </div>

                                    <div class="row">                                
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJKTDI[0]->Evidence,2,".","."); ?>                  
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4" 
                                                data-readonly="true">                  
                                            <div class="knob-label">JKTDI</div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJKTDN[0]->Evidence,2,".","."); ?>                  
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4" 
                                                data-readonly="true">                  
                                            <div class="knob-label">JKTDN</div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJKTDO[0]->Evidence,2,".","."); ?>                  
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4" 
                                                data-readonly="true">                  
                                            <div class="knob-label">JKTDO</div>
                                        </div>                               
                                    </div>

                                    <div class="row">                                
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJKTDR[0]->Evidence,2,".","."); ?>                  
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4" 
                                                data-readonly="true">                  
                                            <div class="knob-label">JKTDR</div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJKTDZ[0]->Evidence,2,".","."); ?>                  
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4" 
                                                data-readonly="true">                  
                                            <div class="knob-label">JKTDZ</div>
                                        </div>                             
                                    </div>
                                </div>
                            
                                <div class="m-t-md">                            
                                    <small>
                                        <strong>Keterangan:</strong> Setiap chart akan menampilkan average dari masing-masing level tiap unit yang ada
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div>
                                    <h3 class="font-bold no-margins">
                                        Average Tiap BO
                                    </h3>
                                
                                    <small>Garuda Indonesia</small>
                                </div>

                                <div class="m-t-sm">
                                    <div class="row">
                                        <!-- SINAM -->
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgSINAM[0]->Evidence,2,".","."); ?>
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4"
                                                data-readonly="true">                  
                                            <div class="knob-label">SINAM</div>
                                        </div>

                                        <!-- SYDAM -->
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgSYDAM[0]->Evidence,2,".","."); ?>
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4" 
                                                data-readonly="true">                  
                                            <div class="knob-label">SYDAM</div>
                                        </div>

                                        <!-- TYOAM -->
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgTYOAM[0]->Evidence,2,".","."); ?>
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4" 
                                                data-readonly="true">                  
                                            <div class="knob-label">TYOAM</div>
                                        </div>

                                        <!-- SHAAM -->
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgSHAAM[0]->Evidence,2,".","."); ?>
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4"
                                                data-readonly="true">                  
                                            <div class="knob-label">SHAAM</div>
                                        </div>                                                                                     
                                    </div>

                                    <div class="row">
                                        <!-- MESAM -->
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgMESAM[0]->Evidence,2,".","."); ?>
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4"
                                                data-readonly="true">                  
                                            <div class="knob-label">MESAM</div>
                                        </div>

                                        <!-- SUBAM -->
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgSUBAM[0]->Evidence,2,".","."); ?>
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4" 
                                                data-readonly="true">                  
                                            <div class="knob-label">SUBAM</div>
                                        </div>
                                        
                                        <!-- UPGAM -->
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgUPGAM[0]->Evidence,2,".","."); ?>
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4" 
                                                data-readonly="true">                  
                                            <div class="knob-label">UPGAM</div>
                                        </div>

                                        <!-- JKTAM -->
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJKTAM[0]->Evidence,2,".","."); ?>              
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4"
                                                data-readonly="true">                  
                                            <div class="knob-label">JKTAM</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- LON&AMS -->
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgLON_AMS[0]->Evidence,2,".","."); ?>
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4"
                                                data-readonly="true">                  
                                            <div class="knob-label">LON&AMS</div>
                                        </div>

                                        <!-- JED&MED -->
                                        <div class="col-xs-6 col-md-6 text-center">
                                            <input type="text" class="knob"                                             
                                                value=<?php echo number_format($avgJED_MED[0]->Evidence,2,".","."); ?>
                                                data-min="0" 
                                                data-max=<?php echo $total_label[0]->Jumlah;?> 
                                                data-width="90" 
                                                data-height="100" 
                                                data-fgColor= "#4286f4" 
                                                data-readonly="true">                  
                                            <div class="knob-label">JED&MED</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="m-t-md">                            
                                    <small>
                                        <strong>Keterangan:</strong> Setiap chart akan menampilkan average dari masing-masing level tiap BO yang ada
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer">
                    <strong>Copyright</strong> Garuda Indonesia &copy; 2017
            </div>
        </div>
    </div>




    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>js/inspinia.js"></script>
    <script src="<?php echo base_url()?>js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
    <script>
        $('body.canvas-menu .sidebar-collapse').slimScroll({
                        height: '100%',
                        railOpacity: 0.9
                    });
    </script>
    <script src="<?php echo base_url();?>js/plugins/dataTables/datatables.min.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url();?>js/plugins/chartJs/Chart.min.js"></script>

    <!-- Knob -->
    <script src="<?php echo base_url()?>js/plugins/knob/jquery.knob.js"></script>

    <script type="text/javascript">
        //KNOB CHART//
        $(".knob").knob(
        {
            draw: function () 
                {
                    // "tron" case
                    if (this.$.data('skin') == 'tron') 
                        {
                            var a = this.angle(this.cv)  // Angle
                            , sa = this.startAngle          // Previous start angle
                            , sat = this.startAngle         // Start angle
                            , ea                            // Previous end angle
                            , eat = sat + a                 // End angle
                            , r = true;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor
                            && (sat = eat - 0.3)
                            && (eat = eat + 0.3);

                            if (this.o.displayPrevious) 
                                {
                                    ea = this.startAngle + this.angle(this.value);
                                    this.o.cursor
                                    && (sa = ea - 0.3)
                                    && (ea = ea + 0.3);
                                    this.g.beginPath();
                                    this.g.strokeStyle = this.previousColor;
                                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                    this.g.stroke();
                                }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                }
        });
    </script>

    <script type="text/javascript">
    $(function () {
        //JKTDC
        var radarData = {
        labels: ["<?php echo $ambilRadar[0]->Unit; ?>", 
                 "<?php echo $ambilRadar[1]->Unit; ?>", 
                  "<?php echo $ambilRadar[2]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadar[0]->bukti; ?>,
                       <?php echo $ambilRadar[1]->bukti; ?>,
                       <?php echo $ambilRadar[2]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart1").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        // JKTDE
        var radarData = {
        labels: ["<?php echo $ambilRadar[3]->Unit; ?>",
                 "<?php echo $ambilRadar[4]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadar[3]->bukti; ?>, 
                       <?php echo $ambilRadar[4]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart2").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //JKTDF
        var radarData = {
        labels: ["<?php echo $ambilRadar[5]->Unit; ?>", 
                 "<?php echo $ambilRadar[6]->Unit; ?>",
                 "<?php echo $ambilRadar[7]->Unit; ?>",
                 "<?php echo $ambilRadar[8]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadar[5]->bukti; ?>, 
                       <?php echo $ambilRadar[6]->bukti; ?>, 
                       <?php echo $ambilRadar[7]->bukti; ?>, 
                       <?php echo $ambilRadar[8]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart3").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //JKTDG
        var radarData = {
        labels: ["<?php echo $ambilRadar[9]->Unit; ?>", 
                 "<?php echo $ambilRadar[10]->Unit; ?>", 
                 "<?php echo $ambilRadar[11]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadar[9]->bukti; ?>, 
                       <?php echo $ambilRadar[10]->bukti; ?>, 
                       <?php echo $ambilRadar[11]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart4").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //JKTDI
        var radarData = {
        labels: ["<?php echo $ambilRadar[12]->Unit; ?>", 
                 "<?php echo $ambilRadar[13]->Unit; ?>", 
                 "<?php echo $ambilRadar[14]->Unit; ?>",
                 "<?php echo $ambilRadar[15]->Unit; ?>",
                 "<?php echo $ambilRadar[16]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadar[12]->bukti; ?>, 
                       <?php echo $ambilRadar[13]->bukti; ?>, 
                       <?php echo $ambilRadar[14]->bukti; ?>, 
                       <?php echo $ambilRadar[15]->bukti; ?>, 
                       <?php echo $ambilRadar[16]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart5").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //JKTDN
        var radarData = {
        labels: ["<?php echo $ambilRadar[17]->Unit; ?>", "<?php echo $ambilRadar[18]->Unit; ?>",
                 "<?php echo $ambilRadar[19]->Unit; ?>", "<?php echo $ambilRadar[20]->Unit; ?>",
                 "<?php echo $ambilRadar[21]->Unit; ?>", "<?php echo $ambilRadar[21]->Unit; ?>",
                 "<?php echo $ambilRadar[23]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadar[17]->bukti ?>, <?php echo $ambilRadar[18]->bukti ?>,
                       <?php echo $ambilRadar[19]->bukti; ?>, <?php echo $ambilRadar[20]->bukti; ?>,
                       <?php echo $ambilRadar[21]->bukti; ?>, <?php echo $ambilRadar[22]->bukti; ?>,
                       <?php echo $ambilRadar[23]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart6").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
</script>

<script type="text/javascript">
    $(function () {
        //JKTDO
        var radarData = {
        labels: ["<?php echo $ambilRadar[24]->Unit; ?>", 
                 "<?php echo $ambilRadar[25]->Unit; ?>", 
                 "<?php echo $ambilRadar[26]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadar[24]->bukti; ?>,
                       <?php echo $ambilRadar[25]->bukti; ?>,
                       <?php echo $ambilRadar[26]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart7").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //JKTDR
        var radarData = {
        labels: ["<?php echo $ambilRadar[27]->Unit; ?>", 
                 "<?php echo $ambilRadar[28]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadar[27]->bukti; ?>,
                       <?php echo $ambilRadar[28]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart8").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        var radarData = {
        labels: ["<?php echo $ambilRadar[29]->Unit; ?>", 
                 "<?php echo $ambilRadar[30]->Unit; ?>", 
                 "<?php echo $ambilRadar[31]->Unit; ?>",
                 "<?php echo $ambilRadar[32]->Unit; ?>",
                 "<?php echo $ambilRadar[33]->Unit; ?>",
                 "<?php echo $ambilRadar[34]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadar[29]->bukti; ?>,
                       <?php echo $ambilRadar[30]->bukti; ?>,
                       <?php echo $ambilRadar[31]->bukti; ?>,
                       <?php echo $ambilRadar[32]->bukti; ?>,
                       <?php echo $ambilRadar[33]->bukti; ?>,
                       <?php echo $ambilRadar[34]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart9").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //SHAAM
        var radarData = {
        labels: ["<?php echo $ambilRadarBranch[24]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[25]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[26]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[27]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadarBranch[24]->bukti; ?>, 
                       <?php echo $ambilRadarBranch[25]->bukti; ?>, 
                       <?php echo $ambilRadarBranch[26]->bukti; ?>, 
                       <?php echo $ambilRadarBranch[27]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart10").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //SINAM
        var radarData = {
        labels: ["<?php echo $ambilRadarBranch[28]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[29]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[30]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[31]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[32]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadarBranch[28]->bukti ?>, 
                       <?php echo $ambilRadarBranch[29]->bukti ?>,
                       <?php echo $ambilRadarBranch[30]->bukti ?>,
                       <?php echo $ambilRadarBranch[31]->bukti; ?>,
                       <?php echo $ambilRadarBranch[32]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart11").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //TYOAM
        var radarData = {
        labels: ["<?php echo $ambilRadarBranch[54]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[55]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[56]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[57]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[58]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[59]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadarBranch[54]->bukti ?>, 
                       <?php echo $ambilRadarBranch[55]->bukti ?>,
                       <?php echo $ambilRadarBranch[56]->bukti ?>, 
                       <?php echo $ambilRadarBranch[57]->bukti ?>,
                       <?php echo $ambilRadarBranch[58]->bukti ?>,
                       <?php echo $ambilRadarBranch[59]->bukti ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart12").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        var radarData = {
        labels: ["<?php echo $unitJKTAM[0]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $unitJKTAM[0]->bukti ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart13").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //MESAM
        var radarData = {
        labels: ["<?php echo $ambilRadarBranch[6]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[7]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[8]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[9]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[10]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[11]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[12]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[13]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[14]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[15]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[16]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[17]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[18]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[19]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[20]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[21]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[22]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadarBranch[6]->bukti ?>, 
                       <?php echo $ambilRadarBranch[7]->bukti ?>,
                       <?php echo $ambilRadarBranch[8]->bukti ?>, 
                       <?php echo $ambilRadarBranch[9]->bukti ?>,
                       <?php echo $ambilRadarBranch[10]->bukti ?>, 
                       <?php echo $ambilRadarBranch[11]->bukti ?>,
                       <?php echo $ambilRadarBranch[12]->bukti ?>, 
                       <?php echo $ambilRadarBranch[13]->bukti ?>,
                       <?php echo $ambilRadarBranch[14]->bukti ?>, 
                       <?php echo $ambilRadarBranch[15]->bukti ?>,
                       <?php echo $ambilRadarBranch[16]->bukti ?>, 
                       <?php echo $ambilRadarBranch[17]->bukti ?>,
                       <?php echo $ambilRadarBranch[18]->bukti ?>, 
                       <?php echo $ambilRadarBranch[19]->bukti ?>,
                       <?php echo $ambilRadarBranch[20]->bukti ?>, 
                       <?php echo $ambilRadarBranch[21]->bukti ?>, 
                       <?php echo $ambilRadarBranch[22]->bukti ?>],
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 7,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart14").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //SUBAM
        var radarData = {
        labels: ["<?php echo $ambilRadarBranch[33]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[34]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[35]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[36]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[37]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[38]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[39]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[40]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[41]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[42]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[43]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[44]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[45]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[46]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[47]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[48]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[49]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadarBranch[33]->bukti ?>,
                       <?php echo $ambilRadarBranch[34]->bukti ?>, 
                       <?php echo $ambilRadarBranch[35]->bukti ?>,
                       <?php echo $ambilRadarBranch[36]->bukti ?>, 
                       <?php echo $ambilRadarBranch[37]->bukti ?>,
                       <?php echo $ambilRadarBranch[38]->bukti ?>, 
                       <?php echo $ambilRadarBranch[39]->bukti ?>,
                       <?php echo $ambilRadarBranch[40]->bukti ?>,
                       <?php echo $ambilRadarBranch[41]->bukti ?>, 
                       <?php echo $ambilRadarBranch[42]->bukti ?>,
                       <?php echo $ambilRadarBranch[43]->bukti ?>, 
                       <?php echo $ambilRadarBranch[44]->bukti ?>,
                       <?php echo $ambilRadarBranch[45]->bukti ?>, 
                       <?php echo $ambilRadarBranch[46]->bukti ?>,
                       <?php echo $ambilRadarBranch[47]->bukti ?>,
                       <?php echo $ambilRadarBranch[48]->bukti ?>, 
                       <?php echo $ambilRadarBranch[49]->bukti ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart15").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //UPGAM
        var radarData = {
        labels: ["<?php echo $ambilRadarBranch[60]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[61]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[63]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[64]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[65]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[66]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[67]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[68]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[69]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[70]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[71]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[72]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[73]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[74]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[75]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[76]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[77]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[78]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[79]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[80]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[81]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[82]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[83]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[84]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[85]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[86]->Unit; ?>",
                 "<?php echo $ambilRadarBranch[87]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadarBranch[60]->bukti ?>, 
                       <?php echo $ambilRadarBranch[61]->bukti ?>,
                       <?php echo $ambilRadarBranch[62]->bukti ?>, 
                       <?php echo $ambilRadarBranch[63]->bukti ?>,
                       <?php echo $ambilRadarBranch[64]->bukti ?>, 
                       <?php echo $ambilRadarBranch[65]->bukti ?>,
                       <?php echo $ambilRadarBranch[66]->bukti ?>, 
                       <?php echo $ambilRadarBranch[67]->bukti ?>,
                       <?php echo $ambilRadarBranch[68]->bukti ?>, 
                       <?php echo $ambilRadarBranch[69]->bukti ?>, 
                       <?php echo $ambilRadarBranch[60]->bukti ?>, 
                       <?php echo $ambilRadarBranch[71]->bukti ?>,
                       <?php echo $ambilRadarBranch[72]->bukti ?>, 
                       <?php echo $ambilRadarBranch[73]->bukti ?>,
                       <?php echo $ambilRadarBranch[74]->bukti ?>, 
                       <?php echo $ambilRadarBranch[75]->bukti ?>,
                       <?php echo $ambilRadarBranch[76]->bukti ?>, 
                       <?php echo $ambilRadarBranch[77]->bukti ?>,
                       <?php echo $ambilRadarBranch[78]->bukti ?>, 
                       <?php echo $ambilRadarBranch[79]->bukti ?>, 
                       <?php echo $ambilRadarBranch[80]->bukti ?>, 
                       <?php echo $ambilRadarBranch[81]->bukti ?>,
                       <?php echo $ambilRadarBranch[82]->bukti ?>, 
                       <?php echo $ambilRadarBranch[83]->bukti ?>,
                       <?php echo $ambilRadarBranch[84]->bukti ?>, 
                       <?php echo $ambilRadarBranch[85]->bukti ?>,
                       <?php echo $ambilRadarBranch[86]->bukti ?>, 
                       <?php echo $ambilRadarBranch[87]->bukti ?>] 
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart16").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //SYDAM
        var radarData = {
        labels: ["<?php echo $ambilRadarBranch[50]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[51]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[52]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[53]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadarBranch[50]->bukti; ?>,
                       <?php echo $ambilRadarBranch[51]->bukti; ?>,
                       <?php echo $ambilRadarBranch[52]->bukti; ?>,
                       <?php echo $ambilRadarBranch[53]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart17").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //LON_AMS
        var radarData = {
        labels: ["<?php echo $ambilRadarBranch[4]->Unit; ?>", 
                 "<?php echo $ambilRadarBranch[0]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadarBranch[4]->bukti; ?>,
                       <?php echo $ambilRadarBranch[0]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart18").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
    $(function () {
        //JEDDM
        var radarData = {
        labels: ["<?php echo $ambilRadarBranch[1]->Unit; ?>"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(26,179,148,0.2)",
                strokeColor: "rgba(26,179,148,1)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $ambilRadarBranch[1]->bukti; ?>]
            }
        ]
    };

    var radarOptions = {
        scaleShowLine: true,
        angleShowLineOut: true,
        scaleShowLabels: false,
        scaleBeginAtZero: true,
        angleLineColor: "rgba(0,0,0,.1)",
        angleLineWidth: 1,
        pointLabelFontFamily: "'Arial'",
        pointLabelFontStyle: "normal",
        pointLabelFontSize: 10,
        pointLabelFontColor: "#666",
        pointDot: true,
        pointDotRadius: 3,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    }

    var ctx = document.getElementById("radarChart19").getContext("2d");
    var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

});
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div style="margin-top:5px;"><input type="text" class="form-control" name="mytext[]"/><a href="#" class="remove_field"> Remove</a></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        }); 
    </script>

    <script type="text/javascript">
    <?php 
    for ($i=1;$i<=count($list_pertanyaan);$i++) {
    ?>
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap<?php echo $i?>"); //Fields wrapper
            var add_button      = $(".add_field_button<?php echo $i?>"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div style="margin-top:5px;"><input type="text" class="form-control" name="mytext[]"/><a href="#" class="remove_field<?php echo $i?>"> Remove</a></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field<?php echo $i?>", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        }); 
    <?php } ?>
    </script>

</body>

</html>
