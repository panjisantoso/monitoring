<?php require_once "layout-top.php"; ?>

<!-- End Navbar -->
      <div class="panel-header panel-header-sm">
        
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <!-- <h5 class="card-category">Global Sales</h5> -->
                <h4 class="card-title">Kualitas Udara</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons travel_info"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item"><b>Tingkat Kualitas Udara</b> <br>
                                                Normal : ≤ 400 ppm <br><br>
                                                Tidak Normal : > 400 ppm</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <script src="jquery-latest.js"></script> 
                  <script>
                    var refreshId1 = setInterval(function()
                    {
                        $('#quality-air').load('data-udara-quality.php');
                    }, 1000);
                  </script>
                  

                    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
                    <script type="text/javascript" src="assets/js/mdb.min.js"></script>

                    <div id="quality-air">

                    </div>	
                    <!-- <canvas id="bigDashboardChart"></canvas> -->
                </div>
              </div>
              <div class="card-footer">
                  <script>
                    var refreshId2 = setInterval(function()
                    {
                        $('#status-quality').load('status-udara/status_udara_quality.php');
                    }, 1000);
                  </script>

                    <div id="status-quality">

                    </div>	
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <!-- <h5 class="card-category">2018 Sales</h5> -->
                <h4 class="card-title">Monoksida</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons travel_info"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item"><b>Tingkat Monoksida pada Udara</b> <br>
                                                Normal : ≤ 9.4 ppm<br><br>
                                                Tidak Normal : Diatas 9.4 ppm</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <script>
                    var refreshId2 = setInterval(function()
                    {
                        $('#mono-air').load('data-udara-mono.php');
                    }, 1000);
                  </script>

                    <div id="mono-air">

                    </div>	
                    <!-- <canvas id="bigDashboardChart"></canvas> -->
                </div>
              </div>
              <div class="card-footer">
                  <script>
                    var refreshId2 = setInterval(function()
                    {
                        $('#status-mono').load('status-udara/status_udara_mono.php');
                    }, 1000);
                  </script>

                    <div id="status-mono">

                    </div>	
                 <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card ">
              <!-- <div class="card-header ">
                <h4 class="card-title"> </h4>
              </div> -->
              <div class="card-body">
                  <script>
                    var refreshId2 = setInterval(function()
                    {
                        $('#kesimpulan-udara').load('status-udara/status_udara_kesimpulan.php');
                    }, 1000);
                  </script>

                    <div id="kesimpulan-udara">

                    </div>	
              </div>
            </div>
          </div>



          
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
              <h4 class="card-title">Lokasi Sensor</h4>
              </div>
              <div class="card-body ">
              <div class="map">
              <div id="map"></div>
                    
                    <script>  
                        $(document).ready(function(){

                            var map = L.map('map').setView([-8.6697851,115.2136473], 12);

                            var marker;

                            L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=RR9o7QUfjAF8NvJ7jXkz', {
                                attribution:  ' ' ,
                            }).addTo(map);
                            var marker1 = L.marker([
                                <?php
                                    include "koneksi.php";
                                    $query_mysql2 = "SELECT * FROM tb_sensor_udara ORDER BY id DESC LIMIT 1";
                                    $read_data2 = mysqli_query($con, $query_mysql2);
                                    $data2 = mysqli_fetch_array($read_data2);

                                    echo $data2['latitude'];
                                    echo ",";
                                    echo $data2['longitude'];

                                ?>
                            ]).addTo(map);
                            marker1.bindPopup("Lokasi Sensor Udara" +
                            "<br>" + "latitude : " + <?php  echo $data2['latitude']; ?> +
                            "<br>" + "longitutde : " + <?php  echo $data2['longitude']; ?>+
                            "<br>" + "<button type='button' class='btn btn-primary' onclick='location.reload();'>Go to Sensor</button>"
                             
                            );
                                        
                        });	
                        function remove() {
                            $.ajax({
                            type: "POST",
                            success: function() {
                                location.reload();
                            }
                        });
                            return false;
                        }
                    </script>
                    </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        </div>
      </div>

<?php require_once "layout-bottom.php"; ?>