<?php
$config = include_once("config.php");
$db = pg_connect("host=localhost port='$config[port]' dbname=Project1 user='$config[user]' password='$config[password]'");

/*
// Create Table if it does not exist
$sql = "select 1 from project";
$result = pg_query($db, $sql);

if(empty($result)){
    $sql = file_get_contents('project.sql');
    $result = pg_query($db, $sql);
}
*/

// get owner from session
session_start();
if(isset($_SESSION['user'])){
    $owner = $_SESSION['user'];
}
else {
    // handle error
    echo "need to be logged in";
}

// Insert data
$name = $_POST[txt_name];
$target = intval($_POST[txt_target]);
$desc_short = $_POST[txt_desc_short];
$desc_long = $_POST[txt_desc];
$start = $_POST[txt_start_date];
$end = $_POST[txt_end_date];

// Download Image

$temp = $_FILES['img_projectImg'];

$tempName = $_FILES['img_projectImg']['name'];
$tempDir = $_FILES['img_projectImg']['tmp_name'];
$tempSize = $_FILES['img_projectImg']['size'];
$tempError = $_FILES['img_projectImg']['error'];

$tempExt = strtolower(end(explode('.',$tempName)));
$imgName =$name."_pic_".uniqid('', true).".".$tempExt;
$dest = 'images/project_image/'.$imgName;
move_uploaded_file($tempDir, $dest);


$sql = "INSERT INTO project (name, owner, start_date, end_date,
                             funding_sought, funding_current,
                             image_file, desc_short, desc_long)
        VALUES('$name', '$owner', '$start', '$end', $target, 0,
               '$dest','$desc_short','$desc_long')";
$result = pg_query($db, $sql);

// NOTE: use request instead, to be deleted
// session_start();
// $_SESSION['project_name'] = $name;

header("Location: project.php?name=" . $name . "&owner=" . $owner);
?>
