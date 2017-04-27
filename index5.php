<?php
ob_start();
session_start();
$current_file= $_SERVER['SCRIPT_NAME'];
//$connect= mysqli_connect("localhost","root","","a_database");
//$http_referer= $_SERVER['HTTP_REFERER'];
//returns the complete URL of the current page
 if(isset($_SERVER['HTTP_REFERER'])) {
      $http_referer= $_SERVER['HTTP_REFERER'];
   }

function loggedin(){
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
		return true;
	} else {
		return false;
		}
	}
	
	/*function getuserfield($field){
		$query="SELECT '$field' FROM 'users' WHERE 'id'='".$_SESSION['user_id']."'";
		if($query_run= mysqli_query($connect,$query)){
			$getf1=mysqli_fetch_assoc(mysqli_query($connect,$query));
			$getf2=$getf1[$field];
			if($query_result= $getf2){
				return $query_result;
			}
			
		}
	}*/
	
/*$connect= mysqli_connect("localhost","root","","a_database");
function getuserfield($field){
	$query= "SELECT '$field' FROM 'users' WHERE 'id'='".$_SESSION['user_id']."'";
echo'a1';
	if($query_run!= mysqli_query(mysqli_connect("localhost","root","","a_database"),$query)){echo 'a2';
		//return mysql_result($query_run,0,$field);
		$getfield= mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost","root","","a_database"), $query));echo 'a3';
		$field1= $getfield['$field'];
		if ($query_result= $field1){echo 'a4';
			return $query_result;
		}
	}
	
}*/
?>