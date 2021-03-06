<?php
include "koneksi.php";
?>

<?php
  $x_tanggal1  = mysqli_query($con, 'SELECT created_at FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');
  $x_tanggal2  = mysqli_query($con, 'SELECT created_at FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');
  $x_tanggal3  = mysqli_query($con, 'SELECT created_at FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');
  $x_tanggal4  = mysqli_query($con, 'SELECT created_at FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');


  $y_voltage   = mysqli_query($con, 'SELECT voltage FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');
  $y_temperature  = mysqli_query($con, 'SELECT temperature FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');
  $y_ph  = mysqli_query($con, 'SELECT ph FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');
  $y_turbidity  = mysqli_query($con, 'SELECT turbidity FROM ( SELECT * FROM tb_sensor_air ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC'); 
  ?>

  <div class="panel panel-primary">
    <div class="panel-heading">
      <!-- <h3 class="panel-title"><center>Grafik Sensor Udara</h3> -->
    </div>

    <div class="panel-body">
      <canvas id="chartVoltage" style="display: block; height: 190px;"></canvas>
      <script>
         var canvas = document.getElementById('chartVoltage').getContext("2d");
         var gradientStroke = canvas.createLinearGradient(500, 0, 100, 0);
        gradientStroke.addColorStop(0, '#80b6f4');
        gradientStroke.addColorStop(1, "#FFFFFF");

        var gradientFill = canvas.createLinearGradient(0, 170, 0, 50);
        gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
        gradientFill.addColorStop(1, "rgba(237, 203, 7, 0.4)");
        var data = {
            labels: [<?php while ($b = mysqli_fetch_array($x_tanggal2)) { echo '"' . $b['created_at'] . '",';}?>],
            datasets: [
            {
                label: "Voltage (volt)",
                borderColor: "#e6e214",
                pointBorderColor: "#FFF",
                pointBackgroundColor: [
                  "#e6e214",
                  "#e6e214",
                  "#e6e214",
                  "#e6e214",
                  "#e6e214",
                  "#e6e214",
                  "#e6e214",
                  "#e6e214",
                  "#e6e214",
                  "#e6e214"
                ],
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                fill: true,
                backgroundColor: gradientFill,
                borderWidth: 2,
                data: [<?php while ($b = mysqli_fetch_array($y_voltage)) { echo  $b['voltage'] . ',';}?>],
            }
            ]
        };
        var option = 
        {
          showLines: true,
          animation: {duration: 0},
          maintainAspectRatio: false,
      legend: {
        display: true
      },
      tooltips: {
        bodySpacing: 4,
        mode: "nearest",
        intersect: 0,
        position: "nearest",
        xPadding: 10,
        yPadding: 10,
        caretPadding: 10
      },
      responsive: true,
      scales: {
        yAxes: [{
          gridLines: 0,
          gridLines: {
            zeroLineColor: "transparent",
            drawBorder: false
          }
        }],
        xAxes: [{
          display: 0,
          gridLines: 0,
          ticks: {
            display: true
          },
          gridLines: {
            zeroLineColor: "transparent",
            drawTicks: true,
            display: true,
            drawBorder: true
          }
        }]
      },
      layout: {
        padding: {
          left: 0,
          right: 20,
          top: 0,
          bottom: 0
        }
      }
        };
        
        var myLineChart = Chart.Line(canvas,{
          data:data,
          options:option
        });
        var dataset = myLineChart.data.datasets[0];
          for (var i = 0; i < dataset.data.length; i++) {
          if (dataset.data[i] > 3.8) {
            dataset.pointBackgroundColor[i] = 'blue';
          }else if(dataset.data[i] < 3.3){
            dataset.pointBackgroundColor[i] = 'orange';
          }
        }
        myLineChart.update();
        
      </script>   
     
    </div>    
  </div>

  
  </div>