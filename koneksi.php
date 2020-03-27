<?php
	
	// $server		= "localhost"; //sesuaikan dengan nama server
	// $user		= "root"; //sesuaikan username
	// $password	= ""; //sesuaikan password
    // $database	= "test"; //sesuaikan target database
    
    $server		= "139.162.27.247";
	$user		= "trywiguna";
	$password	= "monitoringwaste2020";
	$database	= "db_monitoringwaste";
	
	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	}
	ini_set('max_execution_time', 300); //300 seconds = 5 minutes
?>