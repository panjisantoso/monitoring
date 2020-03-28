<?php require_once "layout-top-air.php"; ?>

<!-- End Navbar -->
      <div class="panel-header panel-header-sm">
        
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <!-- <h5 class="card-category">Global Sales</h5> -->
                <h4 class="card-title">Temperature</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons travel_info"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item"><b>Tingkat Suhu pada Air</b> <br>
                                                Normal : Dibawah suhu lingkungan sekitar <br><br>
                                                Tidak Normal : Diatas suhu lingkungan sekitar</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <script src="jquery-latest.js"></script> 
                  <script>
                    var refreshId1 = setInterval(function()
                    {
                        $('#temperature').load('data-air-temperature.php');
                    }, 1000);
                  </script>
                  

                    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
                    <script type="text/javascript" src="assets/js/mdb.min.js"></script>

                    <div id="temperature">

                    </div>	
                    <!-- <canvas id="bigDashboardChart"></canvas> -->
                </div>
              </div>
              <div class="card-footer">
                  <script>
                    var refreshId2 = setInterval(function()
                    {
                        $('#status-temp').load('status-air/status_air_temp.php');
                    }, 1000);
                  </script>

                    <div id="status-temp">

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
                <h4 class="card-title">Voltage</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons travel_info"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item"><b>Tingkat Tegangan pada Air</b> <br>
                                                Tinggi : Semakin Tinggi Tingkat Keasaman <br><br>
                                                Rendah : Semakin Rendah Tingkat Keasaman</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <script>
                    var refreshId2 = setInterval(function()
                    {
                        $('#voltage').load('data-air-voltage.php');
                    }, 1000);
                  </script>

                    <div id="voltage">

                    </div>	
                    <!-- <canvas id="bigDashboardChart"></canvas> -->
                </div>
              </div>
              <div class="card-footer">
              <h5 class="card-category" style="height:30;"></h5>
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69" ></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <!-- <h5 class="card-category">Global Sales</h5> -->
                <h4 class="card-title">Keasaman Air</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons travel_info"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item"><b>Tingkat Keasaman pada Air</b> <br>
                                                Normal :pH 6,5 - 8,5 <br><br>
                                                Tidak Normal : pH dibawah 6,5 dan diatas 8,5</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <script src="jquery-latest.js"></script> 
                  <script>
                    var refreshId3 = setInterval(function()
                    {
                        $('#ph').load('data-air-ph.php');
                    }, 1000);
                  </script>
                  

                    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
                    <script type="text/javascript" src="assets/js/mdb.min.js"></script>

                    <div id="ph">

                    </div>	
                    <!-- <canvas id="bigDashboardChart"></canvas> -->
                </div>
              </div>
              <div class="card-footer">
                  <script>
                    var refreshId2 = setInterval(function()
                    {
                        $('#status-ph').load('status-air/status_air_ph.php');
                    }, 1000);
                  </script>

                    <div id="status-ph">

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
                <h4 class="card-title">Turbidity(Tingkat Kekeruhan)</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons travel_info"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item"><b>Tingkat Kekeruhan pada Air</b> <br>
                                            Normal : Semakin rendah angka yang<br> 
                                            ditunjukkan oleh sensor, maka air semakin <br>
                                            jernih<br><br>
                                            Tidak Normal : Semakin tinggi angka yang <br>
                                            ditunjukkan oleh sensor, maka air semakin <br>
                                            keruh</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <script>
                    var refreshId4 = setInterval(function()
                    {
                        $('#turbidity').load('data-air-turbidity.php');
                    }, 1000);
                  </script>

                    <div id="turbidity">

                    </div>	
                    <!-- <canvas id="bigDashboardChart"></canvas> -->
                </div>
              </div>
              <div class="card-footer">
                  <script>
                    var refreshId2 = setInterval(function()
                    {
                        $('#status-turb').load('status-air/status_air_turb.php');
                    }, 1000);
                  </script>

                    <div id="status-turb">

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
                        $('#kesimpulan-air').load('status-air/status_air_kesimpulan.php');
                    }, 1000);
                  </script>

                    <div id="kesimpulan-air">

                    </div>	
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
              <h4 class="card-title">Sensor Location</h4>
              </div>
              <div class="card-body ">
              <div class="map">
              <div id="map"></div>
                    
                    <script>  
                        $(document).ready(function(){

                            var map1 = L.map('map').setView([-8.6697851,115.2136473], 12);

                            var marker1;

                            L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=RR9o7QUfjAF8NvJ7jXkz', {
                                attribution:  ' ' ,
                            }).addTo(map1);
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
                            ]).addTo(map1);
                            marker1.bindPopup("Lokasi Sensor Air" +
                            "<br>" + "latitude : " + <?php  echo $data2['latitude']; ?> +
                            "<br>" + "longitutde : " + <?php  echo $data2['longitude']; ?> 
                            );
                                        
                        });	
                        
                    </script>
                    </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        </div>
      </div>

<?php require_once "layout-bottom-air.php"; ?>