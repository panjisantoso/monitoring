<?php
include "koneksi.php";
?>

<?php
  $x_tanggal1  = mysqli_query($con, 'SELECT created_at FROM ( SELECT * FROM tb_sensor_udara ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');
  $x_tanggal2  = mysqli_query($con, 'SELECT created_at FROM ( SELECT * FROM tb_sensor_udara ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');
 

  $y_quality   = mysqli_query($con, 'SELECT num_quality_air FROM ( SELECT * FROM tb_sensor_udara ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');
  $y_mono  = mysqli_query($con, 'SELECT num_mono_air FROM ( SELECT * FROM tb_sensor_udara ORDER BY id DESC LIMIT 10) Var1 ORDER BY ID ASC');
  ?>

  <div class="panel panel-primary">
    <div class="panel-heading">
      <!-- <h3 class="panel-title"><center>Grafik Sensor Udara</h3> -->
    </div>

    <div class="panel-body">
      <canvas id="chartMono" style="display: block; height: 190px;"></canvas>
      <script>
         var canvas = document.getElementById('chartMono').getContext("2d");
         var gradientStroke = canvas.createLinearGradient(500, 0, 100, 0);
        gradientStroke.addColorStop(0, '#80b6f4');
        gradientStroke.addColorStop(1, "#FFFFFF");

        var gradientFill = canvas.createLinearGradient(0, 170, 0, 50);
    gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
    gradientFill.addColorStop(1, "rgba(249, 99, 59, 0.40)");
        var data = {
            labels: [<?php while ($b = mysqli_fetch_array($x_tanggal2)) { echo '"' . $b['created_at'] . '",';}?>],
            datasets: [
            {
                label: "Monoksida (ppm)",
                borderColor: "#f96332",
                pointBorderColor: "#FFF",
                pointBackgroundColor: [
                  "#18ce0f",
                  "#18ce0f",
                  "#18ce0f",
                  "#18ce0f",
                  "#18ce0f",
                  "#18ce0f",
                  "#18ce0f",
                  "#18ce0f",
                  "#18ce0f",
                  "#18ce0f"
                ],
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                fill: true,
                backgroundColor: gradientFill,
                borderWidth: 2,
                data: [<?php while ($b = mysqli_fetch_array($y_mono)) { echo  $b['num_mono_air'] . ',';}?>],
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
            if (dataset.data[i] <= 4.4) {
              dataset.pointBackgroundColor[i] = 'green';
            }else if (dataset.data[i] > 4.5 && dataset.data[i] <= 9.4) {
              dataset.pointBackgroundColor[i] = 'blue';
            }else if (dataset.data[i] > 9.4 && dataset.data[i] <= 12.4) {
              dataset.pointBackgroundColor[i] = '#caab0c';
            }else if (dataset.data[i] > 12.4 && dataset.data[i] <= 15.4) {
              dataset.pointBackgroundColor[i] = '#cf0c5d';
            }else if (dataset.data[i] > 15.4 && dataset.data[i] <= 30.3) {
              dataset.pointBackgroundColor[i] = 'red';
            }else{
              dataset.pointBackgroundColor[i] = 'black';
            }
        }
        myLineChart.update();
        
      </script>   
     
    </div>    
  </div>

  
  </div>