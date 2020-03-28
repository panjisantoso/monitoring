<?php
include "../koneksi.php";
?>

<?php
  $status_temp1  = mysqli_query($con, 'SELECT status_temp FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
  $status_temp2 = mysqli_fetch_array($status_temp1);
  $status_temp = array_shift($status_temp2);
?>

<?php
    if($status_temp == 1){
?> 
    <h5 class="card-category">Status <input type="text" style="width:30%; color:green; border-color:green;" value="Baik" class="form-control" readonly></h5>   
<?php   
    }elseif($status_temp == 2){
?>
    <h5 class="card-category">Status <input type="text" style="width:30%; color:blue; border-color:blue;" value="Sedang" class="form-control" readonly></h5>   
<?php   
    }elseif($status_temp == 3){
?>
    <h5 class="card-category">Status <input type="text" style="width:43%; color:#caab0c; border-color:#caab0c;" value="Tidak Sehat Bagi Orang Tertentu" class="form-control" readonly></h5>   
<?php   
    }elseif($status_temp == 4){
?> 
    <h5 class="card-category">Status <input type="text" style="width:30%; color:#cf0c5d; border-color:#cf0c5d;" value="Tidak Sehat" class="form-control" readonly></h5>   
<?php   
    }elseif($status_temp == 5){
?> 
    <h5 class="card-category">Status <input type="text" style="width:30%; color:red; border-color:red;" value="Sangat Tidak Sehat" class="form-control" readonly></h5>   
<?php   
    }else{
?> 
    <h5 class="card-category">Status <input type="text" style="width:30%; color:red; border-color:red;" value="Berbahaya" class="form-control" readonly></h5>   
<?php   
    }
?> 