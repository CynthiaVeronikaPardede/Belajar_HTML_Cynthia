<?php
	function openConn(){
		$databaseHost = "localhost";
		$username = "root";
		$password = "";
		$namaTabel = "cynthia_db";
		$link = mysqli_connect($databaseHost, $username, $password, $namaTabel);
		
		if(link == false){
			die("ERROR: ".mysqli_connect_error());
		}
		die("SUCCESS");
	}
	
?>