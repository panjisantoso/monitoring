<?php
include "koneksi.php";
?>

    <div class="panel-heading">
      <h3 class="panel-title"><center>Tabel Kualitas Udara</h3>
    </div>
    <div class="panel-body" style="height:340px;overflow:auto;">
      <table class="table table-bordered table-striped">
        <thead>
          <tr >
            <th class='text-center'>Tanggal</th>
            <th class='text-center'>Kualitas Udara</th>
          </tr>
        </thead>
        
        <tbody>
          <?php

            $sqlAdmin = mysqli_query($con, "SELECT created_at,num_quality_air FROM tb_sensor_udara ORDER BY ID DESC LIMIT 0,20");
            while($data=mysqli_fetch_array($sqlAdmin))
            {
              echo "<tr >
                <td><center>$data[created_at]</center></td> 
                <td><center>$data[num_quality_air]</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>   
    </div>
    <?php echo '<br><br><br>'; ?>
    <div class="panel-heading">
      <h3 class="panel-title"><center>Tabel Monoksida</h3>
    </div>
    <div class="panel-body" style="height:340px;overflow:auto;">
      <table class="table table-bordered table-striped">
        <thead>
          <tr >
            <th class='text-center'>Tanggal</th>
            <th class='text-center'>Monoksida</th>
          </tr>
        </thead>
        
        <tbody>
          <?php

            $sqlAdmin = mysqli_query($con, "SELECT created_at, num_mono_air FROM tb_sensor_udara ORDER BY ID DESC LIMIT 0,20");
            while($data=mysqli_fetch_array($sqlAdmin))
            {
              echo "<tr >
                <td><center>$data[created_at]</center></td> 
                <td><center>$data[num_mono_air]</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>   
    </div>

    