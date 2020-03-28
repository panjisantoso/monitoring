<?php
include "../koneksi.php";
?>

<?php
  $quality1  = mysqli_query($con, 'SELECT num_quality_air FROM ( SELECT * FROM tb_sensor_udara ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
  $quality2 = mysqli_fetch_array($quality1);
  $quality = array_shift($quality2);

  $mono1  = mysqli_query($con, 'SELECT num_mono_air FROM ( SELECT * FROM tb_sensor_udara ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
  $mono2 = mysqli_fetch_array($mono1);
  $mono = array_shift($mono2);

  $status_kesimpulan1 = mysqli_query($con, 'SELECT GREATEST(MAX(status_qty_air), MAX(status_mono_air)) FROM ( SELECT * FROM tb_sensor_udara ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
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
<center>Dengan nilai kualitas udara yaitu <?php echo $quality?> ppm dan Monoksida yaitu <?php echo $mono?> ppm, maka kondisi udara saat ini yaitu <b><?php echo $kesimpulan?></b></center>
