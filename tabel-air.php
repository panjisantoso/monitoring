<?php
include "koneksi.php";
?>

    <div class="panel-heading">
      <h3 class="panel-title"><center>Tabel Temperature</h3>
    </div>
    <div class="panel-body" style="height:340px;overflow:auto;">
      <table class="table table-bordered table-striped">
        <thead>
          <tr >
            <th class='text-center'>Tanggal</th>
            <th class='text-center'>Temperature</th>
          </tr>
        </thead>
        
        <tbody>
          <?php

            $sqlAdmin = mysqli_query($con, "SELECT created_at,temperature FROM tb_sensor_air ORDER BY ID DESC LIMIT 0,20");
            while($data=mysqli_fetch_array($sqlAdmin))
            {
              echo "<tr >
                <td><center>$data[created_at]</center></td> 
                <td><center>$data[temperature]</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>   
    </div>
    <?php echo '<br><br>'; ?>
    <div class="panel-heading">
      <h3 class="panel-title"><center>Tabel Voltage</h3>
    </div>
    <div class="panel-body" style="height:340px;overflow:auto;">
      <table class="table table-bordered table-striped">
        <thead>
          <tr >
            <th class='text-center'>Tanggal</th>
            <th class='text-center'>Voltage</th>
          </tr>
        </thead>
        
        <tbody>
          <?php

            $sqlAdmin = mysqli_query($con, "SELECT created_at,voltage FROM tb_sensor_air ORDER BY ID DESC LIMIT 0,20");
            while($data=mysqli_fetch_array($sqlAdmin))
            {
              echo "<tr >
                <td><center>$data[created_at]</center></td> 
                <td><center>$data[voltage]</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>   
    </div>

    <?php echo '<br><br>'; ?>
    <div class="panel-heading">
      <h3 class="panel-title"><center>Tabel Ph</h3>
    </div>
    <div class="panel-body" style="height:340px;overflow:auto;">
      <table class="table table-bordered table-striped">
        <thead>
          <tr >
            <th class='text-center'>Tanggal</th>
            <th class='text-center'>Ph</th>
          </tr>
        </thead>
        
        <tbody>
          <?php

            $sqlAdmin = mysqli_query($con, "SELECT created_at,ph FROM tb_sensor_air ORDER BY ID DESC LIMIT 0,20");
            while($data=mysqli_fetch_array($sqlAdmin))
            {
              echo "<tr >
                <td><center>$data[created_at]</center></td> 
                <td><center>$data[ph]</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>   
    </div>

    <?php echo '<br><br>'; ?>
    <div class="panel-heading">
      <h3 class="panel-title"><center>Tabel Turbidity</h3>
    </div>
    <div class="panel-body" style="height:340px;overflow:auto;">
      <table class="table table-bordered table-striped">
        <thead>
          <tr >
            <th class='text-center'>Tanggal</th>
            <th class='text-center'>Turbidity</th>
          </tr>
        </thead>
        
        <tbody>
          <?php

            $sqlAdmin = mysqli_query($con, "SELECT created_at,turbidity FROM tb_sensor_air ORDER BY ID DESC LIMIT 0,20");
            while($data=mysqli_fetch_array($sqlAdmin))
            {
              echo "<tr >
                <td><center>$data[created_at]</center></td> 
                <td><center>$data[turbidity]</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>   
    </div>