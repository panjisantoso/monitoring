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
          <b>Temperature</b>
          </th>
          <th class="text-center">
          <b>Voltage</b>
          </th>
          <th class="text-center">
          <b>Keasaman (pH)</b>
          </th>
          <th class="text-center">
          <b>Turbidity</b>
          </th>
        </thead>
        <tbody>
          
          <?php

            $sqlAdmin = mysqli_query($con, "SELECT created_at,temperature, voltage, ph, turbidity FROM tb_sensor_air ORDER BY ID DESC LIMIT 0,20");
            while($data=mysqli_fetch_array($sqlAdmin))
            {
              echo "<tr >
                <td><center>$data[created_at]</center></td> 
                <td><center>$data[temperature]</td>
                <td><center>$data[voltage]</td>
                <td><center>$data[ph]</center></td> 
                <td><center>$data[turbidity]</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>   
    </div>
    

    