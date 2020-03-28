<?php
include "../koneksi.php";
?>

<?php
  $temp1  = mysqli_query($con, 'SELECT temperature FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
  $temp2 = mysqli_fetch_array($temp1);
  $temp = array_shift($temp2);

  $ph1  = mysqli_query($con, 'SELECT ph FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
  $ph2 = mysqli_fetch_array($ph1);
  $ph = array_shift($ph2);

  $turb1  = mysqli_query($con, 'SELECT turbidity FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
  $turb2 = mysqli_fetch_array($turb1);
  $turb = array_shift($turb2);

  $status_kesimpulan1 = mysqli_query($con, 'SELECT GREATEST(MAX(status_temp), MAX(status_ph), MAX(status_turb)) FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
  $status_kesimpulan2 = mysqli_fetch_array($status_kesimpulan1);
  $status_kesimpulan = array_shift($status_kesimpulan2);
?>

<?php
    if($status_kesimpulan == 1){
        $kesimpulan = "BAIK";
    }elseif($status_kesimpulan == 2){
        $kesimpulan = "SEDANG";
    }elseif($status_kesimpulan == 3){
        $kesimpulan = "TIDAK SEHAT BAGI ORANG TERTENTU";
    }elseif($status_kesimpulan == 4){
        $kesimpulan = "TIDAK SEHAT";
    }elseif($status_kesimpulan == 5){
        $kesimpulan = "SANGAT TIDAK SEHAT";
    }else{
        $kesimpulan = "BERBAHAYA";
    }
?> 
<center>Dengan nilai Temperature yaitu <?php echo $temp?>°C, Keasaman Air yaitu <?php echo $ph?> pH, dan Turbidity yaitu <?php echo $turb?> NTU, maka kondisi air saat ini yaitu <b><?php echo $kesimpulan?></b></center>
