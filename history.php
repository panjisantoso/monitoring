<?php require_once "layout-top-history.php"; 
ini_set('max_execution_time', 300); //300 seconds = 5 minutes?>

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-5">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Tabel Udara</h4>
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
                <h4 class="card-title"> Tabel Air</h4>
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