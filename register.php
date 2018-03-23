  <?php
	if($_POST[txt_username] == $_POST[txt_re_username] && $_POST[txt_password] == $_POST[txt_re_password]){
		// Connect to the database. Please change the password in the following line accordingly
		$config = include_once("config.php");
		$db = pg_connect("host=localhost port='$config[port]' dbname=Project1 user='$config[user]' password='$config[password]'");	
		$result = pg_query($db, "SELECT * FROM users where username = '$_POST[txt_username_login]'");		// Query template
		$row    = pg_fetch_assoc($result);		// To store the result row
	if ($row[username] == ''){
		$insert = pg_query($db, "INSERT INTO users (username, email, password, name, role, location, timezone, biography, profileurl, weburl) VALUES ('$_POST[txt_username]','','$_POST[txt_password]','$_POST[txt_name]','users','','','','','')");		// Query template
		$execute = pg_fetch_assoc($insert);		// To store the result row
		$message = "User Successful Registered";
		session_start();
		$_SESSION['message'] = $message;
		//echo $message;
		header("Location: /demo/index.php"); /* Redirect browser */
	}
	else {
		$message = "User Created Failed";
		}
	}
	else if ($_POST[txt_username] != $_POST[txt_re_username]){
		$message = "Username Not Match";
		session_start();
		$_SESSION['message'] = $message;
		header("Location: /demo/index.php"); /* Redirect browser */
	}
	else {
		$message = "Password Not Match";
		session_start();
		$_SESSION['message'] = $message;
		header("Location: /demo/index.php"); /* Redirect browser */
	}
	

 ?>  