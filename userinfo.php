<?php
include_once('config.php');

$name =$_POST['name'];
$email =$_POST['email'];
$message =$_POST['text'];
//print_r($_POST);

if (mysqli_query($mysqli,"INSERT INTO `usercomment` (`name`, `email`, `message`) VALUES ('".mysqli_real_escape_string($mysqli,$name)."',
'".mysqli_real_escape_string($mysqli,$email)."','".mysqli_real_escape_string($mysqli,$message)."')")) {
    header("Location:home.php");;
} else {
    echo mysqli_error();
    exit;
}
?>