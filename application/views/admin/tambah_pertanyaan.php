<?php
if($this->input->post('is_submitted')){
            $target        = set_value('target');
}
else {
            $target        = $unit->pertanyaan;
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                    <li class="active">
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
                      <a href="<?php echo base_url()?>admin/logout">
                          <i class="fa fa-sign-out"></i> Log out
                      </a>
                  </li>
              </ul>
          </nav>
        </div>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Setup Question</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url()?>admin">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>admin/setup_question">Setup Question</a>
                        </li>
                        <li class="active">
                            <strong>Add Question</strong>
                        </li>
                    </ol>
                </div>
            </div>
        
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pertanyaan</h5>
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
                        <?php echo form_open_multipart('admin/tambah')?>
                            <strong><h3>Individu</h3></strong>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <h5>Direktorat</h5>
                                  <input type="text" class="form-control" disabled="true" name="nip1" autocomplete="off" placeholder="<?php echo $unit->direktorat;?>" value="<?php $unit->direktorat;?>">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <h5>Unit/Area</h5>
                                  <input type="text" class="form-control" disabled="true" name="target" value="<?=$target; ?>">
                                  <input type="hidden" class="form-control" name="target" value="<?=$target; ?>">
                                </div>
                              </div>    
                               <div class="col-md-8">
                                <div class="form-group">
                                  <h5>Nama Unit/Area</h5>
                                  <input type="text" class="form-control" disabled="true" name="nama1" autocomplete="off" placeholder="<?php echo $unit->nama_pertanyaan;?>" value="<?php $unit->nama_pertanyaan;?>">
                                </div>
                              </div>                   
                            </div>
                            <div class="row">
							<div class="col-md-12">
                                    <div class="form-group">
                                      <label>Pertanyaan 1</label>
                                      <input type="text" class="form-control " required name="q1" placeholder="Pertanyaan 1" value="<?php echo set_value('q1'); ?>">
                                    </div>
                            </div>
							<div class="col-md-12">
                                    <div class="form-group">
                                      <label>Pertanyaan 2</label>
                                      <input type="text" class="form-control " required name="q2" placeholder="Pertanyaan 2" value="<?php echo set_value('q2'); ?>">
                                    </div>
                            </div>
							<div class="col-md-12">
                                    <div class="form-group">
                                      <label>Pertanyaan 3</label>
                                      <input type="text" class="form-control " required name="q3" placeholder="Pertanyaan 3" value="<?php echo set_value('q3'); ?>">
                                    </div>
                            </div>
							<div class="col-md-12">
                                    <div class="form-group">
                                      <label>Pertanyaan 4</label>
                                      <input type="text" class="form-control " required name="q4" placeholder="Pertanyaan 4" value="<?php echo set_value('q4'); ?>">
                                    </div>
                            </div>
							<div class="col-md-12">
                                    <div class="form-group">
                                      <label>Pertanyaan 5</label>
                                      <input type="text" class="form-control " required name="q5" placeholder="Pertanyaan 5" value="<?php echo set_value('q5'); ?>">
                                    </div>
                            </div>
							<div class="col-md-12">
                                    <div class="form-group">
                                      <label>Pertanyaan 6</label>
                                      <input type="text" class="form-control " required name="q6" placeholder="Pertanyaan 6" value="<?php echo set_value('q6'); ?>">
                                    </div>
                            </div>
							<div class="col-md-12">
                                    <div class="form-group">
                                      <label>Pertanyaan 7</label>
                                      <input type="text" class="form-control " required name="q7" placeholder="Pertanyaan 7" value="<?php echo set_value('q7'); ?>">
                                    </div>
                            </div>
							<div class="col-md-12">
                                    <div class="form-group">
                                      <label>Pertanyaan 8</label>
                                      <input type="text" class="form-control " required name="q8" placeholder="Pertanyaan 8" value="<?php echo set_value('q8'); ?>">
                                    </div>
                            </div>
							<div class="col-md-12">
                                    <div class="form-group">
                                      <label>Pertanyaan 9</label>
                                      <input type="text" class="form-control " required name="q9" placeholder="Pertanyaan 9" value="<?php echo set_value('q9'); ?>">
                                    </div>
                            </div>
							<div class="col-md-12">
                                    <div class="form-group">
                                      <label>Pertanyaan 10</label>
                                      <input type="text" class="form-control " required name="q10" placeholder="Pertanyaan 10" value="<?php echo set_value('q10'); ?>">
                                    </div>
                            </div>
							 <div class="col-lg-12 text-right">
                                <div class="hr-line-dashed"></div>
                                   <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane "></i>   Submit</button>
                                  <?php echo form_close()?>  
                                </div> 
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


    <script>
        $(document).ready(function(){
            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#17a084'},
                { label: "Data 2", data: d2, color: '#127e68' }
            ];
            $.plot($("#flot-chart1"), data1, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            var data2 = [
                { label: "Data 1", data: d1, color: '#19a0a1'}
            ];
            $.plot($("#flot-chart2"), data2, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            var data3 = [
                { label: "Data 1", data: d1, color: '#fbbe7b'},
                { label: "Data 2", data: d2, color: '#f8ac59' }
            ];
            $.plot($("#flot-chart3"), data3, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $(".todo-list").sortable({
                placeholder: "sort-highlight",
                handle: ".handle",
                forcePlaceholderSize: true,
                zIndex: 999999
            }).disableSelection();

            var mapData = {
                "US": 498,
                "SA": 200,
                "CA": 1300,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
                "RU": 2000
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 1,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },
                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                }
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
