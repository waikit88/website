<?php
    $config = include_once("config.php");
    $db = pg_connect("host=localhost port='$config[port]' dbname=Project1 user='$config[user]' password='$config[password]'");
    $result = pg_query($db, "SELECT * FROM project where name = '$_GET[project]'");        // Query template
    $row    = pg_fetch_assoc($result);        // To store the result row
	//$numRows = pg_num_rows($result);      

	session_start();
	$_SESSION['project_name'] = $row[name];
	$_SESSION['project_owner'] = $row[owner];
	$_SESSION['project_startdate'] = $row[start_date];
	$_SESSION['project_enddate'] = $row[end_date];
	$_SESSION['project_fundingsought'] = $row[funding_sought];
	$_SESSION['project_fundingcurrent'] = $row[funding_current];
	$_SESSION['project_imagefile'] = $row[image_file];
	$_SESSION['project_descshort'] = $row[desc_short];
	$_SESSION['project_desclong'] = $row[desc_long];

    header("Location: single.php"); /* Redirect browser */
	
	//print_r($rows);
	echo $_GET['project'];
	echo $row[name];
	
	?>