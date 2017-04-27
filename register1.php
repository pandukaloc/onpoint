<?php
include 'header.html';
?>
<link rel="stylesheet" href="styling.css">
<link rel="stylesheet" href="style1.css" type="text/css" media="all" />
<body>
<div class="container">

    <?php
require 'index5.php';
require 'index6.php';
error_reporting(0);

if(!loggedin()){
	
	if(isset($_POST['username']) && isset($_POST['password']) 
		&& isset($_POST['password_again']) && isset($_POST['firstname']) 
	&& isset($_POST['surname'])){
		$username= $_POST['username'];
		$password= $_POST['password'];
		$password_again= $_POST['password_again'];
		$password_hash= md5($password);
		$firstname= $_POST['firstname'];
		$surname= $_POST['surname'];
		$email= $_POST['email'];
		
		if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname) && !empty($email)){
			if ($password!=$password_again){
				echo 'Passwords do not match';
			}else{
				//checking if username is already existing in the database
				$query="SELECT username FROM users WHERE username='$username'";
				$query_run= mysqli_query($con,$query);
				
				if(mysqli_num_rows($query_run)==1){
					echo 'The username '.$username.' already exists.';
				} else {
					//Registration process
					$query="INSERT INTO users VALUES ('','".mysqli_real_escape_string($con,$username)."','".mysqli_real_escape_string($con,$password_hash)."','".mysqli_real_escape_string($con,$firstname)."','".mysqli_real_escape_string($con,$surname)."','".mysqli_real_escape_string($con,$email)."')";
					if ($query_run= mysqli_query($con,$query)){
						echo'Register success';
                        header('Location: register1.php');
					}else{
						echo 'Registration unsucessful. Try again later.';
					}
				}
			}
		}else{
			echo 'All fields are required';
		}
	}
		
?>
<center>
<form  class="fill" action="register1.php" method="POST" ><br><br><b>
<div class="required">
Username:<br> <input type="text" name="username" value="<?php echo $username; ?>"><br><br>
Password:<br> <input type="password" name="password"><br><br>
Password again:<br> <input type="password" name="password_again"><br><br>
Firstname:<br> <input type="text" name="firstname" value="<?php echo $firstname; ?>"> <br><br>
Surname:<br> <input type="text" name="surname" value="<?php echo $surname; ?>"> <br><br>
Email:<br> <input type="email" name="email" value="<?php echo $email; ?>"> <br><br>
<input class="button" type="submit" value="Register"> <br><br><br>
</div></b>
    </form></center>
<?php
} else if(loggedin()){
	echo' You are already registered and logged in.';
}

?>
       </div>
</body>

<?php
include 'footer.html';
?>