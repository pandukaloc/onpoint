<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>
<html>

<head>
	<title>Contact Us</title>
	
	<meta charset="utf-8" />
	<link rel="stylesheet" href="">
	
	<link rel="stylesheet" href="styleContact-us.css" type="text/css" media="all" />
	<!-- CSS Test Zone -->
	<style>
		/**
         * Item Styles
         */
		.quovolve {
			margin: 20px 0;
		}
		.quovolve blockquote {
			margin: 0;
		}
		.quovolve blockquote p {
			margin: 10px 0;
		}
		.quotes ul {
			list-style: none;
		}

	</style>
</head>

<body>
	
	<h2>WE'D LOVE TO HEAR FROM YOU...</h2>
	<div class="demo" id="demo-one">

		<div class="panels">
			<div class="panel" id="panel-1">
<!--				--><?php
//
//				$sql = "SELECT * from usercomment";
//				$result = $conn->query($sql);
//
//				if ($result->num_rows > 0) {
//					// output data of each row
//					while($row = $result->fetch_assoc()) {
//						?>
<!--						<div class="quotes">-->
<!--					<blockquote>-->
<!--						<p>&ldquo;--><?php //echo $row["message"];?><!--&rdquo;</p>-->
<!--						<p>&mdash; --><?php //echo $row["name"];?><!--</p>-->
<!--					</blockquote>-->
<!--				</div>-->
<!--				--><?php
//						//echo "" . $row["name"]. " said,  " . $row["message"].  "<br>";
//					}
//				} else {
//					echo "0 results";
//				}
//				$conn->close();
//
//				?>

				<div class="quotes">
					<blockquote>
						<p>&ldquo;Is it very useful and helpful!&rdquo;</p>
						<p>&mdash; Alan Fraser<br>England </p>
					</blockquote>

					<blockquote>
						<p>&ldquo;Thanks alot for this site. I had a wonderful vacation in Sri Lanka. &rdquo;</p>
						<p>&mdash; Madison Smith <br>America</p>
					</blockquote>

					<blockquote>
						<p>&ldquo;Iam a Sri Lankan living in Australia. I came back after 6 years and it was nice to see such beautiful scenaries. Thanks to this site.&rdquo;</p>
						<p>&mdash; Shenal Pieris<br>Australia </p>
					</blockquote>

					<blockquote>
						<p>&ldquo; Had a great time. Credits to this site.&rdquo;</p>
						<p>&mdash; Ashley Gills<br>England </p>
					</blockquote>

					<blockquote>
						<p>&ldquo;Thankyou to the site! Keep it going!&rdquo;</p>
						<p>&mdash; Shane Kirtsten </p>
					</blockquote>

					<blockquote>
						<p>&ldquo;This site really helped make my visit to Sri Lanka memorable! &rdquo;</p>
						<p>&mdash; Julie Sans<br>New Zealand </p>
					</blockquote>
				</div><!-- .quotes -->

			</div><!-- .panel -->


		</div><!-- .panels -->

	</div><!-- .demo -->


	
	<form id="myform" action="userinfo.php" method="post" >
		<div class="required">
		<p>Name</p>

		<input value="name" type="text" class = "textbox"   name="name" placeholder="Full Name" required/>

		<span class="asterisk">  </span> 
		<p>Email Address</p>

		<input value="email" type="email" class = "textbox"   name="email" placeholder="mail@example.com" required />

		<span class="asterisk">  </span>
		<p>Message</p>		
		<textarea value="message"name="text" placeholder="Write something to us"id="message" required/></textarea>
		<span class="asterisk">  </span>
		<br/>
		<br/>
		<button  type="submit"  class = "button" value="submit">Submit</button>
	
		<button type="reset" class = "button" value="Reset">Reset</button>
		
		</div>
	
	</form>

<script type="text/javascript">
		
	function formValiadtion() {

        if (document.getElementById("name").value == "") {

            alert("Name field cannot be empty");

        }

        else if (document.getElementById("email").value == "") {

            alert("Email field cannot be empty");

        }

        else if (!document.getElementById("email").value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {

            alert("Please check you email address");

        }

        else if (document.getElementById("message").value == "") {

            alert("Please enter your Message");

        }


        else {

            var name = document.getElementById("name").value;

            alert(name + " your message has been sent");

        }

    }
	
</script>

<br/>
<h2>FIND US </h2>

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'>
</script>

<div style='overflow:hidden;height:440px;width:700px;'>
<div id='gmap_canvas' style='height:440px;width:700px;'>
</div>
	</div>


<style>
#gmap_canvas img{max-width:none!important;background:none!important}
</style>
	<!-- jQuery -->
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="bd.jquery.min.js"%3E%3C/script%3E'))</script>

	<!-- JavaScript -->
	<script src="bd.ui.js"></script>
	<script src="jquery.quovolver.min.js"></script>

	<!-- JavaScript Test Zone -->
	<script>
		$(document).ready(function() {

			// Example One
			$('#demo-one .quotes').quovolver();


		});
	</script>

<script type='text/javascript'>function init_map(){
var myOptions = {zoom:10,center:new google.maps.LatLng(6.865661299999999,79.86145390000001),mapTypeId: google.maps.MapTypeId.TERRAIN};
map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.865661299999999,79.86145390000001)});
infowindow = new google.maps.InfoWindow({content:'<strong>Informatics Institute of Technology (IIT)</strong><br>No.57, Ramakrishna Road, Colombo 06, Sri Lanka<br>'});
google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>

</body>

</html>

