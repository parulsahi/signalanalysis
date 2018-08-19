<?php

require('db.php');

session_start();
if(!isset($_SESSION["id"])){
header("Location: login.php");
exit(); }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SignUp</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

<script type="text/javascript">

function ShowPicture(id,Source) {
if (Source=="1"){
if (document.layers) document.layers[''+id+''].visibility = "show"
else if (document.all) document.all[''+id+''].style.visibility = "visible"
else if (document.getElementById) document.getElementById(''+id+'').style.visibility = "visible"
}
else
if (Source=="0"){
if (document.layers) document.layers[''+id+''].visibility = "hide"
else if (document.all) document.all[''+id+''].style.visibility = "hidden"
else if (document.getElementById) document.getElementById(''+id+'').style.visibility="hidden"
}
}


$(document).ready(function() {

  $('#sound').on('change', function() {
    change($(this).val());
  });

});


function change(sourceUrl) {
  var audio = document.getElementById("player");
  var source = document.getElementById("mp3_src");

  audio.pause();

  if (sourceUrl) {
    source.src = sourceUrl;
    audio.load();
    audio.play();
  }
}


function taste(item)
{
document.getElementById("t2").value = item;
ShowPicture('Styletaste',0);
}

function eye(item)
{
document.getElementById("t3").value = item;
ShowPicture('Styleeye',0);
}

function hand(item)
{
document.getElementById("t4").value = item;
ShowPicture('Stylehand',0);
}

function color(item)
{
document.getElementById("t5").value = item;
ShowPicture('Stylecolor',0);
}


</script>
<style type="text/css">


#Styletaste {
                  margin-left:400px;
	position:absolute;
	visibility:hidden;
	border:solid 1px #CCC;
	padding:5px;

}

#Styleeye{
                  margin-left:400px;
	position:absolute;
	visibility:hidden;
	border:solid 1px #CCC;
	padding:5px;

}

#Stylehand{
                  margin-left:400px;
	position:absolute;
	visibility:hidden;
	border:solid 1px #CCC;
	padding:5px;

}

#Stylecolor{
                  margin-left:400px;
	position:absolute;
	visibility:hidden;
	border:solid 1px #CCC;
	padding:5px;

}


.sidenav {
    height:1000px;
    width:15%;
    top:47%;
    left:0;
    background-color:#94C1A4;
    padding-top:2%;
	float:left;
}

.sidenav a {
	padding-left:2%;
   /* padding:15% 15% 15% 15%;*/
    text-decoration:blink;
    font-size:20px;
    color:#333;
   /* display:block;*/
}

.sidenav a:hover {
    color: #06F;
}
.container
{
  height:700px; 
   }
}
.right {
    height:1000px;
    width:15%;
    top:47%;
    right:0;
    background-color:#94C1A4;
    padding-top:2%;
	float:left;
}

.right a {
    padding:15% 15% 15% 15%;
    text-decoration:blink;
    font-size:25px;
    color:#333;
   /* display:block;*/
}

.right a:hover {
    color:#06F;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 10px;}
    .sidenav a {font-size: 40px;}
}
.logo
{
	position: fixed;
    top:0;
    left:0;
	height:10%;
	width:7%;
}

.box{
	height:250px;
	width:100%;
    margin-top:4.5%;
	-webkit-animation:myani 5s;
	-webkit-animation-iteration-count:infinite;
}
@-webkit-keyframes myani{
	from{
		background:url(images/img.png);
			background-repeat:no-repeat;
			background-size:100% 100%;}
	to{
		background:url(images/stethoscope-and-copy-space_23-2147652347.jpg);
			background-repeat:no-repeat;
			background-size:100% 100%;}
}


.lt {
    width:20%;
    height:55px;
	color:#006;
	font-size:600%;
	font-family:"vivaldi";
    position: relative;
	margin-top:-3%;
    -webkit-animation: mymove 5s infinite;
    animation: mymove 10s infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    from {left:0;}
    to {left:40%;}
}
@keyframes mymove {
    from {left:0;}
    to {left:40%;}
}
.l1
{margin-top:9px;
}
.main
{
	height:1000px;
	width:70%;
	left:15%;
	right:15%;
	top:47%;
	border:2px strong #F0C;
	background:linear-gradient(to right,#D2DDB2,#C0D6AF,#DDE4B8,#D2DDB2,#DDE4B8,#C0D6AF,#D2DDB2);
	font-size:40px;
float:left;
}
p{

bottom:0;
}
footer
{background-color:#000;
color:#FFF;
}

  #form1 {
    position: relative;
  float : left;
  padding-left: 150px;
}

#form2 {
    position: relative;
  float : right;
   padding-right: 150px;
}

#form3 {
    position: relative;
  float : left;
  padding-left: 330px;
}
#form4 {
    position: relative;
  float : right;
   padding-right: 330px;
}

</style>
</head>

<body bgcolor="#E6E6E6">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <img class="logo" src="images/new.png"/>
      <a class="navbar-brand" href="#"></a>
    </div>

    <?php
    if (isset($_SESSION["id"])) {
    ?>
     <ul class="nav navbar-nav navbar-right l1">
     <li><a href="#">Welcome <?php echo $_SESSION['fname']; ?>!</a> </li>

     <li>
        <a href="index.php">Home</a>
      </li>
      <li>
        <a href="about.php">About</a>
      </li>
      <li><a href="contact.php">Contact Us</a></li>
		<li><a href="logout.php">Logout</a></li>
   </ul>
    <?php } else { ?>
       <ul class="nav navbar-nav navbar-right l1">
 

     <li>
        <a href="index.php">Home</a>   
      </li>
       <li>
        <a href="about.php">About</a>
      </li>
       <li><a href="contact.php">Contact Us</a></li>
      <li><a href="login.php">Login</a></li>
 <li><a href="signup.php">Sign up</a></li>     
    </ul>
    <?php   }?>
     </div>
    
</nav>


<div class="box">
<br />
<br />
<br />
<div class="lt" align="center"><b>Sigana</b>
</div>

</div>
<h1 style="font-family:vivaldi;" align="center"> <b>Welcome to Sigana</b></h1>

 <center>
<div class="container">
  <form action="recordme.php" id="form1" >
  <br/>
  <br />
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Record Signal</button>
  </form>
  

 
 <form action="vp.php" id= "form2" >
  <br/>
  <br />
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">View Profile</button>


  </form>
  <form action="pictures1.php" >
  <br/>
  <br />
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Upload Pictures</button>


  </form>
   <br/>
  <br />
 
  <form action="picsearchnormal.php" id= "form3">
  <br/>
  <br />
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Analyse 1</button>
  </form>

    <form action="picsearchproposed2.php" id= "form4">
  <br/>
  <br />
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Analyse 2</button>
  </form>

 
 <!-- </form>

  </form>
  <form action="pictures2.php">
  <br/>
  <br />
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Pictures2</button>


  </form>
-->
</div>
</center>
<footer align="center">
Developed by Department of Computer Science & IT, University of Jammu</footer>
</body>
</html>