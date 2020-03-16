<?php
include "koneksi.php";
?>

    <div class="panel-heading">
      <!-- <h3 class="panel-title"><center>Tabel Kualitas Udara</h3> -->
    </div>
    <div class="panel-body" style="height:340px;overflow:auto;">
      <table class="table">
        <thead class=" text-primary">
          <th class="text-center">
            <b>Created At</b>
          </th>
          <th class="text-center">
          <b>Kualitas Udara</b>
          </th>
          <th class="text-center">
          <b>Monoksida Udara</b>
          </th>
        </thead>
        <tbody>
          
          <?php

            $sqlAdmin = mysqli_query($con, "SELECT created_at,num_quality_air,num_mono_air FROM tb_sensor_udara ORDER BY ID DESC LIMIT 0,20");
            while($data=mysqli_fetch_array($sqlAdmin))
            {
              echo "<tr >
                <td><center>$data[created_at]</center></td> 
                <td><center>$data[num_quality_air]</td>
                <td><center>$data[num_mono_air]</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>   
    </div>
    

    