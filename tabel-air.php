<?php
include "koneksi.php";
?>

    <div class="panel-heading">
      <!-- <h3 class="panel-title"><center>Tabel Kualitas Udara</h3> -->
    </div>
    <div class="panel-body" style="height:340px;overflow:auto;">
      <table class="table" id="table2">
        <thead class=" text-primary">
          <th class="text-center">
          <b>Created at</b>
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
          <th class="text-center">
          <b>Status Temperature</b>
          </th>
          <th class="text-center">
          <b>Status pH</b>
          </th>
          <th class="text-center">
          <b>Status Turbidity</b>
          </th>
        </thead>
        <tbody>
          
          <?php

            $sqlAdmin = mysqli_query($con, "SELECT created_at,temperature, voltage, ph, turbidity,status_temp, status_ph, status_turb FROM tb_sensor_air ORDER BY ID DESC LIMIT 0,20");
            while($data=mysqli_fetch_array($sqlAdmin))
            {
              echo "<tr >
                <td><center>$data[created_at]</center></td> 
                <td><center>$data[temperature]°C</td>
                <td><center>$data[voltage] Volt</td>
                <td><center>$data[ph]pH</center></td> 
                <td><center>$data[turbidity] NTU</td>";
                if($data['status_temp'] == 1){
                  echo "<td><center>Baik</td>";
                }elseif($data['status_temp'] == 2){
                  echo "<td><center>Sedang</td>";
                }elseif($data['status_temp'] == 3){
                  echo "<td><center>Tidak Sehat Bagi Orang Tertentu</td>";
                }elseif($data['status_temp'] == 4){
                  echo "<td><center>Tidak Sehat</td>";
                }elseif($data['status_temp'] == 5){
                  echo "<td><center>Sangat Tidak Sehat</td>";
                }else{
                  echo "<td><center>Berbahaya</td>";
                }

                if($data['status_ph'] == 1){
                  echo "<td><center>Baik</td>";
                }elseif($data['status_ph'] == 2){
                  echo "<td><center>Sedang</td>";
                }elseif($data['status_ph'] == 3){
                  echo "<td><center>Tidak Sehat Bagi Orang Tertentu</td>";
                }elseif($data['status_ph'] == 4){
                  echo "<td><center>Tidak Sehat</td>";
                }elseif($data['status_ph'] == 5){
                  echo "<td><center>Sangat Tidak Sehat</td>";
                }else{
                  echo "<td><center>Berbahaya</td>";
                }

                if($data['status_turb'] == 1){
                  echo "<td><center>Baik</td>";
                }elseif($data['status_turb'] == 2){
                  echo "<td><center>Sedang</td>";
                }elseif($data['status_turb'] == 3){
                  echo "<td><center>Tidak Sehat Bagi Orang Tertentu</td>";
                }elseif($data['status_turb'] == 4){
                  echo "<td><center>Tidak Sehat</td>";
                }elseif($data['status_turb'] == 5){
                  echo "<td><center>Sangat Tidak Sehat</td>";
                }else{
                  echo "<td><center>Berbahaya</td>";
                }

                echo "</tr>";
            }
          ?>
        </tbody>
      </table>   
    </div>
    <script>
      var $rows = $('#table2 tr');
      $('#search2').keyup(function() {
          var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
          
          $rows.show().filter(function() {
              var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
              return !~text.indexOf(val);
          }).hide();
      });
    </script>

    