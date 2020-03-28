<?php require_once "layout-top-history.php"; 
ini_set('max_execution_time', 300); //300 seconds = 5 minutes?>

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-5">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Tabel Udara 
                  <!-- <input class="form-control" style="float:right; width:40%; font-size:12; height:30;" type="text" id="search1" placeholder="Type to search"> -->
                </h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive">
               
                <?php include "tabel-udara.php"; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Tabel Air
                <!-- <input class="form-control" style="float:right; width:40%; font-size:12; height:30;" type="text" id="search2" placeholder="Type to search"> -->
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <?php include "tabel-air.php"; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php require_once "layout-bottom-history.php"; ?>