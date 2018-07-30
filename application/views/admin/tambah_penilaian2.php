<?php
  $id  = $inovasi->id;
if($this->input->post('is_submitted')){
            $nip1        = set_value('nip1');
            $nip2        = set_value('nip2');
            $nip3        = set_value('nip3');
            $nip4        = set_value('nip4');
            $nama1       = set_value('nama1');
            $kategori      = set_value('kategori');
            $judul       = set_value('judul');
            $latar_belakang  = set_value('latar_belakang');
            $deskripsi     = set_value('deskripsi');
            $cost_saving   = set_value('cost_saving');
            $revenue     = set_value('revenue');
            $waktu       = set_value('waktu');
}
else {
            $nip1        = $inovasi->nip1;
            $nip2        = $inovasi->nip2;
            $nip3        = $inovasi->nip3;
            $nip4        = $inovasi->nip4;
            $nama1       = $inovasi->nama1;
            $kategori      = $inovasi->kategori;
            $judul       = $inovasi->judul;
            $latar_belakang  = $inovasi->latar_belakang;
            $deskripsi     = $inovasi->deskripsi;
            $cost_saving   = $inovasi->cost_saving;
            $revenue     = $inovasi->revenue;
            $waktu       = $inovasi->waktu;
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
                        <a href="<?php echo base_url()?>admin/index"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/demography"><i class="fa fa-pie-chart"></i> <span class="nav-label">Demography</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/innovation_list"><i class="fa fa-flask"></i> <span class="nav-label">Innovation List</span></a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>admin/assessment"><i class="fa fa-edit"></i> <span class="nav-label">Assessment</span></a>
                    </li>
                    <li>
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
                    <h2>Assessment</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url()?>admin">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>admin/assessment">Assessment</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Penilaian</strong>
                        </li>
                    </ol>
                </div>
            </div>      
        
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Data Pengusul <small>Berisi data diri pengusul baik individu maupun tim.</small></h5>
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
                        
                            <strong><h3>Individu</h3></strong>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <h5>NIP Ketua</h5>
                                  <input type="text" class="form-control" disabled="true" name="nip1" autocomplete="off" placeholder="NIP" value="<?= $nip1 ?>">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <h5>Nama Pegawai</h5>
                                  <input type="text" class="form-control"disabled="true" name="nama1" autocomplete="off" placeholder="Nama" value="<?= $nama1 ?>">
                                </div>
                              </div>                   
                            </div>
                            <div class="hr-line-dashed"></div>
                            <strong><h3>Team*</h3></strong>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <h5>NIP Anggota 1</h5>
                                  <input type="text" class="form-control " disabled="true" name="nip2" placeholder="NIP" autocomplete="off" value="<?= $nip2 ?>">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <h5>NIP Anggota 2</h5>
                                  <input type="text" class="form-control " disabled="true"  name="nip3" placeholder="NIP" autocomplete="off" value="<?= $nip3 ?>">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <h5>NIP Anggota 3</h5>
                                  <input type="text" class="form-control "  disabled="true" name="nip4" placeholder="NIP" autocomplete="off" value="<?= $nip4 ?>">
                                </div>
                              </div>
                            </div>
                            <h5>* Hanya diisi jika pendaftaran dilakukan secara team</h5>
                          </div>
                        </div>
                      </div>
                    </div>        
              <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Data Inovasi <small>Berisi mengenai penjabaran secara rinci ide yang diajukan.</small></h5>
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
                            <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                         <label>Kategori</label>
                                         <select class="form-control" disabled="true" name="kategori">
                                            <option value="<?= $kategori ?>"><?= $kategori ?></option>
                                            <option value="Revenue">Revenue</option>
                                            <option value="Cost">Cost</option>
                                            <option value="Strategy">Strategy</option>
                                            <option value="Service">Service</option>
                                            <option value="Teknik">Teknik</option>
                                            <option value="Operation">Operation</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Synergy">Synergy</option>
                                            <option value="Human Resource">Human Resource</option>
                                          </select>
                                        </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Judul Inovasi</label>
                                      <input type="text" class="form-control " required disabled="true" name="judul" placeholder="Judul" value="<?= $judul ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Latar Belakang</label>
                                      <textarea style="height: 100px;"type="text" class="form-control " disabled="true" required name="latar_belakang" placeholder="Berisi latar belakang bagaimana kondisi saat ini dan mengapa inovasi tersebut perlu dilakukan" value="<?= $latar_belakang ?>"><?= $latar_belakang ?></textarea>
                                    </div>
                                  </div> 
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Deskripsi Inovasi</label>
                                      <textarea style="height: 200px;"type="text" class="form-control " disabled="true" required name="deskripsi" placeholder="Berisi deskripsi dari ide inovasi dan langkah-langkah pelaksanaannya" value="<?= $deskripsi ?>"><?= $deskripsi ?></textarea>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <label>File Attachment</label>
                                      <div>
                                        <?php if($inovasi->userfile == NULL){ ?>
                                          <h5>Tidak ada file</h5>
                                        <?php } else {?>
                                        <a href="<?php echo base_url();?>uploads/<?php echo $inovasi->userfile ?>"><?php echo $inovasi->userfile ?></a>
                                        <?php }?>
                                      </div>
                                  </div>                           
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Lama Pelaksanaan (bulan)</label>
                                <input disabled="true" type="number" class="form-control" required name="waktu" placeholder="ex: 3" value="<?= $waktu; ?>"></div>
                              </div>
                            
                            <div class="col-md-12">
                                <div class="hr-line-dashed"></div>
                                <h3>Potensi<small> Boleh hanya diisi salah satu atau keduanya.</small></h3>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Cost Saving*</label>
                                <input disabled="true" type="text" min="0" class="form-control "  name="cost_saving" placeholder="ex: 2000000" value="<?php echo 'Rp ' . number_format($cost_saving,0,".","."); ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Revenue*</label>
                                <input disabled="true" type="text" min="0" class="form-control "  name="revenue" placeholder="ex: 2000000" value="<?php echo 'Rp ' . number_format($revenue,0,".","."); ?>">
                              </div>
                            </div>
               
                            </div>
                          
                          
                        </div>
                      </div>
                   </div>       
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Data Penilaian <small>Berisi dimensi nilai dari inovasi terkait.</small></h5>
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
                            <div class="row">
                            <?php echo form_open_multipart('admin/nilai/' .$id)?>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>ID Juri</label>
                                      <input type="text" class="form-control " disabled="true" name="id_juri" placeholder="ID Juri" value="<?php echo $this->session->userdata('id')?>">
                                    </div>
                                  </div>                  
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>Dampak terhadap pendapatan dan biaya</label>
                                      <input type="number" min="0" required class="form-control " name="kriteria1" autocomplete="off"  placeholder="0-100" value="<?php echo set_value('kriteria1'); ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>Dampak terhadap waktu penyelesaian pekerjaan</label>
                                      <input type="number" min="0" required class="form-control " name="kriteria2" autocomplete="off"  placeholder="0-100" value="<?php echo set_value('kriteria2'); ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>Dampak terhadap peningkatan kualitas pekerjaan</label>
                                      <input type="number" min="0" required class="form-control " name="kriteria3" autocomplete="off"  placeholder="0-100" value="<?php echo set_value('kriteria3'); ?>">
                                    </div>
                                  </div>
                               </div>
                               <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>Dampak terhadap penciptaan produk inovasi</label>
                                      <input type="number" min="0" required class="form-control " name="kriteria4"  autocomplete="off"  placeholder="0-100" value="<?php echo set_value('kriteria4'); ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Implementatif</label>
                                      <input type="number" min="0" required class="form-control " name="kriteria5" autocomplete="off"  placeholder="0-100" value="<?php echo set_value('kriteria5'); ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>Originalitas</label>
                                      <input type="number" min="0" required class="form-control " name="kriteria6" autocomplete="off"  placeholder="0-100" value="<?php echo set_value('kriteria6'); ?>">
                                    </div>
                                  </div>
                               
                              
                               <input type="hidden" class="form-control " name="id" value="<?php echo $inovasi->id?>">
                               
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
