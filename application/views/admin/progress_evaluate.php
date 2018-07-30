<?php
session_start();
include('connection/conn.php');

?>
<!DOCTYPE html>
<html lang="en">

<?php
include('css.php');
?>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">


          <!-- sidebar menu -->
          <?php
          include('sidebar.php');
          ?>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        
        <!-- /menu footer buttons -->
      </div>
    </div>

    <!-- top navigation -->
    <?php
    include('top_nav.php');
    ?>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">


          <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              <div class="input-group">

              </div>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
         <div class="col-md-12 col-xs-12  widget_tally_box">
          <div class="x_panel" >
            <div class="x_title">
              <h2>Progress Programs - Feedback Form</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content" >
              <?php 
              $warrior=$_GET['user'];
              $prog=$_GET['id'];
              ?>
              <form id="demo-form2" method="post" action="progress_evaluate_.php" data-parsley-validate class="form-horizontal form-label-left">
               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">From <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="dari" readonly class="form-control" value="<?php echo $username; ?>"/>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">To Warrior <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="untuk" readonly class="form-control" value="<?php echo $warrior; ?>"/>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Subject <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="subjek"  class="form-control" value="<?php echo $prog; ?>"/>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Message Detail <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea class="resizable_textarea form-control" name="pesan"></textarea>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="submit" name="submit" class="btn btn-primary" value="simpan">KIRIM</button>
                </div>
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
<!-- Autosize -->
<script>
$(document).ready(function() {
  autosize($('.resizable_textarea'));
});
</script>
<!-- /Autosize -->


</body>
</html>
