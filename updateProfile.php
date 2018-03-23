  <?php
  		// Connect to the database. Please change the password in the following line accordingly
		$config = include_once("config.php");
		$db = pg_connect("host=localhost port='$config[port]' dbname=Project1 user='$config[user]' password='$config[password]'");	
		session_start();
		$result = pg_query($db, "UPDATE users SET email = '$_GET[txt_email]', name = '$_GET[txt_name]', location = '$_GET[txt_location]', timezone = '$_GET[txt_time_zone]', biography = '$_GET[txt_bio]', profileurl = '$_GET[txt_profileurl]', weburl = '$_GET[txt_web]' WHERE username = '$_SESSION[user]'");
		$row    = pg_fetch_assoc($result);		// To store the result row
		
		$messageProfile = "Profile Successful Updated";
		$_SESSION['messageProfile'] = $messageProfile;
		//echo $message;
		
		$result = pg_query($db, "SELECT * FROM users where username = '$_SESSION[user]'");        // Query template
		$row    = pg_fetch_assoc($result);        // To store the result row
		
        $_SESSION['user'] = $row[username];
        $_SESSION['name'] = $row[name];
		$_SESSION['email'] = $row[email];
        $_SESSION['role'] = $row[role];
        $_SESSION['location'] = $row[location];
        $_SESSION['timezone'] = $row[timezone];
        $_SESSION['biography'] = $row[biography];
        $_SESSION['profileurl'] = $row[profileurl];
        $_SESSION['weburl'] = $row[weburl];
		header("Location: /demo/profile.php"); /* Redirect browser */
  ?>