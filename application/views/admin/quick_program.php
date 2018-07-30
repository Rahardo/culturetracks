<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="<?php echo base_url()?>/assets/gi.ico" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Garuda Indonesia</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url()?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url()?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url()?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo base_url()?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="<?php echo base_url()?>/build/css/custom.min.css" rel="stylesheet">

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          

          <div class="navbar nav_title" style="border: 0;">
  <a href="index.php" class="site_title" >Garuda Indonesia</span></a>
</div>
<div class="clearfix"></div>

<br />
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <div class="clearfix"></div>
    <ul class="nav side-menu">

      <li><a ><i class="fa fa-home"></i> Beranda <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="index.php">Progress Submission</a></li>
        </ul>
      </li>
      <li><a ><i class="fa fa-cogs"></i> Culture Programs <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="quick_program.php">List Program</a></li>
          <li><a href="add_program.php">Tambah Program</a></li>
          <li><a>Progress Program<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="sub_menu"><a href="progress_program.php">Progress Unit</a>
              </li>
              <li class="sub_menu"><a href="progress_program_dir.php">Progress Direktorat</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a ><i class="fa fa-home"></i> Voice of Customer <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="dashboard.php">Voice Index</a></li>
          <li><a href="import_new.php">Tambah Data Baru</a></li>
        </ul>
      </li>
      <li><a ><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="users.php">Daftar User</a></li>
          <li><a href="units.php">Akun Unit</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        
        <!-- /menu footer buttons -->
      </div>
    </div>

   <div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo base_url()?>/assets/images/user.png" alt=""><?php echo "$username"; ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            
            <li><a href="<?php echo base_url()?>/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>

        
      </ul>
    </nav>
  </div>
</div>

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Culture Programs</h3>
          </div>

          <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>List Program</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <?php
                if ($data['program']){ ?>
                <form method="post" name="myForm" action="quick_program_setdefault_.php" id="devel-generate-content-form" accept-charset="UTF-8" >
                  <div class="table-responsive">
                    <table  class="table table-hover">
                      <thead>
                        <tr class="headings">
                          <th style="vertical-align: middle; width: 5%; text-align: center;">
                            #
                          </th>
                          <th class="column-title" style="vertical-align: middle; width: 5%; text-align: center;">No </th>
                          <th class="column-title" style="vertical-align: middle; width: 30%; ">Program</th>
                          
                          <th class="column-title" style="vertical-align: middle; width: 40%; text-align: center;">Deskripsi </th>
                          <th class="column-title no-link last" style="vertical-align: middle; width: 20%; text-align: center;"><span class="nobr">Kelola</span>
                          </th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        <?php while ($cc_program=mysqli_fetch_array($program)) {
                         ?>
                         <tr class="even pointer">
                           <td class="a-center form-item form-type-checkbox form-item-node-types-forum" style="vertical-align: middle; width: 5%; text-align: center"><input type="checkbox" id="edit-node-types-forum" class="form-checkbox " name="node_types[]" value="<?php echo"$cc_program[cc_id]"; ?>"></td>
                           <td class=" " style="vertical-align: middle; width: 5%; text-align: center;"><?php echo $a++; ?></td>
                           <td class=" " style="vertical-align: middle; width: 30%;"><?php echo $cc_program['cc_detail'];?>
                            <?php if("$cc_program[status]"=="Default") {
                              ?><i class="fa fa-check-circle" style="color:#26B99A"></i>
                              <?php 
                            } 
                            if("$cc_program[status]"=="Active") {
                              ?><i class="fa fa-check-circle" style="color:grey"></i>
                              <?php 
                            } ?>
                          </td>

                          <td class=" " style="vertical-align: middle; width: 40%;">
                            <?php 
                            $lambe=str_replace(array("\r\n", "\n"), array("<br />", "<br />"), "$cc_program[cc_desc]");

                            $string = strip_tags($lambe);

                            if (strlen($string) > 70) {

                            // truncate string
                              $stringCut = substr($string, 0, 70);

                            // make sure it ends in a word so assassinate doesn't become ass...
                              $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a >Read More</a>'; 
                            }
                            echo $string;
                            ?>
                          </td>
                          <td class=" last" style="vertical-align: middle; width: 20%; text-align: center;">
                            <a href="edit_program.php?id=<?php echo $cc_program['cc_id'];?>"><button type="button" class="btn btn-primary btn-xs" style="width: 30% ; font-size: 100%" >Edit</button></a>
                            <a href="quick_program_delete_.php?id=<?php echo $cc_program['cc_id'];?>"><button type="button" class="btn btn-danger btn-xs" style="width: 30% ; font-size: 100%" >Hapus</button></a>
                          </td>
                        </tr>
                        <?php 
                      } ?>
                    </tbody>
                  </table>
                </div>

                <div class="form-item form-type-textfield form-item-count-checked-checkboxes" style="vertical-align:middle">
                  <input type="text" name="program-" class="form-control" style="display:none" value="<?php echo $cc_program['cc_detail']; ?>">
                  <div class="popup" onclick="return validateForm()">

                    <input type="submit" name="submit" class="btn btn-link " style="vertical-align:middle; border: 1px solid white" value="Jadikan Default"/>
                    <span class="popuptext" id="myPopup">Silahan Pilih minimal 1</span>
                  </div>
                  <input type="submit" name="submit" class="btn btn-link " style="vertical-align:middle; border: 1px solid white" value="Reset"/>
                  <input readonly type="text" id="edit-count-checked-checkboxes" name="count-checked-checkboxes" value="0" size="60" maxlength="50" class="form-text required " style="width:30px; vertical-align:middle; text-align:center; border: 1px solid white"/>   soal dipilih
                </div>
              </form>
              <?php

            }else { ?>
            <p align="center"> Tidak ada Program Aktif</p>
            <?php }?>

            <form  method="post" action="add_program.php"  >
             <input type="text" name="survey" class="form-control" style="display:none" value="<?php echo $survey ?>">
             <input type="text" name="grup" class="form-control" style="display:none" value="<?php echo $grup ?>">
             <div class="clearfix"></div>
             <div class="form-group" >

               <button class="btn btn-success" type="submit" style="width:20%; text-align:center" >Tambah Program</button>

             </div>

           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- /page content -->

<!-- footer content -->
<?php
include('footer.php');
?>
<!-- /footer content -->
</div>
</div>

<?php
include('js.php');
?>
<!-- autosum -->
<script type="text/javascript">
$(document).ready(function(){

  var $checkboxes = $('#devel-generate-content-form td input[type="checkbox"]');

  $checkboxes.change(function(){
    var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
          // $('#count-checked-checkboxes').text(countCheckedCheckboxes);

          $('#edit-count-checked-checkboxes').val(countCheckedCheckboxes);
        });

});
</script>

<script>
function validateForm() {
  var x = document.forms["myForm"]["edit-count-checked-checkboxes"].value;
  if (x == 0) { 
   var popup = document.getElementById('myPopup');
   popup.classList.toggle('show');
   return false;
 }
 setTimeout(function(){ PNotify.close() }, 3000);
}
</script>
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.show {
  visibility: visible !important;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
</body>
</html>
