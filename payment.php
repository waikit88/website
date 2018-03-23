<?php
$config = include_once("config.php");
$db = pg_connect("host=localhost port='$config[port]' dbname=Project1 user='$config[user]' password='$config[password]'");

session_start();
if(isset($_SESSION['user'])){
    $owner = $_SESSION['user'];
}
else {
    // handle error
    echo "need to be logged in";
}

$name = $_POST[txt_name];
$owner = $_POST[txt_owner];
$amount = intval($_POST[txt_amount]);
$cc = $_POST[txt_cc];

$sql = "UPDATE project
        SET funding_current = funding_current + " . $amount . "
        WHERE name = '$name' AND owner = '$owner'";
$result = pg_query($db, $sql);

header("Location: project.php?name=" . $name . "&owner=" . $owner);
?>
