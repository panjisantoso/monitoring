<?php
include "koneksi.php";
?>

    <div class="panel-heading">
      <!-- <h3 class="panel-title"><center>Tabel Kualitas Udara</h3> -->
    </div>
    <div class="panel-body" style="height:340px;overflow:auto;">
      <table class="table" id="table1">
        <thead class=" text-primary">
          <th class="text-center">
            <b>Created at</b>
          </th>
          <th class="text-center">
          <b>Kualitas Udara</b>
          </th>
          <th class="text-center">
          <b>Monoksida Udara</b>
          </th>
          <th class="text-center">
          <b>Status Kualitas Udara</b>
          </th>
          <th class="text-center">
          <b>Status Monoksida</b>
          </th>
        </thead>
        <tbody>
          
          <?php

            $sqlAdmin = mysqli_query($con, "SELECT created_at,num_quality_air,num_mono_air,status_qty_air,status_mono_air FROM tb_sensor_udara ORDER BY ID DESC LIMIT 0,20");
            while($data=mysqli_fetch_array($sqlAdmin))
            {
              echo "<tr >
                <td><center>$data[created_at]</center> </td> 
                <td><center>$data[num_quality_air] ppm</td>
                <td><center>$data[num_mono_air] ppm</td>";
                if($data['status_qty_air'] == 1){
                  echo "<td><center>Baik</td>";
                }elseif($data['status_qty_air'] == 2){
                  echo "<td><center>Sedang</td>";
                }elseif($data['status_qty_air'] == 3){
                  echo "<td><center>Tidak Sehat Bagi Orang Tertentu</td>";
                }elseif($data['status_qty_air'] == 4){
                  echo "<td><center>Tidak Sehat</td>";
                }elseif($data['status_qty_air'] == 5){
                  echo "<td><center>Sangat Tidak Sehat</td>";
                }else{
                  echo "<td><center>Berbahaya</td>";
                }
                if($data['status_mono_air'] == 1){
                  echo "<td><center>Baik</td>";
                }elseif($data['status_mono_air'] == 2){
                  echo "<td><center>Sedang</td>";
                }elseif($data['status_mono_air'] == 3){
                  echo "<td><center>Tidak Sehat Bagi Orang Tertentu</td>";
                }elseif($data['status_mono_air'] == 4){
                  echo "<td><center>Tidak Sehat</td>";
                }elseif($data['status_mono_air'] == 5){
                  echo "<td><center>Sangat Tidak Sehat</td>";
                }else{
                  echo "<td><center>Berbahaya</td>";
                }
                
              
              echo"</tr>";
            }
          ?>
        </tbody>
      </table>   
    </div>
    <script>
      var $rows = $('#table1 tr');
      $('#search1').keyup(function() {
          var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
          
          $rows.show().filter(function() {
              var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
              return !~text.indexOf(val);
          }).hide();
      });
    </script>
    

    