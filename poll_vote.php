<?php

    
require 'index5.php';
require 'index6.php';
if (loggedin()) {
	//$query = mysqli_query($con,"SELECT id FROM users WHERE id='".$_SESSION['user_id']."'");
	if ($query_run= mysqli_query($con,"SELECT id FROM vote WHERE id='".$_SESSION['user_id']."'")){
		$query_num_rows=mysqli_num_rows($query_run);
		if ($query_num_rows==0){
			$verify=$_SESSION['user_id'];
			$query="INSERT INTO vote VALUES ('".mysqli_real_escape_string($con,$verify)."')";
			$result = mysqli_query($con,$query);
		 }else if ($query_num_rows==1){
			header('Location:already.php');
		}
	}
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$r = $array[0];
$h = $array[1];
$s = $array[2];
$m = $array[3];
$k = $array[4];


if ($vote == 0) {
  $r = $r + 1;
}
if ($vote == 1) {
  $h = $h + 1;
}
if ($vote == 2) {
  $s = $s + 1;
}
if ($vote == 3) {
  $m = $m + 1;
} 
if ($vote == 4) {
  $k = $k + 1;
}

//insert votes to txt file
$insertvote = $r."||".$h."||".$s."||".$m."||".$k;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);


?>

<h2>Result:</h2>
<table>
<tr>
<td>Rice and Curry:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($r/($h+$r+$s+$m+$k),5)); ?>'
height='20'>
<?php echo(100*round($r/($h+$r+$s+$m+$k),5)); ?>%
</td>
</tr>
<tr>
<td>Hoppers:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($h/($h+$r+$s+$m+$k),5)); ?>'
height='20'>
<?php echo(100*round($h/($h+$r+$s+$m+$k),5)); ?>%
</td>
</tr>
<tr>
<td>String Hoppers:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($s/($h+$r+$s+$m+$k),5)); ?>'
height='20'>
<?php echo(100*round($s/($h+$r+$s+$m+$k),5)); ?>%
</td>
</tr>
<tr>
<td>Milk Rice:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($m/($h+$r+$s+$m+$k),5)); ?>'
height='20'>
<?php echo(100*round($m/($h+$r+$s+$m+$k),5)); ?>%
</td>
</tr>
<tr>
<td>Kottu:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($k/($h+$r+$s+$m+$k),5)); ?>'
height='20'>
<?php echo(100*round($k/($h+$r+$s+$m+$k),5)); ?>%
</td>
</tr>
</table>
<?php
}
else {
	echo 'Please log in to vote.';
}


?>