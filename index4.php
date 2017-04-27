<?php

if (isset($_POST['username']) && isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
$password_hash= md5($password);

if (!empty($username)&& !empty($password)){
	$query= "SELECT id FROM users WHERE username='".mysqli_real_escape_string($con,$username)."' AND password='".mysqli_real_escape_string($con,$password_hash)."'";

	
	if ($query_run= mysqli_query($con,"SELECT id FROM users WHERE username='$username' AND password='$password_hash'")){
		$query_num_rows=mysqli_num_rows($query_run);
		
		
		if ($query_num_rows==0){
			echo 'Invalid username/password combination.';
		}else if ($query_num_rows==1){
			//echo 'ok';
			$getId= mysqli_fetch_assoc(mysqli_query($con,$query));
			
			$uid=$getId['id'];
			echo $uid;
			$_SESSION['user_id']= $uid;
			header('Location: index3.php');
		}
	}
}else{
		echo 'You must supply a username and password.';
	}
}


?>


<head>
<link rel="stylesheet" href="style1.css" type="text/css" media="all" /></head>

<body class="set"><center>
<form class="fill" action=" <?php echo $current_file; ?>" method="POST"> <br><br>
<div class="required">

Username: <br><input type="text" name="username"><br><br>
Password:<br> <input type="password" name="password"><br><br><br><br>
<input class="button" type="submit" value= "Log in" >
</div>
</form></center>
    </body>
