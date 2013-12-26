<?php

function saveIp($ip){
	include_once("global.php");

	$link =  mysql_connect( $hostname , $username, $password);
	if (!$link) {
	//	 die('Could not connect: ' . mysql_error());
	}
	// echo 'Connected successfully';

	mysql_select_db($dbname);
	$order = "INSERT INTO visitors(ip)
	VALUES
	('$ip')";

	$result = mysql_query($order);	//order executes
	if($result){
	//		echo("<br>Input data is succeed");
	} else{
	//		echo("<br>Input data is fail");
	}
	mysql_close($link);
}

function getRealIp() {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  //check ip from share internet
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //to check ip is pass from proxy
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}
?>