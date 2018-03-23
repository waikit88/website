<?php
if ($_SESSION['user'] == '')
{
    $config = include_once("config.php");
    $db = pg_connect("host=localhost port='$config[port]' dbname=Project1 user='$config[user]' password='$config[password]'");
    $result = pg_query($db, "SELECT * FROM users where username = '$_POST[txt_username_login]' AND password = '$_POST[txt_password_login]'");        // Query template
    $row    = pg_fetch_assoc($result);        // To store the result row
    if ($row[username] == ''){
		$message = "Username or Password Incorrect!";
		session_start();
		$_SESSION['message'] = $message;
        header("Location: index.php"); /* Redirect browser */
        // header("Location: /" . $config[prefix] . "/index.php"); [> Redirect browser <]
    }
    else if ($row[role] == 'admin'){
        session_start();
        $_SESSION['user'] = $row[username];
        $_SESSION['name'] = $row[name];
		$_SESSION['email'] = $row[email];
        $_SESSION['role'] = $row[role];
        $_SESSION['location'] = $row[location];
        $_SESSION['timezone'] = $row[timezone];
        $_SESSION['biography'] = $row[biography];
        $_SESSION['profileurl'] = $row[profileurl];
        $_SESSION['weburl'] = $row[weburl];
        header("Location: profile_admin.php"); /* Redirect browser */
        // header("Location: /" . $config[prefix] . "/profile_admin.php"); [> Redirect browser <]
    }
    else {
        session_start();
        $_SESSION['user'] = $row[username];
        $_SESSION['name'] = $row[name];
		$_SESSION['email'] = $row[email];
        $_SESSION['role'] = $row[role];
        $_SESSION['location'] = $row[location];
        $_SESSION['timezone'] = $row[timezone];
        $_SESSION['biography'] = $row[biography];
        $_SESSION['profileurl'] = $row[profileurl];
        $_SESSION['weburl'] = $row[weburl];
        header("Location: profile.php"); /* Redirect browser */
    }
}
?>
