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
    <link href="<?php echo base_url()?>css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

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
                    <li class="active">
                        <a href="<?php echo base_url()?>admin/demography"><i class="fa fa-pie-chart"></i> <span class="nav-label">Demography</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/innovation_list"><i class="fa fa-flask"></i> <span class="nav-label">Innovation List</span></a>
                    </li>
                    <li>
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
                <div class="col-lg-10">
                    <h2>Demography</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">
                            <strong>Demography</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Responden PT Gapura Angkasa </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>                                
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="container" style="max-width: 660px;
                                margin: auto;
                                height: 400px;
                                margin: 0 auto;">                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Gender </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>                            
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="position: relative">
                        <div id="gender"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Lokasi </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div id="lokasi"></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Usia</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="usia"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Generasi </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="generasi"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Profesi </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="profesi"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Posisi </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="posisi"></div>
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

    <!-- svg Donut-->    
    <script src="<?php echo base_url()?>js/jquery.svgDoughnutChart.js"></script>

    <!-- highchart -->
    <script src="<?php echo base_url()?>js/highcharts.js"></script>
    <script src="<?php echo base_url()?>js/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>

    <!-- Morris -->
    <script src="<?php echo base_url()?>js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/morris/morris.js"></script>
    <script src="<?php echo base_url()?>js/muter.js"></script>

    <!-- Hight Chart data -->
    <script type="text/javascript">
        Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: false
    },
    subtitle: {
        text: false
    },    
            credits: {
              enabled: false
            },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,

                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Microsoft Internet Explorer',
            y: 56.33,
            drilldown: 'Microsoft Internet Explorer'
        }, {
            name: 'Chrome',
            y: 24.03,
            drilldown: 'Chrome'
        }, {
            name: 'Firefox',
            y: 10.38,
            drilldown: 'Firefox'
        }, {
            name: 'Safari',
            y: 4.77,
            drilldown: 'Safari'
        }, {
            name: 'Opera',
            y: 0.91,
            drilldown: 'Opera'
        }, {
            name: 'Proprietary or Undetectable',
            y: 0.2,
            drilldown: null
        }]
    }],
    drilldown: {
        series: [{
            name: 'Microsoft Internet Explorer',
            id: 'Microsoft Internet Explorer',
            data: [
                ['v11.0', 24.13],
                ['v8.0', 17.2],
                ['v9.0', 8.11],
                ['v10.0', 5.33],
                ['v6.0', 1.06],
                ['v7.0', 0.5]
            ]
        }, {
            name: 'Chrome',
            id: 'Chrome',
            data: [
                ['v40.0', 5],
                ['v41.0', 4.32],
                ['v42.0', 3.68],
                ['v39.0', 2.96],
                ['v36.0', 2.53],
                ['v43.0', 1.45],
                ['v31.0', 1.24],
                ['v35.0', 0.85],
                ['v38.0', 0.6],
                ['v32.0', 0.55],
                ['v37.0', 0.38],
                ['v33.0', 0.19],
                ['v34.0', 0.14],
                ['v30.0', 0.14]
            ]
        }, {
            name: 'Firefox',
            id: 'Firefox',
            data: [
                ['v35', 2.76],
                ['v36', 2.32],
                ['v37', 2.31],
                ['v34', 1.27],
                ['v38', 1.02],
                ['v31', 0.33],
                ['v33', 0.22],
                ['v32', 0.15]
            ]
        }, {
            name: 'Safari',
            id: 'Safari',
            data: [
                ['v8.0', 2.56],
                ['v7.1', 0.77],
                ['v5.1', 0.42],
                ['v5.0', 0.3],
                ['v6.1', 0.29],
                ['v7.0', 0.26],
                ['v6.2', 0.17]
            ]
        }, {
            name: 'Opera',
            id: 'Opera',
            data: [
                ['v12.x', 0.34],
                ['v28', 0.24],
                ['v27', 0.17],
                ['v29', 0.16]
            ]
        }]
    }
});
    </script>
        <!-- /Hight Chart data-->

    <script>

        <?php 
                  $prosenL = $gender[0]->Jumlah/($gender[0]->Jumlah+$gender[1]->Jumlah)*100; 
                  $prosenP = $gender[1]->Jumlah/($gender[0]->Jumlah+$gender[1]->Jumlah)*100;?>
        $('#gender').doughnutChart({
            positiveColor: "#1ab394",
            negativeColor: "#87d6c6",
            backgroundColor: "white",
            percentage: <?php if ($prosenL>$prosenP) {echo number_format($prosenL,0,".",".");} else echo number_format($prosenP,0,".","."); ?>,
            size: 250,
            doughnutSize: 0.32,
            innerText: "<?php if ($prosenL>$prosenP) {echo number_format($prosenL,0,".",".")."%";} else echo number_format($prosenP,0,".",".")."%"; ?>",
            innerTextOffset: 20,
            Title: "Jenis Kelamin Responden",
            positiveText: "<?php echo $gender[0]->Jumlah." Orang laki-laki" ?>",
            negativeText: "<?php echo $gender[1]->Jumlah." Orang Perempuan" ?>"
        });
        <?php 
                  $prosenB = $lokasi[0]->Jumlah/($lokasi[0]->Jumlah+$lokasi[1]->Jumlah)*100; 
                  $prosenH = $lokasi[1]->Jumlah/($lokasi[0]->Jumlah+$lokasi[1]->Jumlah)*100;?>
        $('#lokasi').doughnutChart({
            positiveColor: "#5adee2",
            negativeColor: "#ff5b5b",
            backgroundColor: "white",
            percentage: <?php if ($prosenH>$prosenB) {echo number_format($prosenH,0,".",".");} else echo number_format($prosenB,0,".","."); ?>,
            size: 250,
            doughnutSize: 0.32,
            innerText: "<?php if ($prosenH>$prosenB) {echo number_format($prosenH,0,".",".")."%";} else echo number_format($prosenB,0,".",".")."%"; ?>",
            innerTextOffset: 20,
            Title: "Lokasi Responden",
            positiveText: "<?php echo $lokasi[1]->Jumlah." Orang Head Office" ?>",
            negativeText: "<?php echo $lokasi[0]->Jumlah." Orang Back Office" ?>"
        });
    </script>


    <script type="text/javascript">
        Morris.Donut({
          element: 'profesi',
          resize: true, 
          colors: ['#87d6c6', '#54cdb4','#1ab394'],
          data: [
            {label: "Darat", value: <?php echo $profesi[0]->Jumlah; ?>},
            {label: "Flight Attendant", value: <?php echo $profesi[1]->Jumlah; ?>},
            {label: "Pilot", value: <?php echo $profesi[2]->Jumlah; ?>}
          ],
          hideHover: 'auto'
        });
    </script>
    <script type="text/javascript">
        Morris.Donut({
          element: 'posisi',
          resize: true, 
          colors: ['#87d6c6', '#54cdb4','#1ab394'],
          data: [
            {label: "Non Struktural", value: <?php echo $posisi[0]->Jumlah; ?>},
            {label: "Pimpinan Unit Kerja", value: <?php echo $posisi[1]->Jumlah; ?>},
            {label: "Struktural", value: <?php echo $posisi[2]->Jumlah; ?>}
          ],
          hideHover: 'auto'
        });
    </script>
    <script type="text/javascript">
        Morris.Bar({
        element: 'usia',
        horizontal: true,
        data: [{ y: '18-30', a: <?php echo $usia[0]->Jumlah; ?>},
            { y: '31-40', a: <?php echo $usia[1]->Jumlah; ?>},
            { y: '41-50', a: <?php echo $usia[2]->Jumlah; ?>},
            { y: '51-58', a: <?php echo $usia[3]->Jumlah; ?>},          
            { y: '>58', a: <?php echo $usia[4]->Jumlah; ?>} ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Series A',],
        hideHover: 'auto',
        resize: true,
        barColors: ['#1ab394'],

        });
    </script>
    <script type="text/javascript">
        Morris.Bar({
        element: 'generasi',
        data: [
        {y: 'Baby Boomers', a: <?php echo $generasi[0]->Jumlah; ?>},
        {y: 'X', a: <?php echo $generasi[1]->Jumlah; ?>},
        {y: 'Y', a: <?php echo $generasi[2]->Jumlah; ?>},
        {y: 'Z', a: <?php echo $generasi[3]->Jumlah; ?>}
       
      ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Series A',],
        hideHover: 'auto',
        resize: true,
        barColors: ['#5adee2'],

        });
    </script>

    
</body>
</html>
    