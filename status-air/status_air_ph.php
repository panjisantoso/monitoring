<?php
include "../koneksi.php";
?>

<?php
  $status_ph1  = mysqli_query($con, 'SELECT status_ph FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
  $status_ph2 = mysqli_fetch_array($status_ph1);
  $status_ph = array_shift($status_ph2);
?>

<?php
    if($status_ph == 1){
?> 
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:30%; color:green; border-color:green;" value="Baik" class="form-control" readonly></h5>   
<?php   
    }elseif($status_ph == 2){
?>
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:30%; color:blue; border-color:blue;" value="Sedang" class="form-control" readonly></h5>   
<?php   
    }elseif($status_ph == 3){
?>
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:73%; color:#caab0c; border-color:#caab0c;" value="Tidak Sehat Bagi Orang Tertentu" class="form-control" readonly></h5>   
<?php   
    }elseif($status_ph == 4){
?> 
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:30%; color:#cf0c5d; border-color:#cf0c5d;" value="Tidak Sehat" class="form-control" readonly></h5>   
<?php   
    }elseif($status_ph == 5){
?> 
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:30%; color:red; border-color:red;" value="Sangat Tidak Sehat" class="form-control" readonly></h5>   
<?php   
    }else{
?> 
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:30%; color:black; border-color:black;" value="Berbahaya" class="form-control" readonly></h5>   
<?php   
    }
?> 