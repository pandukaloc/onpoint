<?php
    include 'header.html'
?>
<html>
<head>
    <link rel="stylesheet" href="styling.css">

<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject;
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<body><center>
<div id="poll">
<h3>What is the most popular Sri Lankan dish?</h3>
<form><br>
Rice and Curry:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br><br>
Hoppers (Appa):&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="radio" name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp="vote" value="1" onclick="getVote(this.value)">
<br><br>
String Hoppers (Indi Appa):
<input type="radio" name="vote" value="2" onclick="getVote(this.value)">
<br><br>
Milk Rice (Kiribath):&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="radio" name="vote" value="3" onclick="getVote(this.value)">
<br><br>
Kottu:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="radio" name="vote" value="4" onclick="getVote(this.value)"><br>
</form>
</div></center>
</body>
</html>
<?php
    include 'footer.html'
?>