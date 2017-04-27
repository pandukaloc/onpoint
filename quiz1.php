<?php
    include 'header.html';
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>	
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style1.css" type="text/css" media="all" />	
    <link rel="stylesheet" href="styling.css">
</head>

<body>
	<center>
	<h2>QUIZ!</h2>
	<p><b>Lets see how well you know about Sri Lanka!<br/>
	 (Note: Once submitted cannot retake the quiz)<br/></b></p>




	<font size="20" color=Red>
	<label name="myLabel" id="timing" ></label>
	</font>
	<br/>
	<font size color=#474E69>
	
	<form id="myForm">			
    	<p><font size="4">1) Where is Sri Lanka located?</font></p><br>
	<font size="3"><input type="radio" name="Question1" value="CA"/> &nbsp Central Asia</h1><br>
	<input type="radio" name="Question1" id="r1" value="SA"/> &nbsp South Asia</h1><br>
	<input type="radio" name="Question1" value="ME"/> &nbsp Middle East</h1><br>
	<input type="radio" name="Question1" value="NA"/> &nbsp Northern Africa</h1><br>
	<label name="myLabel" id="label1" ></label></h1><br>

	
	<p><font size="4">2) What is the percentage of the population in Sri Lanka that lives in towns or cities?</font></p><br>
	<input type="radio" name="Question2" value="63%"/> &nbsp 63%</h3><br>
	<input type="radio" name="Question2" value="82%"/> &nbsp 82%</h3><br>
	<input type="radio" name="Question2" value="32%"/> &nbsp 32%</h3><br>
	<input type="radio" name="Question2" id="r2" value="14%"/> &nbsp 14%</h3><br>
	<label name="myLabel1" id="label2"></label></h3><br>
	
	<p><font size="4">3) What country is Sri Lanka bordered by?</font></p><br>
	<input type="radio" name="Question3" value="India"/> &nbsp India</h3><br>
	<input type="radio" name="Question3" value="Parkistan"/> &nbsp Parkistan</h3><br>
	<input type="radio" name="Question3" id="r3" value="None"/> &nbsp None</h3><br>
	<input type="radio" name="Question3" value="China" /> &nbsp China</h3><br>
	<label name="myLabel1" id="label3"></label></h3><br>
	
	<p><font size="4">4) What is the capital city of Sri Lanka?</font></p><br>
	<input type="radio" name="Question4" value="Kandy"/> &nbsp Kandy</h3><br>
	<input type="radio" name="Question4" value="Jaffna"/> &nbsp Jaffna</h3><br>
	<input type="radio" name="Question4" id="r4" value="Colombo"/> &nbsp Colombo</h3><br>
	<input type="radio" name="Question4" value="Galle" /> &nbsp Galle</h3><br>
	<label name="myLabel1" id="label4"></label></h3><br>
	
	<p><font size="4">5)How many kilometres of coastline does Sri Lanka have?</font></p><br>
	<input type="radio" name="Question5" value="0km"/> &nbsp 0km</h3><br>
	<input type="radio" name="Question5" id="r5" value="1340km"/> &nbsp 1340km</h3><br>
	<input type="radio" name="Question5" value="984km"/> &nbsp 984km</h3><br>
	<input type="radio" name="Question5" value="457km" /> &nbsp 457km</h3><br>
	<label name="myLabel1" id="label5"></label></h3><br>
	
	<p><font size="4">6)What is the name used to denominate Sri Lanka in tourism industry?</font></p><br>
	<input type="radio" name="Question6" value="Ceylon"/> &nbsp Ceylon</h3><br>
	<input type="radio" name="Question6" id="r6" value="Pearl of the Indian Ocean"/> &nbsp Pearl of the Indian Ocean</h3><br>
	<input type="radio" name="Question6" value="Tambapanni"/> &nbsp Tambapanni</h3><br>
	<input type="radio" name="Question6" value="Heladiva" /> &nbsp Heladiva</h3><br>
	<label name="myLabel1" id="label6"></label></h3><br>
	
	<p><font size="4">7)What is the highest mountain in Sri Lanka?</font></p><br>
	<input type="radio" name="Question7" value="Nakales"/> &nbsp Manaslu</h3><br>
	<input type="radio" name="Question7" id="r7" value="Pidru Thalagala"/> &nbsp Mount Everest</h3><br>
	<input type="radio" name="Question7" value="Adem's Peak"/> &nbsp Broad Peak</h3><br>
	<input type="radio" name="Question7" value="Ritigala" /> &nbsp Mount Popa</h3><br>
	<label name="myLabel1" id="label7"></label></h3><br>
	
	<p><font size="4">8)What is the Longest river in Sri Lanka?</font></p><br>
	<input type="radio" name="Question8" value="Kalani"/> &nbsp Kalani</h3><br>
	<input type="radio" name="Question8" id="r8" value="Mahawali"/> &nbsp Mahawali</h3><br>
	<input type="radio" name="Question8" value="Walawe"/> &nbsp Walawe</h3><br>
	<input type="radio" name="Question8" value="kalu" /> &nbsp Kalu</h3><br>
	<label name="myLabel1" id="label8"></label><br>
	
	<p><font size="4">9)What kind of climate does Sri Lanka have?</font></p><br>
	<input type="radio" name="Question9" value="Arid"/> &nbsp Arid</h3><br>
	<input type="radio" name="Question9" value="Temperate"/> &nbsp Temperate</h3><br>
	<input type="radio" name="Question9" id="r9" value="Tropical"/> &nbsp Tropical</h3><br>
	<input type="radio" name="Question9" value="Sub-arctic" /> &nbsp Sub-arctic</h3><br>
	<label name="myLabel1" id="label9"></label></h3><br>
	
	<p><font size="4">10)Which one is the currency used in Sri Lanka? </font></p><br>
	<input type="radio" name="Question10" value="Euro"/> &nbsp Euro</h3><br>
	<input type="radio" name="Question10" value="Dollar"/> &nbsp Dollar</h3><br>
	<input type="radio" name="Question10" id="r10" value="Rupee"/> &nbsp Rupee</h3><br>
	<input type="radio" name="Question10" value="Rand" /> &nbsp Rand</h3><br>
	<label name="myLabel1" id="label10"></label></h3><br>
	<label name="myLabel" id="label11" width="100" height="100"></label></h3><br>

</font>	
 	<button type="button" onClick="myFunction()" id="quiz_submit" class = "button" value="submit" ">Submit</button>
	
	<button type="button" onclick="resetFunction()" class = "button" value="Reset">Reset</button>
</form>

</center>
<!-- end page -->
<script>
		function resetFunction() {
    		document.getElementById("myForm").reset();
		}
		
		
		function myFunction(){
			var tot = 0;
			clearTimeout(impor);
			document.getElementById("quiz_submit").disabled=true;
			
			if(r1.checked){
				document.getElementById('label1').style.color="green";
				document.getElementById('label1').innerHTML="Correct Answer";
				tot=tot + 2;
			}else{
				document.getElementById('label1').style.color="red";
				document.getElementById('label1').innerHTML="Wrong Answer. Correct Answer is Research or Plan";
				tot=tot -1;
			}
			
			if(r2.checked){
				document.getElementById('label2').style.color="green";
				document.getElementById('label2').innerHTML="Correct Answer";
				tot=tot + 2;
			}else{
				document.getElementById('label2').style.color="red";
				document.getElementById('label2').innerHTML="Wrong Answer. Correct Answer is VISA";
				tot=tot -1;
			}
			if(r3.checked){
				document.getElementById('label3').style.color="green";
				document.getElementById('label3').innerHTML="Correct Answer";
				tot=tot + 2;
			}else{
				document.getElementById('label3').style.color="red";
				document.getElementById('label3').innerHTML="Wrong Answer. Correct Answer is Map or a Compass";
				tot=tot -1;
			}
			if(r4.checked){
				document.getElementById('label4').style.color="green";
				document.getElementById('label4').innerHTML="Correct Answer";
				tot=tot + 2;
			}else{
				document.getElementById('label4').style.color="red";
				document.getElementById('label4').innerHTML="Wrong Answer. Correct Answer is Colombo";
				tot=tot -1;
			}
			if(r5.checked){
				document.getElementById('label5').style.color="green";
				document.getElementById('label5').innerHTML="Correct Answer";
				tot=tot + 2;
			}else{
				document.getElementById('label5').style.color="red";
				document.getElementById('label5').innerHTML="Wrong Answer. Correct Answer is Kandy";
				tot=tot -1;
			}
			if(r6.checked){
				document.getElementById('label6').style.color="green";
				document.getElementById('label6').innerHTML="Correct Answer";
				tot=tot + 2;
			}else{
				document.getElementById('label6').style.color="red";
				document.getElementById('label6').innerHTML="Wrong Answer. Correct Answer is Pearl of the Indian Ocean";
				tot=tot -1;
			}
			if(r7.checked){
				document.getElementById('label7').style.color="green";
				document.getElementById('label7').innerHTML="Correct Answer";
				tot=tot + 2;
			}else{
				document.getElementById('label7').style.color="red";
				document.getElementById('label7').innerHTML="Wrong Answer. Correct Answer is Mount Everest";
				tot=tot -1;
			}
			if(r8.checked){
				document.getElementById('label8').style.color="green";
				document.getElementById('label8').innerHTML="Correct Answer";
				tot=tot + 2;
			}else{
				document.getElementById('label8').style.color="red";
				document.getElementById('label8').innerHTML="Wrong Answer. Correct Answer is Cairo";
				tot=tot -1;
			}
			if(r9.checked){
				document.getElementById('label9').style.color="green";
				document.getElementById('label9').innerHTML="Correct Answer";
				tot=tot + 2;
			}else{
				document.getElementById('label9').style.color="red";
				document.getElementById('label9').innerHTML="Wrong Answer. Correct Answer is Nile";
				tot=tot -1;
			}
			if(r10.checked){
				document.getElementById('label10').style.color="green";
				document.getElementById('label10').innerHTML="Correct Answer";
				tot=tot + 2;
			}else{
				document.getElementById('label10').style.color="red";
				document.getElementById('label10').innerHTML="Wrong Answer. Correct Answer is A Guide";
				tot=tot -1;
			}

			var total = tot;
			alert("Your score is " + total + "/10!");
			if (total<3){
				document.body.style.backgroundColor = "tan"; 
			}else if( total<7){
				document.body.style.backgroundColor = "powderblue"; 
			}else{
				document.body.style.backgroundColor = "lightcoral"; 
			}
			
		}
	
		var minutes, seconds,impor,minutes1,seconds1;
 		var minutes, seconds,impor;
 		var timing = document.getElementById("timing");
		var seconds_left = 180;
			
	
impor=setInterval(function () {
 
    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);
	
    if(minutes<0 | seconds<0){
		timing.innerHTML ="00"+ ":" + "00";
		minutes=0;
		seconds=0;
		myFunction();
	}else{
		if(seconds<=9){
			timing.innerHTML ="0"+minutes + ":" +"0"+seconds;
		}else{
			timing.innerHTML ="0"+minutes + ":" + seconds;
		}
	} 
	seconds_left = seconds_left-1;
    
	}, 1000);		



 			
			
</script>
</html>
 <?php

    include 'footer.html';
?>