<?php
session_start();
require('db.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aboutt</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

<style type="text/css">
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
    font-size:20px;
    color:#333;
   /* display:block;*/
   font-family:Times New Roman;
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
	align-self: stretch;

	width:70%;
	left:15%;
	right:15%;
	top:47%;
	border:2px strong #F0C;
	background:linear-gradient(to right,#D2DDB2,#C0D6AF,#DDE4B8,#D2DDB2,#DDE4B8,#C0D6AF,#D2DDB2);

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

/* Three columns side by side */
.column {
    float: left;
    width: 36%;
    margin-bottom: 16px;
    padding: 0 8px;
    align:center
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
}

/* Add some shadows to create a card effect */
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    background-color:#94C1A4;
   
}

/* Some left and right padding inside the container */
.container {
     padding: 0 16px;
     font-family: "Times New Roman", Times, serif;

}

/* Clear floats */
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;


}

.title {
    color: grey;

}

.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 20.5%;
}

.button:hover {
    background-color: #555;
}

.row
{
    padding-left: 20%;
    
     
}
.row1
{
    padding-left: 1%;
    
     
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
      <li class= "active">
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
       <li class= "active">
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
<h1 style="font-family:vivaldi;" align="center"><b>Our Team</b> </h1> </br>
<h2 style="font-family:vivaldi;" align="center"><b>Supervisors</b></h2>



<div class="row" >
  <div class="column">
    <div class="card" >
      <img src="images/pawneshsir.png" height="250" width="200" alt="Pawanesh Abrol" style="width:100%">
      <div class="container">
        <h2>Pawnesh Abrol</h2>
        <p class="title">PhD (Computer Science), MBA (HRM)</p>
        <p>Department of Computer Science & IT </p>
        <P>University of Jammu,J&K</p>
        <p>pawanesh.abrol@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
<img src="images/l.png" alt="Parveen Lehana" height="250" width="200" style="width:100%">
      <div class="container">
        <h2>Parveen Lehana</h2>
        <p class="title">Ph.D. (IIT Bombay, Stu), M.Sc. Electronics</p>
        <p>Department of Electronics </p>
        <P>University of Jammu, J&K</p>
        <p>pklehana@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  </div>

 <div class="row1" >
  <div class="column">
    <div class="card" >
      <img src="images/s.png" height="250" width="200" alt="SurbhiMahajan" style="width:100%">
      <div class="container">
        <h2>Surbhi Mahajan</h2>
        <p class="title">Mtech (Computer Science)</p>
        <p>Department of Computer Science & IT </p>
        <P>University of Jammu,J&K</p>
        <p>surbhijvs26@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
<img src="images/preet.jpg" alt="Preeti Digra" height="250" width="200" style="width:100%">
      <div class="container">
       <h2>Preeti Digra</h2>
        <p class="title">Mtech (Computer Science)</p>
        <p>Department of Computer Science & IT </p>
        <P>University of Jammu,J&K</p>
        <p>digrapreeti@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
<img src="images/parul.jpg" alt="Parul Sahi" height="250" width="200" style="width:100%">
      <div class="container">
       <h2>Parul Sahi</h2>
        <p class="title">Mtech (Computer Science)</p>
        <p>Department of Computer Science & IT </p>
        <P>University of Jammu,J&K</p>
        <p>digrapreeti@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
<img src="images/ruchi.png" alt="Ruchi Pandita" height="250" width="200" style="width:100%">
      <div class="container">
       <h2>Ruchi Pandita</h2>
        <p class="title">Mtech (Computer Science)</p>
        <p>Department of Computer Science & IT </p>
        <P>University of Jammu,J&K</p>
        <p>digrapreeti@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  </div>









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
   <form action="analyseme.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Analyse Signal</button>
  </form>
  <?php }
  else{?>
  <form action="analyseme.php" >
  <button type="submit" class="btn btn-success" >Analyse Signal</button>
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
   
   
</center>
</div>
</div>

</body>
</html>