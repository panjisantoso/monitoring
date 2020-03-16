<?php
	
	// $server		= "localhost"; //sesuaikan dengan nama server
	// $user		= "root"; //sesuaikan username
	// $password	= ""; //sesuaikan password
    // $database	= "test"; //sesuaikan target database
    
    $server  = "arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user  = "dgf6f1qds8gvhn70";
    $password = "qunlh0s2hojvyojo";
    $database = "gg984lrbxouj31q2";
	
	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	}
	ini_set('max_execution_time', 300); //300 seconds = 5 minutes
?>