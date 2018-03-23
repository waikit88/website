<?php
    $config = include_once("config.php");
    $db = pg_connect("host=localhost port='$config[port]' dbname=Project1 user='$config[user]' password='$config[password]'");
    $result = pg_query($db, "SELECT * FROM project where lower(name) LIKE lower('%$_GET[sys_txt_keyword]%')");        // Query template
    $rows    = pg_fetch_all($result);        // To store the result row
	$numRows = pg_num_rows($result);      

	echo $rows[0][name];
	echo $rows[1][name];
	echo $rows[2][name];
	
	session_start();
	$_SESSION['searchword'] = $_GET[sys_txt_keyword];
	$_SESSION['rows'] = $rows;
	$_SESSION['numrows'] = $numRows;
	
    header("Location: search-results.php"); /* Redirect browser */
	
	//print_r($rows);
	echo $_GET['sys_txt_keyword'];
	echo $row[name];
	
	?>