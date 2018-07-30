<?php 

include('connection/conn.php');
date_default_timezone_set("Asia/Jakarta");

//1
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDZ'");
$total_=0;
$jktdz=mysqli_num_rows($queries);

while ($row=mysqli_fetch_array($queries)) {
  $unit=$row['unit_name'];
  $month=date('m');

  $user = $this->session->userdata('username');

  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);

    $total_= $total_+$rerata;
      
}

$total_rata1=round($total_/$jktdz);

// 2
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDI'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);

    $total_= $total_+$rerata;                     

}

$total_rata2=round($total_/$jktdz); 

// 3
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDF'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);


    $total_= $total_+$rerata;                     
 
}

$total_rata3=round($total_/$jktdz);

// 4
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDG'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);


    $total_= $total_+$rerata;                     

}

$total_rata4=round($total_/$jktdz);

// 5
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDO'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);

    $total_= $total_+$rerata;                     

}

$total_rata5=round($total_/$jktdz);


// 6
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDE'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);

  
    $total_= $total_+$rerata;                     

}

$total_rata6=round($total_/$jktdz);

// 7
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDC'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);


 
    $total_= $total_+$rerata;                     

}

$total_rata7=round($total_/$jktdz);

// 8
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDN' and unit.kode_ca='1'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);


    $total_= $total_+$rerata;                     
 
}

$total_rata8=round($total_/$jktdz);


// 9
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDN' and unit.kode_ca='3'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);
                     
   
    $total_= $total_+$rerata;
  
}

$total_rata9=round($total_/$jktdz);


// 10
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDN' and unit.kode_ca='5'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);
                   
 
    $total_= $total_+$rerata;

}

$total_rata10=round($total_/$jktdz);

// 11
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDN' and unit.kode_ca='2'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);


   
    $total_= $total_+$rerata;                     
 
}

$total_rata11=round($total_/$jktdz);

// 12
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDN' and unit.kode_ca='4'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);


  
    $total_= $total_+$rerata;                     

}

$total_rata12=round($total_/$jktdz);

// 13
$queries=mysqli_query($con,"SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where unit.kode_dir='JKTDN'");
$total_=0;
$jktdz=mysqli_num_rows($queries);
while ($row=mysqli_fetch_array($queries)) {

  $unit=$row['unit_name'];
  $month='03';
  $user = $this->session->userdata('username');
  $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
  $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where  input_user_c='$unit'");
  $contoh_=mysqli_fetch_array($contoh);
  $rata=mysqli_num_rows($prog);
  $rerata=round($contoh_['Total']/$rata);


  
    $total_= $total_+$rerata;                     

}
$total_rata13=round($total_/$jktdz);


$total=($total_rata1+$total_rata2+$total_rata3+$total_rata4+$total_rata5+$total_rata6+$total_rata7+$total_rata8+$total_rata9+$total_rata10+$total_rata11+$total_rata12)/12;

?>

