<?php
    include 'header.html';
?>
<link rel="stylesheet" href="styling.css">
<body><center>
<div class="container">

   
<?php
    include 'header.html';
require 'index5.php';
require 'index6.php';

if (loggedin()) {
	echo 'You are logged in. <a href="logout.php"> Log out </a><br>';
	
	
} else {
	include 'index4.php';
}

?>
    </div></center>
</body>
<?php
    include 'footer.html';
?>