<?php
include "../koneksi.php";
?>

<?php
  $status_quality1  = mysqli_query($con, 'SELECT status_qty_air FROM ( SELECT * FROM tb_sensor_udara ORDER BY id DESC LIMIT 1) Var1 ORDER BY ID DESC');
  $status_quality2 = mysqli_fetch_array($status_quality1);
  $status_quality = array_shift($status_quality2);
?>

<?php
    if($status_quality == 1){
?> 
    <h5 class="card-category">Status <input type="text" style="width:30%; color:green; border-color:green;" value="Baik" class="form-control" readonly></h5>   
<?php   
    }elseif($status_quality == 2){
?>
    <h5 class="card-category">Status <input type="text" style="width:30%; color:blue; border-color:blue;" value="Sedang" class="form-control" readonly></h5>   
<?php   
    }elseif($status_quality == 3){
?>
    <h5 class="card-category">Status <input type="text" style="width:73%; color:#caab0c; border-color:#caab0c;" value="Tidak Sehat Bagi Orang Tertentu" class="form-control" readonly></h5>   
<?php   
    }elseif($status_quality == 4){
?> 
    <h5 class="card-category">Status <input type="text" style="width:30%; color:#cf0c5d; border-color:#cf0c5d;" value="Tidak Sehat" class="form-control" readonly></h5>   
<?php   
    }elseif($status_quality == 5){
?> 
    <h5 class="card-category">Status <input type="text" style="width:30%; color:red; border-color:red;" value="Sangat Tidak Sehat" class="form-control" readonly></h5>   
<?php   
    }else{
?> 
    <h5 class="card-category">Status <input type="text" style="width:30%; color:red; border-color:red;" value="Berbahaya" class="form-control" readonly></h5>   
<?php   
    }
?> 