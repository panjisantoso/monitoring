<?php
include "../koneksi.php";
?>

<?php
  $status_turb1  = mysqli_query($con, 'SELECT status_turb FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
  $status_turb2 = mysqli_fetch_array($status_turb1);
  $status_turb = array_shift($status_turb2);
?>

<?php
    if($status_turb == 1){
?> 
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:30%; color:green; border-color:green;" value="Baik" class="form-control" readonly></h5>   
<?php   
    }elseif($status_turb == 2){
?>
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:30%; color:blue; border-color:blue;" value="Sedang" class="form-control" readonly></h5>   
<?php   
    }elseif($status_turb == 3){
?>
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:73%; color:#caab0c; border-color:#caab0c;" value="Tidak Sehat Bagi Orang Tertentu" class="form-control" readonly></h5>   
<?php   
    }elseif($status_turb == 4){
?> 
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:30%; color:#cf0c5d; border-color:#cf0c5d;" value="Tidak Sehat" class="form-control" readonly></h5>   
<?php   
    }elseif($status_turb == 5){
?> 
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:30%; color:red; border-color:red;" value="Sangat Tidak Sehat" class="form-control" readonly></h5>   
<?php   
    }else{
?> 
    <h5 class="card-category">Status <input type="text" style="text-align:center; width:30%; color:red; border-color:black;" value="Berbahaya" class="form-control" readonly></h5>   
<?php   
    }
?> 