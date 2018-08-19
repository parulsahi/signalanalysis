<?php
session_start();
require('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Biomedical Signals</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>







<style type="text/css">



#myimg #myimg2{
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myimg #myimg2:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
    font-family:Times New Roman;
    font-size:16px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: relative;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}





.sidenav {
    height:700px;
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
.right {
    height:700px;
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
	height:700px;
	width:70%;
	left:15%;
	right:15%;
	top:47%;
	border:2px strong #F0C;
	background:linear-gradient(to right,#D2DDB2,#C0D6AF,#DDE4B8,#D2DDB2,#DDE4B8,#C0D6AF,#D2DDB2);
	font-size:40px;
float:left;
}
h4
{ 
padding-left:2%;
padding-right:2%;
font-family:Times New Roman;
}
footer
{background-color:#000;
color:#FFF;
}



.image{

height:250px;
width:250px;
margin-right:100px;
margin-left:50px;
top:-500px;
float:left;
//border:2px solid;
//border-color:#ff2014;
}

.image3{
height:100px;
width:350px;
margin-right:100px;
//top:-500px;
float:right;
//border:2px solid;
//border-color:#ff2014;
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
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
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

<!--<div class="logo"><img src="images/logo2cc.png" /></div>-->


<div class="box">
<br />
<br />
<br />
<div class="lt" align="center"><b>Sigana</b>
</div>

</div>
<div>
<div class="sidenav">
<ul>
<li><a href="physiology.php">Physiology</a></li><br />
<li><a href="environment.php">Environment</a></li><br />
<li><a href="medicalsystems.php">Medical Systems</a></li><br />
<li><a href="instruments.php">Modern Medical Instruments</a></li><br />
<li><a href="nadi.php">Nadi Vigyan</a></li><br />
<li><a href="biomedicalsgns.php">Biomedical Signals</a></li><br />
<li><a href="signalana.php">Signal Analysis and Interpretation </a></li><br />
<li><a href="deep.php">Deep Learning</a></li></ul>
</div>
<div class="main"> 
<h2 style="font-family:vivaldi;margin-left:45px; margin-right:45px; margin-top:50px;" align="justify"><b>
Electroencephalogram (EEG)</b></h2>
<h4 align="justify" style="margin-left:45px; margin-right:45px;">
The electroencephalogram (EEG) is the depiction of the electrical activity occurring 
at the surface of the brain. 
EEG measures voltage fluctuations resulting from ionic current within the neurons of the brain. 
The electrical activity appears on the screen of the EEG machine as waveforms of varying frequency 
and amplitude measured in voltage. 
<br/><br/>
</h4>
<h4>
<div class="image">
  <a href="#"><img id="myimg" src="images/eeg2.png" height:"1000px" width="300px" alt="10 - 20 system for electrode placement"></a>  
 </div>
</h4> 
<h4 align="justify" style="margin-left:45px; margin-right:45px;"><b>Recording an EEG</b></h4>
<h4><p align="justify" style="margin-left:45px; margin-right:45px;">
The EEG can be recorded by placing the electrodes on the scalp of the subject.
 The standard system for placement of the electrodes or channels on the scalp of the person is the 10-20 system. 
 In the 10-20 system the placement of the electrodes is based on the relationship between area of
  cerebral cortex (the 10 and 20 refers to the 10% and 20% inter-electrode distance) and location of electrode. 
  The placement of the electrodes is adjusted acc. to the parts of human brain:
   F (frontal), C (central), T (temporal), P (posterior), O (Occipital). </h4>
</p>

<br/>

<h4 align="justify" style="margin-left:45px; margin-right:45px;"><b>Types of Brain Waves according to frequency:</b></h4>
<h4>
<div class="image3">
  <a href="#"><img id="myimg2" src="images/eeg3.png" height:"700px" width="300px" alt="Types of brain waves"></a>  
 </div>
 </h4>
<h4 align="justify" style="margin-left:45px; margin-right:45px;">
<br/>
<ul>
<li>Alpha waves: 8-13 Hz</li>
<li>Beta waves: 14-30 Hz</li>
<li>Theta waves: 4-7 Hz</li>
<li>Delta waves: <3.5 Hz</li>

</ul>
</h4>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myimg');
var img2 = document.getElementById('myimg2');

var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img2.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>


    </div>
<div class="right"> 

<center>
<?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
   <form action="recordme.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Record Signal</button>
  </form>
  <?php }
  else{?>
  <form action="recordme.php" >
  <button type="submit" class="btn btn-success" >Record Signal</button>
  </form>
  <?php } ?>

<br/>
  <?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
   <form action="pictures1.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">upload Images</button>
  </form>
  <?php }
  else{?>
  <form action="pictures1.php" >
  <button type="submit" class="btn btn-success" >Upload images</button>
  </form>
  <?php } ?>

  <br />

 <?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
   <form action="vp.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">View Profile</button>
  </form>
  <?php }
  else{?>
  <form action="vp.php" >
  <button type="submit" class="btn btn-success" >View Profile</button>
  </form>
  <?php } ?>
  
  <br />

 <?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
   <form action="picsearchnormal.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Analyse 1</button>
  </form>
  <?php }
  else{?>
  <form action="picsearchnormal.php" >
  <button type="submit" class="btn btn-success" >Analyse 1</button>
  </form>
  <?php } ?>
  
  <br />

 <?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
   <form action="picsearchproposed2.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Analyse 2</button>
  </form>
  <?php }
  else{?>
  <form action="picsearchproposed2.php" >
  <button type="submit" class="btn btn-success" >Analyse 2</button>
  </form>
  <?php } ?>
   
   
</center>
</div>

</div>
<footer align="center">
Developed by Department of Computer Science & IT, University of Jammu</footer>
</body>
</html>



